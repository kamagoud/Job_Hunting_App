<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TimeReportController extends Controller
{
    public function index(){
        return view('timeReport');

       }
}
