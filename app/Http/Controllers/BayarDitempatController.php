<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BayarDitempatController extends Controller
{
    public function index()
    {
        return view('bayar_ditempat');
    }
}
