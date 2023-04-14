<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BatalAdminController extends Controller
{
    public function index()
    {
        return view('admin_views.batal_admin');
    }
}
