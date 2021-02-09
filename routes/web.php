<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Auth\Middleware\Authenticate;

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


// Route::get('/status', function () {
//     return view('status');
// })->middleware('auth');

Route::get('/status', [App\Http\Controllers\ImageController::class, 'display'])->middleware('auth');;

// Route::get('/controls', function () {
//     return view('controls');
// })->middleware('auth');

Route::get('/controls', [App\Http\Controllers\ImageController::class, 'display2'])->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//image routes
Route::get('image', [App\Http\Controllers\ImageController::class, 'index']);
Route::post('save', [App\Http\Controllers\ImageController::class, 'save']);
