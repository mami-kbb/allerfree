<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RecipeController;
use App\Models\Recipe;

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
Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
    return back();
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

Route::get('/', [RecipeController::class, 'index'])->name('recipes.list');
Route::get('/recipe/{recipe_id}', [RecipeController::class, 'show'])->name('recipe.show');

Route::middleware(['auth', 'verified'])->group (function () {
    Route::get('/mypage', [AuthController::class, 'index'])->name('mypage');
    Route::get('/mypage/profile', [AuthController::class, 'edit'])->name('profile');
    Route::patch('/mypage/profile',[AuthController::class, 'update'])->name('profile_update');
    Route::get('/post', [RecipeController::class, 'postIndex'])->name('post.index');
    Route::post('/post', [RecipeController::class, 'postStore'])->name('post.store');
    Route::post('/recipe/{id}/like', [RecipeController::class, 'toggle'])->name('like');
});