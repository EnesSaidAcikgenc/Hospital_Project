<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctors extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'surname', 'title', 'department_id'];

    public function department()
    {
        return $this->belongsTo(Department::class);
    }
}
