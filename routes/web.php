<?php

use App\Http\Controllers\PageController;
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


Route::get('/index', [PageController::class, 'index']);

Route::get('/about-us', [PageController::class, 'index']);

Route::get('/contact-us', [PageController::class, 'index']);

Route::get('/services', [PageController::class, 'index']);

Route::get('/request-quote', [PageController::class, 'index']);

