<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
     public function top(User $user)
    {
        return view('users.top')->with(
            [
                'reviews' => $user->getByPlace(),
                'users' => $user->getByLimit()
            ]);
    }
}
