<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LunasAdminController extends Controller
{
    public function index()
    {
        return view('admin_views.lunas_admin');
    }
}
