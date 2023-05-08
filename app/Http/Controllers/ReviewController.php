<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use App\Models\Category;

class ReviewController extends Controller
{
    public function top(Review $review, Category $category)
    {
        return view('reviews/top')->with(
            [
                'reviews' => $review->getByLimit(),
                'categories' => $category->getByLimit()
            ]);
    }


}
