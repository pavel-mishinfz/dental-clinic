<?php

namespace App\Http\Controllers\Admin\Doctor;

use App\Http\Controllers\Controller;
use App\Models\Doctor;

class EditController extends Controller
{
    public function __invoke(Doctor $doctor) {
        return view('admin.doctor.edit', compact('doctor'));
    }
}
