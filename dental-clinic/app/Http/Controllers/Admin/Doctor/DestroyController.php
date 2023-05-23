<?php

namespace App\Http\Controllers\Admin\Doctor;

use App\Http\Controllers\Controller;
use App\Models\Doctor;

class DestroyController extends Controller
{
    public function __invoke(Doctor $doctor) {
        $doctor->delete();
        unlink(public_path() . '/img/doctors/' . $doctor->image);
        unlink(public_path() . '/img/doctors/' . $doctor->icon);
        return redirect()->route('admin.doctor.index');
    }
}
