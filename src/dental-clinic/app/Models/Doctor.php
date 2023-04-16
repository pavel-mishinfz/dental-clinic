<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;


    protected $guarded = false;

    public function departments()
    {
        return $this->belongsToMany(Department::class, 'department_doctors', 'doctor_id', 'department_id');
    }

    public function form_patients() {
        return $this->hasMany(FormPatient::class, 'doctor_id', 'id');
    }
}
