<?php

use App\Http\Controllers\AttendanceReportController;
use App\Http\Controllers\AttendenceReportController;
use App\Http\Controllers\Client;
use App\Http\Controllers\ContractController;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\EventController;
use App\Http\Controllers\Expense;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\hr\Appreciation;
use App\Http\Controllers\hr\Attendance;
use App\Http\Controllers\hr\AttendanceInfo;
use App\Http\Controllers\hr\Department;
use App\Http\Controllers\hr\Designation;
use App\Http\Controllers\hr\Employee;
use App\Http\Controllers\hr\EmployeeRole;
use App\Http\Controllers\hr\EmployeeType;
use App\Http\Controllers\hr\Holiday;
use App\Http\Controllers\hr\Holidays;
use App\Http\Controllers\hr\leaves;
use App\Http\Controllers\Leads;
use App\Http\Controllers\LeaveReportController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\Messages;
use App\Http\Controllers\NoticeBoard;
use App\Http\Controllers\payRoll\EmployeeSalary;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\Settings;
use App\Http\Controllers\TaskReportController;
use App\Http\Controllers\TasksController;
use App\Http\Controllers\Tickets;
use App\Http\Controllers\TimeReportController;
use App\Http\Controllers\TimeSheetController;
use App\Http\Controllers\Work\CompanySettings;
use App\Http\Controllers\Work\LeavesType;
use App\Http\Controllers\Work\Projects;
use App\Http\Controllers\Work\SalarySetting;
use App\Http\Controllers\Work\Tasks;
use App\Http\Controllers\Work\TimeSheet;
use App\Models\Leaves as ModelsLeaves;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified', 'admin'])->group(function () {


    Route::get('settings', function(){
        return view('profile.settings');
    })->name('settings');


    Route::get('/dashboard',[Dashboard::class,'index'])->name('dashboard');
    Route::get('/store-attendance', [Dashboard::class, 'storeAttendance'])->name('storeAttendance');


    Route::PUT('/updateAttendance/{id}', [Dashboard::class, 'updateAttendance'])->name('updateAttendance');

    Route::get('leads' ,[Leads::class,'leads'])->name('Leads');
    Route::get('leave',[leaves::class,'leaves'])->name('leaves');
    Route::get('dis-leave',[leaves::class,'dispaly'])->name('leavesdis');
    Route::post('store-leave',[leaves::class,'storeLeaves'])->name('storeLeaves');
    // Route::post('update-status/{id}', [leaves::class, 'updateStatus'])->name('updateStatus');
    // Route::post('update-status/{id}', [leaves::class, 'updateStatus'])->name('updateStatus');
    Route::post('/leave/{id}/update-status', [leaves::class, 'updateStatus'])->name('updateStatus');
    Route::get('Employee' ,[Employee::class,'index'])->name('Employee');
    Route::post('employees-store',[Employee::class,'storeEmployee'])->name('employeesStore');

      Route::get('designation',[Designation::class,'index'])->name('designation');
     Route::post('store-designations',[Designation::class,'storedesignations'])->name('storedesignations');
     Route::post('/update-designation/{id}', [Designation::class, 'update'])->name('update-designation');
     Route::delete('delete-designation', [Designation::class, 'deletedesignation'])->name('deletedesignation');
    //  Route::patch('update-designation', [Designation::class, 'updatedesignation'])->name('updatedesignation');
    // Route::put('/update-designation/{id}', [Designation::class, 'update'])->name('update-designation');

     Route::get('department',[Department::class,'index'])->name('department');
     Route::post('store-department',[Department::class,'storedepartment'])->name('storedepartment');
     Route::post('/departments/{id}', [Department::class, 'update'])->name('updatedepartment');
    Route::delete('/departments/{id}', [Department::class, 'destroy'])->name('deletedepartment');

    Route::get('clients',[Client::class,'index'])->name('clients');

    Route::get('applied-Leaves',[leaves::class,'appliedLeaves'])->name('appliedLeaves');
    Route::get('attendance',[Attendance::class,'index'])->name('Attendance');
    // Route::get('attendance-info',[AttendanceInfo::class,'index'])->name('AttendanceInfo');
    Route::get('/attendance-info/{id}', [Attendance::class, 'show'])->name('attendanceInfo');// In web.php
    Route::post('/attendanceInfo', [Attendance::class, 'getAttendanceInfo'])->name('attendanceInfo');




    Route::get('holiday',[Holidays::class,'index'])->name('Holiday');
    Route::get('dis-Holiday',[Holidays::class,'Holidays'])->name('Holidays');
    Route::post('store-Holidays',[Holidays::class,'storeHoli'])->name('storeHoliday');

    Route::get('employee-role',[EmployeeRole::class,'index'])->name('EmployeeRole');
    Route::post('store-role',[EmployeeRole::class,'storeRole'])->name('storeRole');
    Route::post('/updaterole/{id}', [EmployeeRole::class, 'update'])->name('updateRole');
    Route::delete('/deleterole/{id}', [EmployeeRole::class, 'destroy'])->name('deleteRoles');


    Route::get('appreciation',[Appreciation::class,'index'])->name('Appreciation');
    Route::get('display-appreciation',[Appreciation::class,'displyApp'])->name('displyApp');
    Route::post('store-Appreciation',[Appreciation::class,'storeAppreciation'])->name('storeAppreciation');
    Route::get('Project',[CompanySettings::class,'index'])->name('CompanySettings');
    Route::post('store-company',[CompanySettings::class,'storeCompany'])->name('storeCompany');
    Route::get('tasks',[SalarySetting::class,'index'])->name('SalarySetting');
    Route::get('timeSheet',[LeavesType::class,'index'])->name('LeavesType');
    Route::post('store-leaveType',[LeavesType::class,'storeLeavesType'])->name('storeLeavesType');
    Route::get('Employe-Salary',[EmployeeSalary::class,'index'])->name('EmployeeSalary');

    Route::get('expense',[Expense::class,'index'])->name('Expense');
    Route::get('tickets',[Tickets::class,'index'])->name('Tickets');
    Route::get('messages',[Messages::class,'index'])->name('Messages');
    Route::get('noticeBoard',[NoticeBoard::class,'index'])->name('NoticeBoard');
    Route::get('settings',[Settings::class,'index'])->name('Settings');
    Route::get('Contract',[ContractController::class,'index'])->name('Contracts');
    Route::get('Project',[ProjectsController::class,'index'])->name('Projects');
    Route::get('Task',[TasksController::class,'index'])->name('Tasks');
    Route::get('TimeSheet',[TimeSheetController::class,'index'])->name('TimeSheet');
    Route::get('Event',[EventController::class,'index'])->name('Event');
    Route::get('Message',[MessageController::class,'index'])->name('Message');
    Route::get('TaskReport',[TaskReportController::class,'index'])->name('TaskReport');
    Route::get('TimeLogReport',[TimeReportController::class,'index'])->name('TimeLogReport');
    Route::get('LeaveReport',[LeaveReportController::class,'index'])->name('LeavesReport');
    Route::get('AttendanceReport',[AttendanceReportController::class,'index'])->name('AttendanceReport');
    Route::get('Settings',[SettingController::class,'index'])->name('Setting');
    Route::get('Expense',[ExpenseController::class,'index'])->name('Expense');

});

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified', 'user'])->group(function () {

});

Route::get('/', function(){
    return view('auth.login');
});

