<?php

namespace App\Http\Controllers\Admin\DepartmentDoctors;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\DepartmentDoctor;
use App\Models\Doctor;

class EditController extends Controller
{
    public function __invoke(DepartmentDoctor $departmentDoctor) {
        $title = 'Edit';
        $route = 'admin.department-doctor.edit';
        $departments = Department::all();
        $department = Department::find($departmentDoctor->id);
        $doctors = Doctor::all();

        return view('admin.department_doctor.edit', compact('departmentDoctor', 'department',
                                                        'departments', 'doctors', 'title', 'route'));
    }
}
