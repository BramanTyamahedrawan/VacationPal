<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User_tiket;

class DetailController extends Controller
{
    public function index()
    {
        return redirect()->route('tiket');
    }

    public function show($id)
    {
        $tiket = User_tiket::findOrFail($id);
        $tiket->makeHidden(['created_at', 'updated_at']);

        return view('detail', ['tiket' => $tiket]);
    }
}
