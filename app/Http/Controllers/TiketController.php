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
        $tiketBelumDibatalkan = User_tiket::where('email', Auth::user()->email)
            ->where('status', '!=', 'Dibatalkan')
            ->get();

        $tiketDibatalkan = User_tiket::where('email', Auth::user()->email)
            ->where('status', 'Dibatalkan')
            ->get();

        return view('tiket', [
            'userTikets' => $tiketBelumDibatalkan,
            'tiketDibatalkan' => $tiketDibatalkan
        ]);
    }
}
