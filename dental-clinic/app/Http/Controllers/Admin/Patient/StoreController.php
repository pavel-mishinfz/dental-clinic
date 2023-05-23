<?php

namespace App\Http\Controllers\Admin\Patient;

use App\Http\Controllers\Controller;
use App\Models\Patient;

class StoreController extends Controller
{
    public function __invoke() {
        $data = request()->validate([
            'name' => 'required',
            'surname' => 'required',
            'lastname' => 'required',
            'phone' => 'required|regex:/^\+7\([0-9]{3}\)[0-9]{3}\-[0-9]{2}\-[0-9]{2}$/',
        ]);

        Patient::create($data);
        return redirect()->route('admin.patient.index');
    }
}
