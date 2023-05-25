<?php

namespace App\Http\Controllers\Admin\Department;

use App\Http\Controllers\Controller;
use App\Models\Department;
use Illuminate\Support\Facades\Schema;

class IndexController extends Controller
{
    public function __invoke() {
        $title = 'Departments';
        $route = 'admin.department.index';
        $departments = Department::all();
        $columns = Schema::getColumnListing('departments');

        return view('admin.department.index', compact('departments', 'columns', 'title', 'route'));
    }
}
