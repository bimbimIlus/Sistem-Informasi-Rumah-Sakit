<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\KasirController;
use App\Http\Controllers\ApotekerController;

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\PatientController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth', 'role:admin'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {

        /*
        |--------------------------------------------------------------------------
        | Dashboard
        |--------------------------------------------------------------------------
        */

        Route::get('/dashboard', [AdminController::class, 'index'])
            ->name('dashboard');

        /*
        |--------------------------------------------------------------------------
        | Users
        |--------------------------------------------------------------------------
        */

        Route::get('/users', [UserController::class, 'index'])
            ->name('users.index');

        Route::get('/users/create', [UserController::class, 'create'])
            ->name('users.create');

        Route::post('/users', [UserController::class, 'store'])
            ->name('users.store');

        /*
        |--------------------------------------------------------------------------
        | Patients
        |--------------------------------------------------------------------------
        */

        Route::resource('patients', PatientController::class);
    });

/*
|--------------------------------------------------------------------------
| Dokter
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'role:dokter'])->group(function () {

    Route::get('/dokter/dashboard', [DokterController::class, 'index']);

});

/*
|--------------------------------------------------------------------------
| Kasir
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'role:kasir'])->group(function () {

    Route::get('/kasir/dashboard', [KasirController::class, 'index']);

});

/*
|--------------------------------------------------------------------------
| Apoteker
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'role:apoteker'])->group(function () {

    Route::get('/apoteker/dashboard', [ApotekerController::class, 'index']);

});