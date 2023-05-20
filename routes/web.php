<?php

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

// The route we have created to show all blog posts.
Route::get('/blog', [\App\Http\Controllers\PostController::class, 'index']);
Route::get('/blog/{blogPost}', [\App\Http\Controllers\PostController::class, 'show']);


Route::get('/blog/create/post', [\App\Http\Controllers\PostController::class, 'create']); //shows create post form
Route::post('/blog/create/post', [\App\Http\Controllers\PostController::class, 'store']); //saves the created post to the databse
Route::get('/blog/{blogPost}/edit', [\App\Http\Controllers\PostController::class, 'edit']); //shows edit post form
Route::put('/blog/{blogPost}/edit', [\App\Http\Controllers\PostController::class, 'update']); //commits edited post to the database 
Route::delete('/blog/{blogPost}', [\App\Http\Controllers\PostController::class, 'destroy']); //deletes post from the database



