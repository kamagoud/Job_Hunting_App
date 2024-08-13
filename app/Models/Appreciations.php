<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appreciations extends Model
{
    use HasFactory;
    protected $fillable =[
        'award',
        'given_to',
        'date',
        'summary',
        'photo'
    ];
    public function Employees(){
        return $this->hasOne(Employees::class, 'id', 'given_to');
    }
}
