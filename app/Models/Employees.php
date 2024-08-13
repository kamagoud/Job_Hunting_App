<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    use HasFactory;
    protected $fillable = [
        'employee_name',
        'employee_id',
        'email',
        'employee_role',
        'address',
        'country',
        'state',
        'designation',
        'department',
        'mobile_number',

        'date_of_birth',
        'date_of_Joining',
        'profile_picture',
        'gender',
        'language',
        'login',
        'notification',
        'probation_end_date',
        'notice_period_start',
        'notice_period_end',
        'employment_type',
        'marital_status',
        'business_address',
    ];

    public function Designation(){
        return $this->hasOne(Designations::class, 'id', 'designation');
    }

    public function Department(){
        return $this->hasOne(Department::class, 'id', 'department');
    }


    public function employeeRoles(){
        return $this->hasOne(EmployeeRoles::class, 'id', 'employee_role');
    }

    public function Countries(){
        return $this->hasOne(Countries::class, 'id', 'country');
    }
}
