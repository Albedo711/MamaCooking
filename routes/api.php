<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\HƩp\Controllers\RecipeController; 

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
Route::apiResource('recipes', RecipeController::class); 

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
