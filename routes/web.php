<?php

use App\Http\Controllers\Community\PostController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'coummunity', 'as' => 'community.'], function () {
    Route::group(['prefix' => 'posts', 'as' => 'post.'], function () {
        Route::get('/', [PostController::class, 'index'])->name('index');
        Route::get('/new', [PostController::class, 'store'])->name('store');
        Route::post('/new', [PostController::class, 'store'])->name('store');
    });

});
