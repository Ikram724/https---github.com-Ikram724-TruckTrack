<?php

use App\Http\Controllers\FormController;
use App\Http\Controllers\MailController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('landing');
});
Route::post('/mail', [MailController::class, 'index']);
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::post('/form', [FormController::class, 'index']);
Route::get('/pricing', function () {
    return view('pricing');
});
Route::get('/form', function () {
    return view('form');
});
Route::get('/working', function () {
    return view('working');
});
