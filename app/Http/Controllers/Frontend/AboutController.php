<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Testimonial;
class AboutController extends Controller
{
    public function about(){
        $testimonials= Testimonial::all();
        return view('frontend.about', compact('testimonials'));
    }
}
