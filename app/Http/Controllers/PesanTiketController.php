<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User_tiket;

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
            'harga' => 'required|numeric',
            'status' => 'nullable',
        ]);

        if ($request->has('status') && $request->status === 'Bayar Ditempat') {
            $data['status'] = 'Bayar Ditempat';
        } else {
            $data['status'] = 'Belum Lunas';
        }

        User_tiket::create($data);

        return redirect()->route('tiket')->with('success', 'Tiket berhasil dipesan!');
    }
}