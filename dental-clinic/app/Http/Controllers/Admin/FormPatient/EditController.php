<?php

namespace App\Http\Controllers\Admin\FormPatient;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use App\Models\FormPatient;
use App\Models\Patient;

class EditController extends Controller
{
    public function __invoke(FormPatient $formPatient) {
        $patients = Patient::all();
        $doctors = Doctor::all();
        return view('admin.form_patient.edit', compact('formPatient', 'patients', 'doctors'));
    }
}
