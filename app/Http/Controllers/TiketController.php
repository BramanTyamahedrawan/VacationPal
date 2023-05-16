<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User_tiket;
use Illuminate\Support\Facades\Auth;

class TiketController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $tiket = User_tiket::where('email', Auth::user()->email)->get();
        return view('tiket', ['userTikets' => $tiket]);
    }
}
