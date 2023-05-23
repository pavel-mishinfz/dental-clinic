<?php

namespace App\Http\Controllers\Admin\Review;

use App\Http\Controllers\Controller;
use App\Models\Review;

class DestroyController extends Controller
{
    public function __invoke(Review $review) {
        $review->delete();
        $review->img == "user-photo.png" ? '' : unlink(public_path() . '/upload/' . $review->img);

        return redirect()->route('admin.review.index');
    }
}
