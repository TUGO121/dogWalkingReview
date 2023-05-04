<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;

class ReviewController extends Controller
{
    public function toppage(Review $review)
{
    return view('reviews/toppage')->with(['reviews' => $review->getByLimit()]);
}
}
