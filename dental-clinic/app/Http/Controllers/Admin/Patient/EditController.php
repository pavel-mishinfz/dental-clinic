<?php

namespace App\Http\Controllers\Admin\Patient;

use App\Http\Controllers\Controller;
use App\Models\Patient;

class EditController extends Controller
{
    public function __invoke(Patient $patient) {
        return view('admin.patient.edit', compact('patient'));
    }
}
