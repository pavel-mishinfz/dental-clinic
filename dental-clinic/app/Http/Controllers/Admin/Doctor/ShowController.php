<?php

namespace App\Http\Controllers\Admin\Doctor;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use Illuminate\Support\Facades\Schema;

class ShowController extends Controller
{
    public function __invoke(Doctor $doctor) {
        $title = $doctor->surname . ' ' . $doctor->name . ' ' . $doctor->lastname;
        $route = 'admin.doctor.show';
        $columns = Schema::getColumnListing('doctors');

        return view('admin.doctor.show', compact('doctor', 'columns', 'title', 'route'));
    }
}
