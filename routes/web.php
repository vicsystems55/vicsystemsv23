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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [PageController::class, 'index']);

Route::get('/about-us', [PageController::class, 'about_us'])->name('about-us');

Route::get('/contact-us', [PageController::class, 'contact_us'])->name('contact-us');

Route::get('/services', [PageController::class, 'services'])->name('services');

Route::get('/portfolio', [PageController::class, 'portfolio'])->name('portfolio');

Route::get('/request-quote', [PageController::class, 'index'])->name('request-quote');

