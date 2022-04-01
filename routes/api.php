<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('register', [\App\Http\Controllers\AuthController::class, 'register']);
Route::post('login', [\App\Http\Controllers\AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::get('user', [\App\Http\Controllers\AuthController::class, 'user']);
    Route::post('logout', [\App\Http\Controllers\AuthController::class, 'logout']);
    Route::get('students', [\App\Http\Controllers\StudentController::class, 'index']);
    Route::post('students', [\App\Http\Controllers\StudentController::class, 'store']);
    Route::get('students/{id}', [\App\Http\Controllers\StudentController::class, 'show']);
    Route::put('students/{id}', [\App\Http\Controllers\StudentController::class, 'update']);
    Route::delete('students/{id}', [\App\Http\Controllers\StudentController::class, 'destroy']);
});
