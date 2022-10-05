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

Route::get('/con/message', [App\Http\Controllers\DashboardController::class, 'con'])->name('con.message')->middleware('auth');

Route::get('/membership/new', [App\Http\Controllers\MembershipController::class, 'create'])->name('member.new')->middleware('auth');
Route::post('/membership', [App\Http\Controllers\MembershipController::class, 'store'])->name('member.store')->middleware('auth');

Route::get('/bible-through-the-year', [App\Http\Controllers\BibleController::class, 'index'])->name('bible.index')->middleware('auth');

Route::get('get-diocese', [App\Http\Controllers\MembershipController::class, 'getDiocese'])->name('getDiocese');

Route::get('authorized/google', [App\Http\Controllers\Api\LoginWithGoogleController::class, 'redirectToGoogle'])->name('redirectToGoogle');
Route::get('authorized/google/callback', [App\Http\Controllers\Api\LoginWithGoogleController::class, 'handleGoogleCallback'])->name('handleGoogleCallback');
require __DIR__.'/auth.php';
