<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Client extends Controller
{
    public function index(){
        return view("dashboard.clients");
    }
}
