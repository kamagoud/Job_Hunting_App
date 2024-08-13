<?php

namespace App\Http\Controllers\Work;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TimeSheet extends Controller
{
    public function index(){
        return view('dashboard.work.time-sheet');
    }
}
