<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User_tiket;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Midtrans\Snap;
use Midtrans\Config;
use Midtrans\Notification;

class PembayaranController extends Controller
{
    public function index()
    {
        Config::$serverKey = 'SB-Mid-server-RkTdLvv1U_kgwR8xGJ1DRGhD';
        Config::$isProduction = false;
        Config::$isSanitized = true;
        Config::$is3ds = true;

        return view('pembayaran');
    }

    public function notification(Request $request)
    {
        Config::$serverKey = 'SB-Mid-server-RkTdLvv1U_kgwR8xGJ1DRGhD';
        Config::$isProduction = false;
        Config::$isSanitized = true;
        Config::$is3ds = true;

        $payload = $request->getContent();
        $notification = json_decode($payload);

        $validSignatureKey = hash("sha512", $notification->order_id . $notification->status_code . $notification->gross_amount . "SB-Mid-server-RkTdLvv1U_kgwR8xGJ1DRGhD");

        if ($notification->signature_key != $validSignatureKey) {
            return response(['message' => 'Invalid signature'], 403);
        }

        $user_id = $notification->id;
        $email = $notification->email;

        $user_tiket = User_tiket::where('id', $user_id)
            ->where('email', $email)
            ->first();

        if ($user_tiket) {
            $user_tiket->status = 'Lunas';
            $user_tiket->save();

            return response(['message' => 'Sukses'], 200);
        }

        return response(['message' => 'User tiket not found'], 404);
    }

    public function finish(Request $request)
    {
        Config::$serverKey = 'SB-Mid-server-RkTdLvv1U_kgwR8xGJ1DRGhD';
        Config::$isProduction = false;
        Config::$isSanitized = true;
        Config::$is3ds = true;

        $user_id = $request->id;
        $email = $request->email;

        $user_tiket = User_tiket::where('id', $user_id)
            ->where('email', $email)
            ->first();

        if ($user_tiket) {
            $user_tiket->status = 'Lunas';
            $user_tiket->save();

            return view('lunas');
        }

        return response(['message' => 'User tiket not found'], 404);
    }

    public function unfinish(Request $request)
    {
        Config::$serverKey = 'SB-Mid-server-RkTdLvv1U_kgwR8xGJ1DRGhD';
        Config::$isProduction = false;
        Config::$isSanitized = true;
        Config::$is3ds = true;

        $user_id = $request->id;
        $email = $request->email;

        $user_tiket = User_tiket::where('id', $user_id)
            ->where('email', $email)
            ->first();

        if ($user_tiket) {
            $user_tiket->status = 'Belum Lunas';
            $user_tiket->save();

            return view('tiket');
        }

        return response(['message' => 'User tiket not found'], 404);
    }
}
