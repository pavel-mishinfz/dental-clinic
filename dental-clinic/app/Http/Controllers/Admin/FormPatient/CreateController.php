<?php

namespace App\Http\Controllers\Admin\FormPatient;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use App\Models\Patient;

class CreateController extends Controller
{
    public function __invoke() {
        $patients = Patient::all();
        $doctors = Doctor::all();
        return view('admin.form_patient.create', compact('patients', 'doctors'));
    }
}
