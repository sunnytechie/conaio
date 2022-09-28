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

//Route::get('/', function () {
//    return view('welcome');
//});

//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth'])->name('dashboard');
//Route::get('/', function () {
//    return view('dashboard');
//})->middleware(['auth'])->name('dashboard.home');

Route::get('/', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard.home')->middleware('auth');
Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard')->middleware('auth');

Route::get('/testimonies', [App\Http\Controllers\TestimonyController::class, 'index'])->name('testimony.index')->middleware('auth');
Route::post('/testimony', [App\Http\Controllers\TestimonyController::class, 'store'])->name('testimony.store')->middleware('auth');

Route::get('/prayer/new', [App\Http\Controllers\PrayerController::class, 'create'])->name('prayer.new')->middleware('auth');
Route::post('/prayer', [App\Http\Controllers\PrayerController::class, 'store'])->name('prayer.store')->middleware('auth');

require __DIR__.'/auth.php';
