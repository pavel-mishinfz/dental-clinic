<?php

namespace App\Http\Controllers\Admin\Department;

use App\Http\Controllers\Controller;
use App\Models\Department;

class UpdateController extends Controller
{
    public function __invoke(Department $department) {
        $data = request()->validate([
            'name'=>'required',
            'image'=>'required',
            'icon'=>'required',
            'description'=>'required',
            'services'=>'required',
        ]);
        $department->update($data);
        return redirect()->route('admin.department.show', $department->id);
    }
}
