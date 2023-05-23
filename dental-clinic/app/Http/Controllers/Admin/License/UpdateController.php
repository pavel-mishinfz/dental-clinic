<?php

namespace App\Http\Controllers\Admin\License;

use App\Http\Controllers\Controller;
use App\Models\License;

class UpdateController extends Controller
{
    public function __invoke(License $license) {
        $data = request()->validate([
            'image' => 'required',
        ]);
        $license->update($data);
        return redirect()->route('admin.license.show', $license->id);
    }
}
