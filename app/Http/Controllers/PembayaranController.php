<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User_tiket;
use Dflydev\DotAccessData\Data;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Midtrans\Snap;
use Midtrans\Config;
use Midtrans\Notification;

class PembayaranController extends Controller
{
    public function index()
    {
        Config::$serverKey = config('midtrans.server_key');
        Config::$isProduction = false;
        Config::$isSanitized = true;
        Config::$is3ds = true;

        return view('pembayaran');
    }

    public function store(Request $request)
    {

        $request->validate([
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'no_hp' => 'required',
            'tanggal_kedatangan' => 'required',
            'jumlah_tiket' => 'required',
            'alamat' => 'required',
            'email' => 'required',
            'harga' => 'required',
        ]);

        $order = User_tiket::findOrFail($request->id);

        Config::$serverKey = config('midtrans.server_key');
        Config::$isProduction = false;
        Config::$isSanitized = true;
        Config::$is3ds = true;

        $params = [
            'transaction_details' => [
                'order_id' => $order->id,
                'gross_amount' => $order->harga,
            ],
            'customer_details' => [
                'name' => $order->nama,
                'email' => $order->email,
            ],
        ];

        $snapToken = Snap::getSnapToken($params);
        return view('pembayaran', compact('snapToken', 'order'));
    }

    public function callback(Request $request)
    {
        $serverKey = config('midtrans.server_key');
        $hashed = hash('sha512', $request->order_id . $request->status_code . $request->gross_amount . $serverKey);
        if ($hashed == $request->signature_key) {
            if ($request->transaction_status == 'capture') {
                $order = User_tiket::find($request->order_id);
                $order->update([
                    'status' => 'Lunas',
                ]);
            }
        }
    }
}
