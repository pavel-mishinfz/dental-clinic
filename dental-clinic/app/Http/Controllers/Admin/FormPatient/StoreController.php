<?php

namespace App\Http\Controllers\Admin\FormPatient;

use App\Http\Controllers\Controller;
use App\Models\FormPatient;

class StoreController extends Controller
{
    public function __invoke() {
        $data = request()->validate([
            'patient_id' => 'required',
            'doctor_id' => 'required',
        ]);

        FormPatient::create($data);
        return redirect()->route('admin.form-patient.index');
    }
}
