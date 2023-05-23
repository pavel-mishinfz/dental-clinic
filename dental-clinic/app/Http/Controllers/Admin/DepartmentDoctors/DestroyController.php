<?php

namespace App\Http\Controllers\Admin\DepartmentDoctors;

use App\Http\Controllers\Controller;
use App\Models\DepartmentDoctor;
use App\Models\Doctor;

class DestroyController extends Controller
{
    public function __invoke(DepartmentDoctor $departmentDoctor) {
        $departmentDoctor->delete();
        return redirect()->route('admin.department-doctor.index');
    }
}
