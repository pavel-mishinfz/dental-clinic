<?php

namespace App\Http\Controllers\Admin\License;

use App\Http\Controllers\Controller;
use App\Models\License;
use App\Models\Patient;

class DestroyController extends Controller
{
    public function __invoke(License $license) {
        $license->delete();
        unlink(public_path() . '/img/about/license/' . $license->image);
        return redirect()->route('admin.license.index');
    }
}
