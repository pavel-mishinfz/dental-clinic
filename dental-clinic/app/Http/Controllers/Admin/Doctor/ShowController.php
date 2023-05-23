<?php

namespace App\Http\Controllers\Admin\Doctor;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use Illuminate\Support\Facades\Schema;

class ShowController extends Controller
{
    public function __invoke(Doctor $doctor) {
        $columns = Schema::getColumnListing('doctors');
        return view('admin.doctor.show', compact('doctor', 'columns'));
    }
}
