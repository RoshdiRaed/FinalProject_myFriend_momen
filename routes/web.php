<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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
    return view('welcome');
});

Route::get('a', function () {
    return view('imge');
});
Route::get('imges',[ContactController::class, 'index'])->name('imges');
Route::get('/contact', [ContactController::class, 'Create'])->name('contact');
Route::post('/contact', [ContactController::class, 'Insert'])->name('contact.submit');

Route::get('/imgee', [ContactController::class, 'imgee'])->name('imgee');
Route::post('/imgee', [ContactController::class, 'Insertimge'])->name('imgee.submit');
