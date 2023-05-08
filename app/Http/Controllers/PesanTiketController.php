<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PesanTiketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pesan_tiket');
    }
    public function submitForm(Request $request)
    {
        // Lakukan validasi form dan proses data
        // Misalnya, simpan data ke database

        return redirect()->route('home')->with('success', 'Formulir berhasil dikirim!');
    }
}
