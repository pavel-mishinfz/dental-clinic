<?php

namespace App\Http\Controllers\Admin\License;

use App\Http\Controllers\Controller;

class CreateController extends Controller
{
    public function __invoke() {
        return view('admin.license.create');
    }
}
