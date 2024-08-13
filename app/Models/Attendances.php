<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendances extends Model
{
    use HasFactory;
    protected $fillable =[
        'time',
        'user_id',
        'attendances_type',
        'created_at'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
