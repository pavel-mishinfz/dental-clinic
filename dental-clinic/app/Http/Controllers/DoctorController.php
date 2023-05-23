<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Doctor;
use App\Models\Patient;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function index() {
        $title = 'Doctors';
        $doctors = Doctor::all();
        $departments = Department::all();

        return view('doctors', compact('doctors', 'departments','title'));
    }

    public function showHelper($id) {
        $department = Department::findOrFail($id);
        $department_name = $department->name;
        $department_doctors = $department->doctors;

        return response()->json(['success' => 'Success!', 'tmp' => view( 'popup-helpers', compact('department_name', 'department_doctors'))->render()]);
    }

    public function showDoctor($id) {
        $doctor = Doctor::findOrFail($id);

        return response()->json(['success' => 'Success!', 'tmp' => view('popup-doctor', compact('doctor'))->render()]);
    }
}
