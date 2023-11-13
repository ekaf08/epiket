<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ShiftController;
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

Route::get('/', [AuthController::class, 'login'])->name('login');
Route::post('/authLogin', [AuthController::class, 'authLogin'])->name('authLogin');

Route::group([
    'middleware' => ['auth', 'role']
], function () {

    Route::get('/master/jam/data', [ShiftController::class, 'data'])->name('jam.data');
    Route::resource('/master/jam', ShiftController::class)->except('create, edit');

    Route::resource('/menu', MenuController::class);
    Route::get('/dashboard', function () {
        return view('layout.app');
    })->name('dashboard');
});
// Route::group([
//     'middleware' => ['auth', 'role:skpd']
// ], function () {

//     dd('disinisek');
// });
