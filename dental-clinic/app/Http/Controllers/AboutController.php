<?php

namespace App\Http\Controllers;

use App\Models\License;
use App\Models\Review;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index() {
        $title = 'About';
        $licenses = License::all();
        $reviews = Review::latest()->take(5)->get();

        return view('about', compact('title', 'licenses', 'reviews'));
    }
}
