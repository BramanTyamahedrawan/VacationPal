<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User_tiket;

class LunasController extends Controller
{
    public function index()
    {
        $userTikets = User_tiket::where('status', '=', 'Lunas')->get();

        return view('lunas', [
            'userTikets' => $userTikets
        ]);
    }
}
