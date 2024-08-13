<?php

namespace App\Http\Controllers\hr;

use App\Http\Controllers\Controller;
use App\Models\Department as ModelsDepartment;
use App\Models\Departments;
use Illuminate\Http\Request;

class Department extends Controller
{
    public function index(){
        $department = ModelsDepartment::all();
        return view('dashboard.hr.department',['departments'=>$department]);
    }
    public function storedepartment(Request $request)
    {
        $request->validate([
            'department_name' => 'required',
        ]);

        Departments::create([
            'department_name' => $request->department_name,
        ]);

        return redirect()->back()->with('success', 'Designation added successfully.');
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'department_name' => 'required|string|max:255',
        ]);

        $department = Departments::findOrFail($id);
        $department->update([
            'department_name' => $request->department_name,
        ]);

        return response()->json(['message' => 'Department updated successfully']);
    }


    public function destroy($id)
    {
        $department = Departments::findOrFail($id);
        $department->delete();

        return response()->json(['message' => 'Department deleted successfully']);
    }
}
