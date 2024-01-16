<?php

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
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/',[\App\Http\Controllers\UserController::class,'index']);
Route::get('/users',[\App\Http\Controllers\UserController::class,'index']);
Route::get('/contact',[\App\Http\Controllers\PagesController::class,'contact']);
Route::get('/about',[\App\Http\Controllers\PagesController::class,'about']);
Route::get('/tasks',[\App\Http\Controllers\TaskController::class,'index']);
