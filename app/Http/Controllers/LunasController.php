<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User_tiket;
use Illuminate\Support\Facades\Auth;

class LunasController extends Controller
{
    public function index()
    {
        $userTikets = User_tiket::where('email', Auth::user()->email)
            ->where('status', 'Lunas')
            ->get();

        return view('lunas', ['userTikets' => $userTikets]);
    }
}
