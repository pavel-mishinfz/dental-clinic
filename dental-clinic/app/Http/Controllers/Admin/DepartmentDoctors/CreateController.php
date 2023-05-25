<?php

namespace App\Http\Controllers\Admin\DepartmentDoctors;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Doctor;

class CreateController extends Controller
{
    public function __invoke() {
        $title = 'Create';
        $route = 'admin.department-doctor.create';
        $departments = Department::all();
        $doctors = Doctor::all();

        return view('admin.department_doctor.create', compact('departments', 'doctors', 'title', 'route'));
    }
}
