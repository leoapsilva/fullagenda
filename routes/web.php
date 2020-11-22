<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;   

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
/*
Route::get('/', function () {
    return view('welcome');
});

Route::get('/welcome', function () {
    return view('welcome');
});
*/

Route::get('/posts/{post}', [PostsController::class, 'show']);

Route::get('/dashboard', function(){
    return view('dashboard');
});

Route::get('/appointments', function(){
    return view('appointments');
});

Route::get('/doctons', function(){
    return view('doctors');
});

Route::get('/users', function(){
    return view('users');
});