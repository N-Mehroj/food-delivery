<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Expressapi;
use App\Http\Controllers\ChackConroller;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get("/user",[Expressapi::class,'getData']);

Route::get("data",[Expressapi::class,'getData']);
Route::post('usersign', [Expressapi::class, 'signup']);
Route::post('phone', [Expressapi::class, 'phone']);

Route::post('login', [Expressapi::class, 'login']);
Route::get('userdata', [Expressapi::class, 'allUserData']);

Route::post('geo', [Expressapi::class, 'location']);


Route::post('ower_login', [Expressapi::class, 'owlogin']);
// Route::get('ower_data', [Expressapi::class, 'owerdata']);

Route::get('testAutentification', [Expressapi::class, 'TestAutentification']);

