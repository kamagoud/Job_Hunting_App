<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Holiday extends Model
{
    use HasFactory;
    protected $fillable = [
        'holiday_name',
        'holiday_date'
    ];
    protected $dates = [
        'holiday_date',
    ];
}
