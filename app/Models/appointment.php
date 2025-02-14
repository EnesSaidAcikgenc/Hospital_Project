<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class appointment extends Model
{
    use HasFactory;

    protected $table = 'appointments';
    protected $fillable = [
        'name',
        'email',
        'mobilphone',
        'doctorname',
        'date',
        'time',
    ];
}
