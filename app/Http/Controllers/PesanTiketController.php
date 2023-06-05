<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User_tiket;
use Carbon\Carbon;

class PesanTiketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pesan_tiket');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
            'tanggal_kedatangan' => 'required|date',
            'jumlah_tiket' => 'required|numeric',
            'harga' => 'required|numeric',
            'status' => 'nullable',
        ]);

        if ($request->has('status') && $request->status === 'Bayar Ditempat') {
            $data['status'] = 'Bayar Ditempat';
        } else {
            $data['status'] = 'Belum Lunas';
        }

        $tanggalKedatangan = Carbon::parse($request->tanggal_kedatangan)->format('Y-m-d');
        $jumlahPengunjung = User_tiket::whereDate('tanggal_kedatangan', $tanggalKedatangan)->sum('jumlah_tiket');

        if ($jumlahPengunjung + $request->jumlah_tiket > 100) {
            return redirect()->route('pesan_tiket')->with('error', 'Jumlah pengunjung melebihi kapasitas harian!');
        }

        User_tiket::create($data);

        return redirect()->route('tiket')->with('success', 'Tiket berhasil dipesan!');
    }
}
