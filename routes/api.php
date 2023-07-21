<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\LaptopController;

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

Route::get('noutes', [LaptopController::class,'index']);
Route::get('noutes/{noute}',[LaptopController::class,'show']);

Route::middleware('auth:sanctum')->group( function () {

    Route::post('noutes/{noute}',[LaptopController::class,'update']);
    Route::post('noutes',[LaptopController::class,'store']);
    Route::delete('noutes/{noute}',[LaptopController::class,'destroy']);
});

Route::post('login', [AuthController::class, 'login']);
Route::post('register', [AuthController::class, 'register']);
