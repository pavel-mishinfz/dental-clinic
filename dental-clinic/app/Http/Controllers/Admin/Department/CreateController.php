<?php

namespace App\Http\Controllers\Admin\Department;

use App\Http\Controllers\Controller;

class CreateController extends Controller
{
    public function __invoke() {
        $title = 'Create';
        $route = 'admin.department.create';

        return view('admin.department.create', compact('title', 'route'));
    }
}
