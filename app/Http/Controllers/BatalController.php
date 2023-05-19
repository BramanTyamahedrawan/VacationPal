<?php

namespace App\Http\Controllers;

use App\Models\User_tiket;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class BatalController extends Controller
{
    public function index(Request $request)
    {
        // Ambil semua data tiket
        $tiket = User_tiket::find($request->tiket_id);

        if ($tiket) {
            // Ubah status tiket menjadi "Dibatalkan"
            $tiket->status = 'Dibatalkan';
            $tiket->save();
        } else {
            // Tangani ketika tiket tidak ditemukan
            return view('batal', [
                'tiketDibatalkan' => User_tiket::where('email', Auth::user()->email)
                    ->where('status', 'Dibatalkan')
                    ->get()
            ]);
        }

        // Pindahkan tiket yang dibatalkan ke halaman batal.blade.php
        $tiketDibatalkan = User_tiket::where('email', Auth::user()->email)
            ->where('status', 'Dibatalkan')
            ->get();

        return view('batal', ['tiketDibatalkan' => $tiketDibatalkan]);
    }


    public function destroy($id)
    {
        // Temukan tiket berdasarkan ID
        $tiket = User_tiket::find($id);

        if ($tiket) {
            // Hapus tiket jika ditemukan
            $tiket->delete();
        }

        // Pindahkan tiket yang dibatalkan ke halaman batal.blade.php
        $tiketDibatalkan = User_tiket::where('email', Auth::user()->email)
            ->where('status', 'Dibatalkan')
            ->get();

        return view('batal', ['tiketDibatalkan' => $tiketDibatalkan]);
    }
}
