<?php

namespace App\Http\Controllers\Admin\DepartmentDoctors;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\DepartmentDoctor;
use App\Models\Doctor;

class EditController extends Controller
{
    public function __invoke(DepartmentDoctor $departmentDoctor) {
        $departments = Department::all();
        $doctors = Doctor::all();
        return view('admin.department_doctor.edit', compact('departmentDoctor', 'departments', 'doctors'));
    }
}
