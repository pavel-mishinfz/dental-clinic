<?php

namespace App\Http\Controllers\Admin\Department;

use App\Http\Controllers\Controller;

class CreateController extends Controller
{
    public function __invoke() {
        return view('admin.department.create');
    }
}
