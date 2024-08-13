<?php

namespace App\Http\Controllers\hr;

use App\Http\Controllers\Controller;
use App\Models\Countries;
use App\Models\Department;
use App\Models\Departments;
use App\Models\Designations;
use App\Models\EmployeeRoles;
use App\Models\Employees;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class Employee extends Controller
{
    public function index()
    {
        // Fetching data for dropdowns
        $Designations = Designations::select('id', 'designation_name')->get();
        $Departments = Departments::select('id', 'department_name')->get();
        $roles = EmployeeRoles::select('id', 'employee_role')->get();
        $country = Countries::select('id','name')->get();

        return view('dashboard.hr.employee', [
            'Designations' => $Designations,
            'Departments' => $Departments,
            'roles' => $roles,
            'country' =>$country,
        ]);
    }

    public function storeEmployee(Request $request)
    {
        // $request->validate([
        //     'employee_name' => 'required|string|max:255',
        //     'employee_id' => 'required|string|max:255|unique:employees,employee_id',
        //     'email' => 'required|email|max:255|unique:employees,email',
        //     'mobile_number' => 'nullable|string|max:15',
        //     'password' => 'required|string|min:8', // Ensure a password is set
        //     'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        //     // Add other validation rules as necessary
        // ]);
// dd($request);
try {
    // Parse dates using Carbon
    $dateOfBirth = $request->input('date_of_birth') ? Carbon::parse($request->input('date_of_birth'))->toDateString() : null;
    $dateOfJoining = $request->input('date_of_joining') ? Carbon::parse($request->input('date_of_joining'))->toDateString() : null;
    $probationEndDate = $request->input('probation_end_date') ? Carbon::parse($request->input('probation_end_date'))->toDateString() : null;
    $noticePeriodStart = $request->input('notice_period_start') ? Carbon::parse($request->input('notice_period_start'))->toDateString() : null;
    $noticePeriodEnd = $request->input('notice_period_end') ? Carbon::parse($request->input('notice_period_end'))->toDateString() : null;

    // Determine checkbox values
    $login = $request->has('login') ? 1 : 0;
    $notification = $request->has('notification') ? 1 : 0;

    // Create a new employee record
    $employee = Employees::create([
        'employee_name' => $request->input('employee_name'),
        'employee_id' => $request->input('employee_id'),
        'email' => $request->input('email'),
        'employee_role' => $request->input('employee_role'),
        'address' => $request->input('address'),
        'country' => $request->input('country'),
        'state' => $request->input('state'),
        'login' => $login,
        'notification' => $notification,
        'designation' => $request->input('designation'),
        'department' => $request->input('department'),
        'mobile_number' => $request->input('mobile_number'),
        'password' => Hash::make($request->input('password')),
        'date_of_birth' => $dateOfBirth,
        'date_of_joining' => $dateOfJoining,
        'profile_picture' => $request->file('profile_picture') ? $request->file('profile_picture')->store('profile_pictures', 'public') : null,
        'gender' => $request->input('gender'),
        'language' => $request->input('language'),
        'probation_end_date' => $probationEndDate,
        'notice_period_start' => $noticePeriodStart,
        'notice_period_end' => $noticePeriodEnd,
        'employment_type' => $request->input('employment_type'),
        'marital_status' => $request->input('marital_status'),
        'business_address' => $request->input('business_address'),
    ]);

    // Create a user record if necessary
    User::create([
        'employee_id' => $employee->id,
        'name' => $request->input('employee_name'),
        'email' => $request->input('email'),
        'role' => $request->input('employee_role'),
        'email_verified_at' => now(),
         'password' => Hash::make('12345678'), // Default password or modify as needed
    ]);
//dd($employee);
    return redirect()->back()->with('success', 'Employee added successfully.');
}
 catch (\Exception $e) {
    Log::error('Error creating employee: ' . $e->getMessage());
    return redirect()->back()->with('error', 'Failed to add employee. Please try again.');
}
// catch (\Exception $e) {
//     // Log the error message for debugging
//     Log::error('Error creating employee: ' . $e->getMessage());

//     // Uncomment the following line to see the error message during development
//      dd($e->getMessage());

//     return redirect()->back()->with('error', 'Failed to add employee. Please try again.');
// }

}

    }

