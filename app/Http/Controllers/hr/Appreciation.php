<?php

namespace App\Http\Controllers\hr;

use App\Http\Controllers\Controller;
use App\Models\Appreciations;
use App\Models\Employees;
use Illuminate\Http\Request;

class Appreciation extends Controller
{
    public function index(){

        $Employees = Employees::select('id', 'employee_name')->get();
        return view('dashboard.hr.appreciation',['Employees' =>$Employees]);
    }
    public function displyApp(){
        $appreciation = Appreciations::all();
        
        return view('dashboard.hr.table-appreciation',['appreciation' =>$appreciation]);
    }
    public function storeAppreciation(Request $request)
    {
        $request->validate([
            'award' => 'required',
            'given_to' => 'required',
            'date' => 'required',

        ]);

        $date = date('Y-m-d', strtotime($request->date));

        Appreciations::create([
            'award' => $request->award,
            'given_to' => $request->given_to,
            'date' => $date,
            'summary' => $request->summary,
            'photo' => $request->photo,
        ]);


        return redirect()->back()->with('success', 'Appreciation added successfully.');

    }
}
