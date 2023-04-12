<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LunasController extends Controller
{
    public function index()
    {
        return view('lunas');
    }
}
