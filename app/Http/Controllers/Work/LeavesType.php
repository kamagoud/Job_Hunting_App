<?php

namespace App\Http\Controllers\Work;

use App\Http\Controllers\Controller;
use App\Models\LeavesType as ModelsLeavesType;
use Illuminate\Http\Request;

class LeavesType extends Controller
{
    public function index(){
       $type = ModelsLeavesType::all();
      return view('dashboard.work.leave-type',['type' =>$type]);
    }
    public function storeLeavesType(Request $request){
       $data =[
        'leaves' =>$request->Leaves,
        // 'duration' =>$request->duration,
       ];
       ModelsLeavesType::create($data);
       return redirect()->back()->with('success', 'Leave application submitted successfully.');
    }
}
