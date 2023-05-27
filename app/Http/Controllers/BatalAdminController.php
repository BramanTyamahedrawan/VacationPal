<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User_tiket;

class BatalAdminController extends Controller
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
            return view('admin_views.batal_admin', [
                'tiketDibatalkan' => User_tiket::where('status', 'Dibatalkan')
                    ->get()
            ]);
        }

        // Pindahkan tiket yang dibatalkan ke halaman batal.blade.php
        $tiketDibatalkan = User_tiket::where('status', 'Dibatalkan')
            ->get();

        return view('admin_views.batal_admin', ['tiketDibatalkan' => $tiketDibatalkan]);
    }
}
