<?php

namespace App\Http\Controllers\hr;

use App\Http\Controllers\Controller;
use App\Models\EmployeeRoles;
use App\Models\Employees;
use Illuminate\Http\Request;

class EmployeeRole extends Controller
{
    public function index(){
        $type = EmployeeRoles::all();
        return view('dashboard.hr.employee-role',['type' =>$type]);

    }
    public function storeRole(Request $request)
    {
      $request->validate([
        'employee_role' => 'required',
      ]);
      EmployeeRoles::create([
            'employee_role'=>$request->employee_role,
        ]);
        return redirect()->back()->with('success');

    }
    public function edit($id)
    {
        $type = EmployeeRoles::find($id);
        return response()->json($type);
    }

    public function update(Request $request, $id)
    {
        $employeeType = EmployeeRoles::find($id);
        $employeeType->employee_role = $request->input('employee_role');
        $employeeType->save();

        return response()->json(['success' => 'Employee type updated successfully.']);
    }

    public function destroy($id)
    {
        $employeeType = EmployeeRoles::find($id);

        if (!$employeeType) {
            return response()->json(['error' => 'Employee type not found.'], 404);
        }

        $employeeType->delete();

        return response()->json(['success' => 'Employee type deleted successfully.']);
    }
}
