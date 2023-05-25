<?php

namespace App\Http\Controllers\Admin\FormPatient;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use App\Models\FormPatient;
use App\Models\Patient;
use Illuminate\Support\Facades\Schema;

class IndexController extends Controller
{
    public function __invoke() {
        $title = 'Forms of patients';
        $route = 'admin.form-patient.index';
        $form_patients = FormPatient::all();
        $patients = Patient::all();
        $doctors = Doctor::all();
        $columns = Schema::getColumnListing('form_patients');

        return view('admin.form_patient.index', compact('form_patients', 'columns',
                                                            'patients','doctors', 'title', 'route'));
    }
}
