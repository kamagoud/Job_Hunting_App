<?php

namespace App\Http\Controllers\Work;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SalarySetting extends Controller
{
    public function index(){
        return view('dashboard.work.salary-setting');
    }
}
