<?php

namespace App\Http\Controllers\Admin\DepartmentDoctors;

use App\Http\Controllers\Controller;
use App\Models\DepartmentDoctor;

class UpdateController extends Controller
{
    public function __invoke(DepartmentDoctor $departmentDoctor) {
        $data = request()->validate([
            'department_id' => 'required',
            'doctor_id' => 'required',
        ]);
        $departmentDoctor->update($data);
        return redirect()->route('admin.department-doctor.show', $departmentDoctor->id);
    }
}
