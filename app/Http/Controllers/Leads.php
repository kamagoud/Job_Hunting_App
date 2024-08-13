<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Leads extends Controller
{
    public function leads(){
        return view('dashboard.leads');
    }
}
