<?php

namespace App\Http\Controllers\Admin\DepartmentDoctors;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\DepartmentDoctor;
use App\Models\Doctor;
use Illuminate\Support\Facades\Schema;

class ShowController extends Controller
{
    public function __invoke(DepartmentDoctor $departmentDoctor) {
        $columns = Schema::getColumnListing('department_doctors');
        $department = Department::find($departmentDoctor->department_id);
        $doctor = Doctor::find($departmentDoctor->doctor_id);
        return view('admin.department_doctor.show', compact('departmentDoctor', 'columns', 'department', 'doctor'));
    }
}
