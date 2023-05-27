<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use App\Models\Category;
use App\Models\Place;
use App\Models\User;

class ReviewController extends Controller
{
    public function top(Review $review, Category $category, Place $place, User $user)
    {
        return view('reviews/top')->with(
            [
                'reviews' => $review->getByLimit(10),
                'categories' => $category->getByLimit(),
                'places' => $place->getByLimit(),
                'users' => $user->getByLimit()
                
            ]);
    }
    
    public function create(Category $category, Place $place,)
    {
        return view('reviews/create')->with(
            [
                'categories' => $category->getByLimit(),
                'places' => $place->getByLimit(),
                
            ]);
    }
    
    public function show(Review $review)
    {
        return view('reviews/show')->with(['review' => $review]);
            
    }

    public function store(Request $request,Review $review,Category $category, Place $place, User $user)
    {
       $input = $request['review'];
       $input['user_id'] = 1;
       $review->fill($input)->save(); 
       return redirect('/reviews/' . $review->id);
    }
    
    public function edit(Review $review)
    {
        return view('reviews/edit')->with(['review' => $review]);
    }
    
    public function update(Request $request,Review $review)
    {
        $input = $request['review'];
        $input['user_id'] = 1;
        $review->fill($input)->save(); 
        return redirect('/reviews/' . $review->id);
    }
    
    public function delete(Review $review)
    {
        $review->delete();
        return redirect('/');
    }
}
