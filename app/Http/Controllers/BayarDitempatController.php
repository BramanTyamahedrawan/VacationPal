<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User_tiket;
use Illuminate\Support\Facades\Auth;

class BayarDitempatController extends Controller
{
    public function index()
    {
        $userTikets = User_tiket::where('email', Auth::user()->email)
            ->where('status', 'Bayar Ditempat')
            ->get();

        return view('bayar_ditempat', ['userTikets' => $userTikets]);
    }
}
