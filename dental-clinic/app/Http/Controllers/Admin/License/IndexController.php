<?php

namespace App\Http\Controllers\Admin\License;

use App\Http\Controllers\Controller;
use App\Models\License;
use Illuminate\Support\Facades\Schema;

class IndexController extends Controller
{
    public function __invoke() {
        $licenses = License::all();
        $columns = Schema::getColumnListing('licenses');

        return view('admin.license.index', compact('licenses', 'columns'));
    }
}
