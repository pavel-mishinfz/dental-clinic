<?php

namespace App\Http\Controllers\Admin\Patient;

use App\Http\Controllers\Controller;
use App\Models\Patient;
use Illuminate\Support\Facades\Schema;

class IndexController extends Controller
{
    public function __invoke() {
        $title = 'Patients';
        $route = 'admin.patient.index';
        $patients = Patient::paginate(50);
        $columns = Schema::getColumnListing('patients');

        return view('admin.patient.index', compact('patients', 'columns', 'title', 'route'));
    }
}
