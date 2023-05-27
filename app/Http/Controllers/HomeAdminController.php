<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User_tiket;

class HomeAdminController extends Controller
{
    public function index()
    {
        $userTikets = User_tiket::where('status', '!=', 'Dibatalkan')->get();

        return view('admin_views.home_admin', [
            'userTikets' => $userTikets
        ]);
    }
}
