<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReviewStoreRequest;
use App\Models\Review;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index() {
        $title = 'Reviews';
        $reviews = Review::all();

        return view('reviews', compact('title', 'reviews'));
    }

    public function imageResize(Request $request) {
        $data = $request->image;

        list($type, $data) = explode(';', $data);
        list($type, $data) = explode(',', $data);

        $data = base64_decode($data);
        $image_name = time().'.png';
        $path = public_path() . "/upload/" . $image_name;

        file_put_contents($path, $data);

        return response()->json(['success'=>'success','img'=>$image_name]);
    }

    public function store(ReviewStoreRequest $request) {
        $review = new Review();
        $review->name = $request->name;
        $review->surname = $request->surname;
        $review->review = $request->review;
        $review->img = $request->file;
        $review->save();

        return response()->json(['success'=>'Отзыв <span>успешно</span> отправлен!']);
    }
}
