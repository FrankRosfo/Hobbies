<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;
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
Route::get('/mail', [MailController::class, 'getMail']);

Route::get('/', function () {
    return view('blog.index');
})->name('inicio');

Route::get('/contacto', function () {
    return view('blog.contact');
})->name('contacto');

Route::get('/programar', function () {
    return view('blog.programar');
})->name('programar');

Route::get('/crash', function () {
    return view('blog.crash');
})->name('crash');

Route::get('/blur', function () {
    return view('blog.blur');
})->name('blur');