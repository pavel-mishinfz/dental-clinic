<?php

namespace App\Http\Controllers\Admin\Department;

use App\Http\Controllers\Controller;
use App\Models\Department;
use Illuminate\Support\Facades\Schema;

class ShowController extends Controller
{
    public function __invoke(Department $department) {
        $columns = Schema::getColumnListing('departments');
        return view('admin.department.show', compact('department', 'columns'));
    }
}
