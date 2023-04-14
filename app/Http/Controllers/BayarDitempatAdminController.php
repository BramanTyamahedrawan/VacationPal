<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BayarDitempatAdminController extends Controller
{
    public function index()
    {
        return view('admin_views.bayar_ditempat_admin');
    }
}
