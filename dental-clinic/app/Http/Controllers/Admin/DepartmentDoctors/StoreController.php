<?php

namespace App\Http\Controllers\Admin\DepartmentDoctors;

use App\Http\Controllers\Controller;
use App\Models\DepartmentDoctor;

class StoreController extends Controller
{
    public function __invoke() {
        $data = request()->validate([
            'department_id' => 'required',
            'doctor_id' => 'required',
        ]);

        DepartmentDoctor::create($data);
        return redirect()->route('admin.department-doctor.index');
    }
}
