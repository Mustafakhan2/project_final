<?php

use App\Http\Controllers\UserController;
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

Route::get('/', [UserController::class, "index"]);

Route::get('/logn', [UserController::class, 'logn'])->name('logn');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/admin', function () {
    return view('admin');
});
Route::get('/logn', [UserController::class, "show"])->name('admin.dashboard');
Route::get('/logn/{id}', [UserController::class, "destroy"])->name('del');

Route::get('/dashboard/{id}', [UserController::class, 'edit'])->name('admin.edit');
Route::post('/dashboard/{id}', [UserController::class, 'update']);
