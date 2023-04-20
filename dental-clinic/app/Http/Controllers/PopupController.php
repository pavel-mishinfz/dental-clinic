<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Doctor;
use Illuminate\Http\Request;

class PopupController extends Controller
{
    public function helpers(Request $request) {
        $department_id = $request->id;
        $department = Department::find($department_id);
        $department_name = $department->name;
        $department_doctors = $department->doctors;

        return response()->json(['success' => 'Success!', 'tmp' => view('popup-helpers', compact('department_name', 'department_doctors'))->render()]);
    }

    public function doctor(Request $request) {
        $doctor_id = $request->id;
        $doctor = Doctor::find($doctor_id);

        return response()->json(['success' => 'Success!', 'tmp' => view('popup-doctor', compact('doctor'))->render()]);
    }
}
