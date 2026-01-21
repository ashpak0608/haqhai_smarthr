<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\StateController;
use App\Http\Controllers\BuildingController;

/*
|--------------------------------------------------------------------------
| Public Routes
|--------------------------------------------------------------------------
*/
Route::get('/', [LoginController::class, 'index'])->name('login');
Route::get('login', [LoginController::class, 'index']);
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

    // Building Master
    Route::prefix('building')->name('building.')->group(function () {
        Route::get('/', [BuildingController::class, 'index'])->name('index');
        Route::get('/add/{id?}', [BuildingController::class, 'add'])->name('add');
        Route::post('/save', [BuildingController::class, 'save'])->name('save');
        Route::post('/delete/{id}', [BuildingController::class, 'destroy'])->name('destroy');
    });

    // AJAX Routes for Dependent Dropdowns
    Route::get('/get-districts/{state_id}', [BuildingController::class, 'getDistricts']);
    Route::get('/get-cities/{district_id}', [BuildingController::class, 'getCities']);
    Route::get('/get-areas/{city_id}', [BuildingController::class, 'getAreas']);
    Route::get('/get-locations/{area_id}', [BuildingController::class, 'getLocations']);
    Route::get('/get-landmarks/{location_id}', [BuildingController::class, 'getLandmarks']);

});