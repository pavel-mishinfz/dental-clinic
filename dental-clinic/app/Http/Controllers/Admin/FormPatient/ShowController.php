<?php

namespace App\Http\Controllers\Admin\FormPatient;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use App\Models\FormPatient;
use App\Models\Patient;
use Illuminate\Support\Facades\Schema;

class ShowController extends Controller
{
    public function __invoke(FormPatient $formPatient) {
        $columns = Schema::getColumnListing('form_patients');
        $patient = Patient::find($formPatient->patient_id);
        $doctor = Doctor::find($formPatient->doctor_id);
        $title = $patient->surname . ' ' . $patient->name . ' ' . $patient->lastname;
        $route = 'admin.form-patient.show';

        return view('admin.form_patient.show', compact('formPatient', 'columns', 'patient',
                                                            'doctor', 'title', 'route'));
    }
}
