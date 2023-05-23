<?php

namespace App\Http\Controllers\Admin\Department;

use App\Http\Controllers\Controller;
use App\Models\Department;

class DestroyController extends Controller
{
    public function __invoke(Department $department) {
        $department->delete();
        unlink(public_path() . '/img/service/' . $department->image);
        unlink(public_path() . '/img/doctors/helpers/' . $department->icon);
        return redirect()->route('admin.department.index');
    }
}
