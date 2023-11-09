<?php

use App\Http\Controllers\MenuController;
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
Route::resource('/category', CategoryController::class);

Route::resource('/menu', MenuController::class);
Route::get('/', function () {
    return view('layout.app');
});
Route::get('/login', function () {
    return view('auth.login');
});
