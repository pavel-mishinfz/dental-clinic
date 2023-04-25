<?php

namespace App\Http\Controllers;

use App\Models\License;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index() {
        $title = 'About';
        $licenses = License::all();

        return view('about', compact('title', 'licenses'));
    }
}
