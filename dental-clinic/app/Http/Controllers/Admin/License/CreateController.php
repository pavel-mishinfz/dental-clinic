<?php

namespace App\Http\Controllers\Admin\License;

use App\Http\Controllers\Controller;

class CreateController extends Controller
{
    public function __invoke() {
        $title = 'Create';
        $route = 'admin.license.create';

        return view('admin.license.create', compact('title', 'route'));
    }
}
