<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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

Route::get('/hello', [PagesController::class, 'index'])->name('hello');
Route::get('/aboutus',[PagesController::class, 'aboutus'])->name('aboutus');
Route::get('/contactus',[PagesController::class, 'contactus'])->name('contactus');
Route::get('/products',[PagesController::class, 'products'])->name('product');
Route::get('/team',[PagesController::class, 'team'])->name('team');

