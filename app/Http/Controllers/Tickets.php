<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Tickets extends Controller
{
   public function index(){
    return view('dashboard.tickets');
    
   }
}
