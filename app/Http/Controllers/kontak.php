<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class kontak extends Controller
{
    public function index(Request $request)
    {
        return redirect('kontak');
    }
}
