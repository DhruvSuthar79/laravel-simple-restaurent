<?php

use App\Http\Controllers\frontend\AboutController;
use App\Http\Controllers\frontend\BookController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\MenuController;
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

// Route::get('/', function () {
//     return view('frontend.index');
// });
// Route::get('/book', function(){
//     return view('frontend/book');
// });
// Route::get('/menu', function(){
//     return view('frontend/menu');
// });
// Route::get('/about', function(){
//     return view('frontend/about');
// });
Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);
Route::get('/book', [BookController::class, 'index']);
Route::get('/menu', [MenuController::class, 'index']);
Route::post('/book', [BookController::class, 'booking']);