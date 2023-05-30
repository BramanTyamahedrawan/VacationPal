<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User_tiket;

class BayarDitempatAdminController extends Controller
{
    public function index()
    {
        $userTiket = User_tiket::where('status', '=', 'Bayar Ditempat')->get();

        return view('admin_views.bayar_ditempat_admin', [
            'userTiket' => $userTiket
        ]);
    }
}
