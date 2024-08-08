<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\futureControllar;
use App\Http\Controllers\categoryController;

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


Route::get('/category', [futureControllar::class , 'future']);
Route::get('/index', [futureControllar::class , 'table']);
Route::get('/show', [categoryController::class , 'show']);
Route::get('/addCategory', [categoryController::class , 'add']);
Route::get('/addCategory', [categoryController::class , 'addCategory']);
Route::post('/storeCategory', [DoctorController::class , 'storeCategory']);