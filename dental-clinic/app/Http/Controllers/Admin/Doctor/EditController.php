<?php

namespace App\Http\Controllers\Admin\Doctor;

use App\Http\Controllers\Controller;
use App\Models\Doctor;

class EditController extends Controller
{
    public function __invoke(Doctor $doctor) {
        $title = 'Edit';
        $route = 'admin.doctor.edit';

        return view('admin.doctor.edit', compact('doctor', 'title', 'route'));
    }
}
