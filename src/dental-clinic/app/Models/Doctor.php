<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    public function department()
    {
        return $this->hasMany(Department::class);
    }

    public function formPatient()
    {
        return $this->belongsTo(FormPatient::class, 'formPatient_id');
    }
}
