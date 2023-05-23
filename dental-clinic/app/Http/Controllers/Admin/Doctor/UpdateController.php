<?php

namespace App\Http\Controllers\Admin\Doctor;

use App\Http\Controllers\Controller;
use App\Models\Doctor;

class UpdateController extends Controller
{
    public function __invoke(Doctor $doctor) {
        $data = request()->validate([
            'name' => 'required',
            'surname' => 'required',
            'lastname' => 'required',
            'image' => 'required',
            'icon' => 'required',
            'position' => 'required',
            'orientation' => 'required',
            'experience' => 'required',
            'certificates' => 'required',
        ]);
        $doctor->update($data);
        return redirect()->route('admin.doctor.show', $doctor->id);
    }
}
