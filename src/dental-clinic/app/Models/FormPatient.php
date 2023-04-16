<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormPatient extends Model
{
    use HasFactory;

    public function patient() {
        return $this->belongsTo(Patient::class, 'patient_id', 'id');
    }

    public function doctor() {
        return $this->belongsTo(Doctor::class, 'doctor_id','id');
    }
}
