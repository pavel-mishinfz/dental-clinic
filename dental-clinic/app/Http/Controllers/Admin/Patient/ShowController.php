<?php

namespace App\Http\Controllers\Admin\Patient;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use App\Models\Patient;
use Illuminate\Support\Facades\Schema;

class ShowController extends Controller
{
    public function __invoke(Patient $patient) {
        $columns = Schema::getColumnListing('patients');
        return view('admin.patient.show', compact('patient', 'columns'));
    }
}
