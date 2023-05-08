<?php

namespace App\Http\Controllers;
use App\Models\Category;


use Illuminate\Http\Request;

class CategoryController extends Controller
{
    
    public function top(Category $category)
    {
        return view('categories.top')->with(
            [
                'reviews' => $category->getByCategory(),
                'categories' => $category->getByLimit()
            ]);
         
         
    }
}
