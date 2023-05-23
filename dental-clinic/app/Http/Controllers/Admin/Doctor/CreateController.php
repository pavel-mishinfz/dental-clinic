<?php

namespace App\Http\Controllers\Admin\Doctor;

use App\Http\Controllers\Controller;

class CreateController extends Controller
{
    public function __invoke() {
        return view('admin.doctor.create');
    }
}
