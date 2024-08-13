<?php

namespace App\Http\Controllers\payRoll;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmployeeSalary extends Controller
{
    public function index(){
        return view('dashboard.work.employee-salary');
    }
}
