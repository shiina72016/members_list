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


Route::get('/top', [App\Http\Controllers\MemberController::class, 'index']);//TOPページ
Route::post('/top', [App\Http\Controllers\MemberController::class, 'index']);//TOPページ
Route::get('/register', [App\Http\Controllers\MemberController::class, 'register']); //登録画面
Route::post('/registermember', [App\Http\Controllers\MemberController::class,'registermember']); //入力されたデータを登録する

Route::get('/edit/{id}', [App\Http\Controllers\MemberController::class, 'edit']);
// /edit/{id}を渡してあげると、membercontrollerの/editが動きます
Route::post('/memberEdit', [App\Http\Controllers\MemberController::class, 'memberEdit']);

Route::get('/memberDelete/{id}', [App\Http\Controllers\MemberController::class, 'memberDelet']);
