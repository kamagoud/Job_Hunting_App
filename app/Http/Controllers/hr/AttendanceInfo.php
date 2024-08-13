<?php

namespace App\Http\Controllers\hr;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AttendanceInfo extends Controller
{
    public function index(){
        return view('dashboard.hr.attendance-info');
    }
}
