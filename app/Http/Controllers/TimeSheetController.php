<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TimeSheetController extends Controller
{

    public function index(){
        return view('time_sheet');
    }
}
