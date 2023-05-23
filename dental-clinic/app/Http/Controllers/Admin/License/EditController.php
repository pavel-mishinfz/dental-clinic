<?php

namespace App\Http\Controllers\Admin\License;

use App\Http\Controllers\Controller;
use App\Models\License;

class EditController extends Controller
{
    public function __invoke(License $license) {
        return view('admin.license.edit', compact('license'));
    }
}
