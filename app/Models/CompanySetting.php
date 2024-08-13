<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanySetting extends Model
{
    use HasFactory;
    protected $fillable =[
        'company_name',
        'company_email',
        'address',
        'country',
        'city',
        'state',
        'postal_code',
        'phone_number',
        'mobile_number',
        'web_site',
    ];
}
