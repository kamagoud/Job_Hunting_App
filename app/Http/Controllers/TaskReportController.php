<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskReportController extends Controller
{
    public function index(){
        return view('taskReport');

       }
}
