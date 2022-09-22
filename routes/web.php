<?php

use App\Http\Controllers\DependentDropdownController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::controller(DependentDropdownController::class)->group(function() {
    Route::get('/provinces', 'provinces')->name('provinces');
    Route::get('/cities', 'cities')->name('cities');
    Route::get('/districts', 'districts')->name('districts');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
