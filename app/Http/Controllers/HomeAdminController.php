<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeAdminController extends Controller
{
    public function index()
    {
        return view('admin_views.home_admin');
    }
}
