<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    use HasFactory;

    // protected $dates = ['doj', 'dob'];

    protected $fillable = [
        'empid',
        'designation',
        'phone',
        'doj',
        'dob',
        'address',
        'gender',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function getDobAttribute($value)
    {
        return Carbon::parse($value)->format('d-m-Y');
    }

    public function getDojAttribute($value)
    {
        return Carbon::parse($value)->format('d-m-Y');
    }

    public function getGenderAttribute($value)
    {
        return $value == 1 ? 'Male' : "Female";
    }
}
