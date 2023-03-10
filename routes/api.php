<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ActorController;
use App\Http\Controllers\Api\PeliculaController;
use App\Http\Controllers\Api\DirectorController;
use App\Http\Controllers\LoginController;

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


Route::apiResource('peliculas', PeliculaController::class);
Route::apiResource('actores', ActorController::class);
Route::apiResource('directores', DirectorController::class);

Route::post('login', [LoginController::class, 'login']);
