<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;   
use App\Http\Controllers\DoctorController;   

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
    return view('appointments', [
        'appointments' => \App\Models\Appointment::all(),
    ]);
});

Route::get('/doctors', function(){
    return view('doctors', [
        'doctors' => \App\Models\Doctor::all(),
    ]);
});

Route::get('/doctors/{doctor}', [DoctorController::class, 'show']);

Route::get('/patients', function(){
    return view('patients', [
        'patients' => \App\Models\Patient::all(),
    ]);
});

Route::get('/users', function(){
    return view('users', [
        'users' => \App\Models\User::all(),
    ]);
});