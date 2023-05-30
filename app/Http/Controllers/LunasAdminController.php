<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User_tiket;

class LunasAdminController extends Controller
{
    public function index()
    {
        $userTiket = User_tiket::where('status', '=', 'Lunas')->get();

        return view('admin_views.lunas_admin', [
            'userTiket' => $userTiket
        ]);
    }
}
