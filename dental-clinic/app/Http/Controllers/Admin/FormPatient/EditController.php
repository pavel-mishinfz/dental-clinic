<?php

namespace App\Http\Controllers\Admin\FormPatient;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use App\Models\FormPatient;
use App\Models\Patient;

class EditController extends Controller
{
    public function __invoke(FormPatient $formPatient) {
        $title = 'Edit';
        $route = 'admin.form-patient.edit';
        $patients = Patient::all();
        $patient = Patient::find($formPatient->patient_id);
        $doctors = Doctor::all();

        return view('admin.form_patient.edit', compact('formPatient', 'patients', 'patient',
                                                            'doctors', 'title', 'route'));
    }
}
