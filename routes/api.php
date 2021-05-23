<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\FileController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/login', LoginController::class);
Route::post('/logout', LogoutController::class);

Route::middleware('auth:sanctum')->post('/files/signed',[ FileController::class,'signed']);
Route::middleware('auth:sanctum')->get('/files',[ FileController::class,'index']);
Route::middleware('auth:sanctum')->post('/files',[ FileController::class,'store']);
Route::middleware('auth:sanctum')->delete('/files/{file:uuid}',[ FileController::class,'destroy']);

