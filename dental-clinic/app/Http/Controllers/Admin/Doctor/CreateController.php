<?php

namespace App\Http\Controllers\Admin\Doctor;

use App\Http\Controllers\Controller;

class CreateController extends Controller
{
    public function __invoke() {
        $title = 'Create';
        $route = 'admin.doctor.create';

        return view('admin.doctor.create', compact('title', 'route'));
    }
}
