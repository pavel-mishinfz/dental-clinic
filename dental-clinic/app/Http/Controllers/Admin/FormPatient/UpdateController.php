<?php

namespace App\Http\Controllers\Admin\FormPatient;

use App\Http\Controllers\Controller;
use App\Models\FormPatient;

class UpdateController extends Controller
{
    public function __invoke(FormPatient $formPatient) {
        $data = request()->validate([
            'patient_id' => 'required',
            'doctor_id' => 'required',
        ]);
        $formPatient->update($data);
        return redirect()->route('admin.form-patient.show', $formPatient->id);
    }
}
