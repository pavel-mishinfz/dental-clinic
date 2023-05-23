<?php

namespace App\Http\Controllers\Admin\Review;

use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Support\Facades\Schema;

class ShowController extends Controller
{
    public function __invoke(Review $review) {
        $columns = Schema::getColumnListing('reviews');
        return view('admin.review.show', compact('review', 'columns'));
    }
}
