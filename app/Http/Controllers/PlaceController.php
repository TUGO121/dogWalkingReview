<?php

namespace App\Http\Controllers;
use App\Models\Place;

use Illuminate\Http\Request;

class PlaceController extends Controller
{
    public function top(Place $place)
    {
        return view('places.top')->with(
            [
                'reviews' => $place->getByPlace(),
                'places' => $place->getByLimit()
            ]);
    }
}
