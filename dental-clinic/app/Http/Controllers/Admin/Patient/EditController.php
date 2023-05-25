<?php

namespace App\Http\Controllers\Admin\Patient;

use App\Http\Controllers\Controller;
use App\Models\Patient;

class EditController extends Controller
{
    public function __invoke(Patient $patient) {
        $title = 'Edit';
        $route = 'admin.patient.edit';

        return view('admin.patient.edit', compact('patient', 'title', 'route'));
    }
}
