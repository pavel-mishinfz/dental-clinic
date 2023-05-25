<?php

namespace App\Http\Controllers\Admin\Patient;

use App\Http\Controllers\Controller;

class CreateController extends Controller
{
    public function __invoke() {
        $title = 'Create';
        $route = 'admin.patient.create';

        return view('admin.patient.create', compact('title', 'route'));
    }
}
