<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\StateController;

/*
|--------------------------------------------------------------------------
| Public Routes
|--------------------------------------------------------------------------
*/

// Default landing page
Route::get('/', [LoginController::class, 'index'])->name('login');
Route::get('login', [LoginController::class, 'index']);

// Auth Logic
Route::post('login-check', [LoginController::class, 'loginCheck'])->name('login.check');
Route::get('signout', [LoginController::class, 'logout'])->name('signout');


/*
|--------------------------------------------------------------------------
| Protected Routes (Auth Required)
|--------------------------------------------------------------------------
*/
Route::middleware(['auth'])->group(function () {

    // Main Dashboard
    Route::get('/index', function () { 
        return view('index'); 
    })->name('index');

    // Masters Module - State
   Route::prefix('state')->name('state.')->group(function () {
    Route::get('/', [StateController::class, 'index'])->name('index');
    Route::get('/create/{id?}', [StateController::class, 'add'])->name('add');
    Route::post('/store', [StateController::class, 'save'])->name('save');
    Route::get('/view/{id}', [StateController::class, 'view'])->name('view');
    Route::post('/delete/{id}', [StateController::class, 'destroy'])->name('destroy');
});

});