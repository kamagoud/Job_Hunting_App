<?php

namespace App\Http\Controllers\hr;

use App\Http\Controllers\Controller;
use App\Models\Holiday;
use Illuminate\Http\Request;

class Holidays extends Controller
{
    public function index(){
        $Holidays =Holiday::all();
        return view('dashboard.hr.holiday'  ,['Holidays' =>$Holidays]);
    }
    public function Holidays(){
        $Holidays =Holiday::all();
        return view('dashboard.hr.holiday-table'
      ,['Holidays' =>$Holidays]);
    }





    public function storeHoli(Request $request)
    {
        // $request->validate([
        //     'holiday_name' => 'required',
        //     'holiday_date' => 'required|date_format:Y-m-d', // Ensure date format is 'YYYY-MM-DD'
        // ]);

        // Convert date format to 'YYYY-MM-DD'
        $formattedDate = date('Y-m-d', strtotime($request->holiday_date));

        // Create new Holiday record
        Holiday::create([
            'holiday_name' => $request->holiday_name,
            'holiday_date' => $formattedDate, // Use the formatted date
        ]);

        return redirect()->back()->with('success', 'Holiday added successfully.');
    }

}
