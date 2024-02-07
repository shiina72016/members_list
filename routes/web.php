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


Route::get('/members', [App\Http\Controllers\membersController::class, 'index']);//TOPページ
Route::get('/register', [App\Http\Controllers\membersController::class, 'register']); //登録画面
Route::POST('/registermember', [App\Http\Controllers\membersController::class,'registermember']); //入力されたデータを登録する
Route::post('/members', [App\Http\Controllers\membersController::class, 'index']);//TOPページ

Route::get('/edit/{id}', [App\Http\Controllers\membersController::class, 'edit']);
// /edit/{id}を渡してあげると、membercontrollerの/editが動きます
Route::POST('/memberEdit', [App\Http\Controllers\membersController::class, 'memberEdit']);
