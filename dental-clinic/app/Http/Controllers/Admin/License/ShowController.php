<?php

namespace App\Http\Controllers\Admin\License;

use App\Http\Controllers\Controller;
use App\Models\License;
use Illuminate\Support\Facades\Schema;

class ShowController extends Controller
{
    public function __invoke(License $license) {
        $columns = Schema::getColumnListing('licenses');
        return view('admin.license.show', compact('license', 'columns'));
    }
}
