<?php

namespace App\Http\Controllers\Admin\FormPatient;

use App\Http\Controllers\Controller;
use App\Models\FormPatient;

class DestroyController extends Controller
{
    public function __invoke(FormPatient $formPatient) {
        $formPatient->delete();
        return redirect()->route('admin.form-patient.index');
    }
}
