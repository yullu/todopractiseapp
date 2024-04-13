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

Route::get('/',[\App\Http\Controllers\TodoController::class,'index'])->name('todo');
Route::get('/todo',[\App\Http\Controllers\TodoController::class,'index'])->name('todo');
Route::post('/todo',[\App\Http\Controllers\TodoController::class,'store']);
Route::patch('/todo/{todo}',[\App\Http\Controllers\TodoController::class,'update']);
Route::delete('/todo/{todo}',[\App\Http\Controllers\TodoController::class,'destroy']);
