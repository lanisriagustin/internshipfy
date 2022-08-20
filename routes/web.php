<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

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

// Main Page Route
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/', function () {
    return view('frontend.index');
});

Route::get('/fitur', function () {
    return view('frontend.feature');
});

Route::get('/tentang', function () {
    return view('frontend.about');
});

Route::get('/team', function () {
    return view('frontend.team');
});

Route::get('/kontak', function () {
    return view('frontend.contact');
});
