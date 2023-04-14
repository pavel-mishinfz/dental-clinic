<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormPatient extends Model
{
    use HasFactory;

    public function doctor()
    {
        return $this->hasMany(Doctor::class, 'formPatient_id');
    }

    public function patient()
    {
        return $this->hasMany(Patient::class, 'formPatient_id');
    }
}
