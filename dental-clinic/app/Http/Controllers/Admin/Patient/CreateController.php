<?php

namespace App\Http\Controllers\Admin\Patient;

use App\Http\Controllers\Controller;

class CreateController extends Controller
{
    public function __invoke() {
        return view('admin.patient.create');
    }
}
