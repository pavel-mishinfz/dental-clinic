<?php

namespace App\Http\Controllers\Admin\Review;

use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Support\Facades\Schema;

class IndexController extends Controller
{
    public function __invoke() {
        $reviews = Review::paginate(50);
        $columns = Schema::getColumnListing('reviews');

        return view('admin.review.index', compact('reviews', 'columns'));
    }
}
