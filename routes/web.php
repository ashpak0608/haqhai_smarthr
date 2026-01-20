<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\StateController;

/*
|--------------------------------------------------------------------------
| Public Routes (No Login Required)
|--------------------------------------------------------------------------
*/

// Set the default landing page to Login
Route::get('/', [LoginController::class, 'index'])->name('login');
Route::get('login', [LoginController::class, 'index']);

// Authentication Logic
Route::post('login-check', [LoginController::class, 'loginCheck'])->name('login.check');
Route::get('signout', [LoginController::class, 'logout'])->name('signout');

// Registration & Password (Public)
Route::get('register', function () { return view('register'); })->name('register');
Route::get('forgot-password', function () { return view('forgot-password'); })->name('forgot-password');

/*
|--------------------------------------------------------------------------
| Protected Routes (Auth Required)
|--------------------------------------------------------------------------
*/
Route::middleware(['auth'])->group(function () {

    // Main Dashboards
    Route::get('/index', function () { return view('index'); })->name('index');
    Route::get('/employee-dashboard', function () { return view('employee-dashboard'); })->name('employee-dashboard');
    Route::get('/deals-dashboard', function () { return view('deals-dashboard'); })->name('deals-dashboard');
    Route::get('/leads-dashboard', function () { return view('leads-dashboard'); })->name('leads-dashboard');

    /* --- Application Routes --- */
    Route::get('/chat', function () { return view('chat'); })->name('chat');
    Route::get('/voice-call', function () { return view('voice-call'); })->name('voice-call');
    Route::get('/video-call', function () { return view('video-call'); })->name('video-call');
    Route::get('/outgoing-call', function () { return view('outgoing-call'); })->name('outgoing-call');
    Route::get('/incoming-call', function () { return view('incoming-call'); })->name('incoming-call');
    Route::get('/call-history', function () { return view('call-history'); })->name('call-history');
    Route::get('/calendar', function () { return view('calendar'); })->name('calendar');
    Route::get('/email', function () { return view('email'); })->name('email');
    Route::get('/todo', function () { return view('todo'); })->name('todo');
    Route::get('/todo-list', function () { return view('todo-list'); })->name('todo-list');
    Route::get('/notes', function () { return view('notes'); })->name('notes');
    Route::get('/social-feed', function () { return view('social-feed'); })->name('social-feed');
    Route::get('/file-manager', function () { return view('file-manager'); })->name('file-manager');
    Route::get('/kanban-view', function () { return view('kanban-view'); })->name('kanban-view');
    Route::get('/invoices', function () { return view('invoices'); })->name('invoices');
    Route::get('/invoice-details', function () { return view('invoice-details'); })->name('invoice-details');

    /* --- Super Admin & Settings --- */
    Route::get('/dashboard', function () { return view('dashboard'); })->name('dashboard');
    Route::get('/companies', function () { return view('companies'); })->name('companies');
    Route::get('/subscription', function () { return view('subscription'); })->name('subscription');
    Route::get('/packages', function () { return view('packages'); })->name('packages');
    Route::get('/domain', function () { return view('domain'); })->name('domain');
    Route::get('/purchase-transaction', function () { return view('purchase-transaction'); })->name('purchase-transaction');
    
    /* --- CRM & Projects --- */
    Route::get('/clients', function () { return view('clients'); })->name('clients');
    Route::get('/projects', function () { return view('projects'); })->name('projects');
    Route::get('/tasks', function () { return view('tasks'); })->name('tasks');
    Route::get('/leads', function () { return view('leads'); })->name('leads');
    Route::get('/pipeline', function () { return view('pipeline'); })->name('pipeline');
    Route::get('/analytics', function () { return view('analytics'); })->name('analytics');
    Route::get('/activity', function () { return view('activity'); })->name('activity');

    /* --- HRM & Payroll --- */
    Route::get('/employees', function () { return view('employees'); })->name('employees');
    Route::get('/departments', function () { return view('departments'); })->name('departments');
    Route::get('/designations', function () { return view('designations'); })->name('designations');
    Route::get('/holidays', function () { return view('holidays'); })->name('holidays');
    Route::get('/leaves', function () { return view('leaves'); })->name('leaves');
    Route::get('/attendance-admin', function () { return view('attendance-admin'); })->name('attendance-admin');
    Route::get('/payroll', function () { return view('payroll'); })->name('payroll');
    Route::get('/employee-salary', function () { return view('employee-salary'); })->name('employee-salary');

    /* --- Administration & Reports --- */
    Route::get('/assets', function () { return view('assets'); })->name('assets');
    Route::get('/knowledgebase', function () { return view('knowledgebase'); })->name('knowledgebase');
    Route::get('/users', function () { return view('users'); })->name('users');
    Route::get('/roles-permissions', function() { return view('roles-permissions'); })->name('roles-permissions');
    Route::get('/expenses-report', function () { return view('expenses-report'); })->name('expenses-report');
    
    /* --- Website Settings --- */
    Route::get('/profile-settings', function () { return view('profile-settings'); })->name('profile-settings');
    Route::get('/bussiness-settings', function () { return view('bussiness-settings'); })->name('bussiness-settings');
    Route::get('/localization-settings', function () { return view('localization-settings'); })->name('localization-settings');
    Route::get('/email-settings', function () { return view('email-settings'); })->name('email-settings');
    Route::get('/payment-gateways', function () { return view('payment-gateways'); })->name('payment-gateways');

    /* --- Content & Locations --- */
    Route::get('/pages', function () { return view('pages'); })->name('pages');
    Route::get('/blogs', function () { return view('blogs'); })->name('blogs');
    Route::get('/countries', function () { return view('countries'); })->name('countries');
    Route::get('/cities', function () { return view('cities'); })->name('cities');

    /* --- Extras & Errors (Protected View Test) --- */
    Route::get('/starter', function () { return view('starter'); })->name('starter');
    Route::get('/profile', function () { return view('profile'); })->name('profile');
    Route::get('/error-404', function () { return view('error-404'); })->name('error-404');
    Route::get('/under-maintenance', function () { return view('under-maintenance'); })->name('under-maintenance');
});