<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\CategoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// ReviewController
Route::get('/', [ReviewController::class, 'top']);

// CategoryController
Route::get('/categories/{category}', [CategoryController::class,'top']);

// レビュー表示
Route::get('/reviews/{review}', [ReviewController::class ,'post']);

// レビュー作成画面
// Route::get('/reviews/post', [PostController::class, 'post']);