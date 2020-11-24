<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DoctorController; 
use App\Http\Controllers\PatientController;
use App\Http\Controllers\UserController;

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

// Dashboard Routes

Route::get('/dashboard', function(){
    return view('dashboard');
});

// Appointments Routes

Route::get('/appointments', function(){
    return view('appointments', [
        'appointments' => \App\Models\Appointment::all(),
    ]);
});

// Doctors Routes

Route::get('/doctors/create', [DoctorController::class, 'create'])
    ->name('doctors.create')
    ->middleware('auth');

Route::get('/doctors', [DoctorController::class, 'index'])
    ->name('doctors.index')
    ->middleware('auth');

Route::post('/doctors', [DoctorController::class, 'store'])
    ->name('doctors.store')
    ->middleware('auth');

Route::put('/doctors/{doctor}', [DoctorController::class, 'update'])
    ->name('doctors.update')
    ->middleware('auth');

Route::get('/doctors/{doctor}', [DoctorController::class, 'show'])
    ->name('doctors.show')
    ->middleware('auth');

Route::delete('/doctors/{doctor}', [DoctorController::class, 'destroy'])
    ->name('doctors.destroy')
    ->middleware('auth');

Route::get('/doctors/{doctor}/edit', [DoctorController::class, 'edit'])
    ->name('doctors.edit')
    ->middleware('auth');

Route::get('/doctors/{doctor}/delete', [DoctorController::class, 'delete'])
    ->name('doctors.delete')
    ->middleware('auth');


// Patients Routes

Route::get('/patients/create', [PatientController::class, 'create'])
    ->name('patients.create')
    ->middleware('auth');

Route::get('/patients', [PatientController::class, 'index'])
    ->name('patients.index')
    ->middleware('auth');

Route::post('/patients', [PatientController::class, 'store'])
    ->name('patients.store')
    ->middleware('auth');

Route::put('/patients/{patient}', [PatientController::class, 'update'])
    ->name('patients.update')
    ->middleware('auth');

Route::get('/patients/{patient}', [PatientController::class, 'show'])
    ->name('patients.show')
    ->middleware('auth');

Route::delete('/patients/{patient}', [PatientController::class, 'destroy'])
    ->name('patients.destroy')
    ->middleware('auth');

Route::get('/patients/{patient}/edit', [PatientController::class, 'edit'])
    ->name('patients.edit')
    ->middleware('auth');

Route::get('/patients/{patient}/delete', [PatientController::class, 'delete'])
    ->name('patients.delete')
    ->middleware('auth');


// Users Routes

Route::get('/users/create', [UserController::class, 'create'])
    ->name('users.create')
    ->middleware('auth');

Route::get('/users', [UserController::class, 'index'])
    ->name('users.index')
    ->middleware('auth');

Route::post('/users', [UserController::class, 'store'])
    ->name('users.store')
    ->middleware('auth');

Route::put('/users/{user}', [UserController::class, 'update'])
    ->name('users.update')
    ->middleware('auth');

Route::get('/users/{user}', [UserController::class, 'show'])
    ->name('users.show')
    ->middleware('auth');

Route::delete('/users/{user}', [UserController::class, 'destroy'])
    ->name('users.destroy')
    ->middleware('auth');

Route::get('/users/{user}/edit', [UserController::class, 'edit'])
    ->name('users.edit')
    ->middleware('auth');

Route::get('/users/{user}/delete', [UserController::class, 'delete'])
    ->name('users.delete')
    ->middleware('auth');




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get("/", [App\Http\Controllers\HomeController::class, 'index'])->name('home');
