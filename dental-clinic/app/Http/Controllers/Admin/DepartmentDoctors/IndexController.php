<?php

namespace App\Http\Controllers\Admin\DepartmentDoctors;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\DepartmentDoctor;
use App\Models\Doctor;
use Illuminate\Support\Facades\Schema;

class IndexController extends Controller
{
    public function __invoke() {
        $department_doctors = DepartmentDoctor::all();
        $doctors = Doctor::all();
        $departments = Department::all();
        $columns = Schema::getColumnListing('department_doctors');

        return view('admin.department_doctor.index', compact('department_doctors', 'columns','doctors','departments'));
    }
}
