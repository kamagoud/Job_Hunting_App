<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Messages extends Controller
{
    public function index()
    {
     return view('dashboard.messages');
    }//
}
