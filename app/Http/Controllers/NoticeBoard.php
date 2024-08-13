<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NoticeBoard extends Controller
{
    public function index()
    {
     return view('dashboard.notice-board');
    }
}
