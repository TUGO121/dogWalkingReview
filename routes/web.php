<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// ReviewController
Route::get('/', [ReviewController::class, 'top'])->name('top');

// CategoryController
Route::get('/categories/{category}', [CategoryController::class,'top']);

// PlaceController
Route::get('/places/{place}', [PlaceController::class,'top']);

// UserController
Route::get('/users/{user}', [UserController::class,'top']);

// レビュー作成画面
Route::get('/reviews/create', [ReviewController::class, 'create']);
Route::post('/reviews',[ReviewController::class,'store']);

// レビュー表示
Route::get('/reviews/{review}', [ReviewController::class ,'show']);

// レビュー編集
Route::get('/reviews/{review}/edit', [ReviewController::class, 'edit']);
Route::put('/reviews/{review}', [ReviewController::class, 'update']);

//レビュー削除
Route::delete('/reviews/{review}',[ReviewController::class,'delete']);

require __DIR__.'/auth.php';