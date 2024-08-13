<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Leaves extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'leave_type',
        'date',
        'duration',
        'reason',
       'status',
        'file',
    ];
    public function type(){
        $this->hasOne(LeavesType::class,'id','leave_type');
    }
}
