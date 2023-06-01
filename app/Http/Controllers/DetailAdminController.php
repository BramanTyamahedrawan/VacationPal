<?php

namespace App\Http\Controllers;

use App\Models\User_tiket;

use Illuminate\Http\Request;

class DetailAdminController extends Controller
{
    public function index()
    {
        return redirect()->route('home_admin');
    }

    public function show($id)
    {
        $tiket = User_tiket::findOrFail($id);
        return view('admin_views.detail_admin', ['tiket' => $tiket]);
    }
}
