<?php

namespace App\Http\Controllers\Admin\License;

use App\Http\Controllers\Controller;
use App\Models\License;

class EditController extends Controller
{
    public function __invoke(License $license) {
        $title = 'Edit';
        $route = 'admin.license.edit';

        return view('admin.license.edit', compact('license', 'title', 'route'));
    }
}
