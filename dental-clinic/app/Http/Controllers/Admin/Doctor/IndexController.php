<?php

namespace App\Http\Controllers\Admin\Doctor;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use Illuminate\Support\Facades\Schema;

class IndexController extends Controller
{
    public function __invoke() {
        $title = 'Doctor';
        $route = 'admin.doctor.index';
        $doctors = Doctor::all();
        $columns = Schema::getColumnListing('doctors');

        return view('admin.doctor.index', compact('doctors', 'columns', 'title', 'route'));
    }
}
