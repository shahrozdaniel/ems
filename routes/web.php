<?php

use App\Http\Controllers\AttendeeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EventController;
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

Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('/authenticate', [UserController::class, 'authenticate'])->name('authenticate');

Route::middleware('auth')->group(function () {
		Route::get('/logout', [UserController::class, 'logout'])->name('logout');
		Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

		// Events
		Route::resource('/events', EventController::class);
		// Attendees
		Route::resource('/attendees', AttendeeController::class);
});


