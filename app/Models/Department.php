<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Doctors;
class Department extends Model
{
    use HasFactory;
    protected $fillable = ['name'];

    public function doctors()
    {
        return $this->hasMany(Doctors::class);
    }
}
