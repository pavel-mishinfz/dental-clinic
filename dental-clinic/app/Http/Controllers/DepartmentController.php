<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function index() {
        $title = 'Departments';
        $departments = Department::all();

        return view('departments', compact('departments', 'title'));
    }
}
