<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;
    protected $guarded = false;

    public function doctors()
    {
        return $this->belongsToMany(Doctor::class, 'department_doctors', 'department_id', 'doctor_id');
    }
}
