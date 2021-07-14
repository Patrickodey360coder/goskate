<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SkatersController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/skaters', [SkatersController::class, 'index']);
Route::get('/skaters/{id}', [SkatersController::class, 'show']);
Route::post('/skaters', [SkatersController::class, 'store']);
Route::post('/skaters/{id}', [SkatersController::class, 'update']);
Route::delete('/skaters/{id}', [SkatersController::class, 'destroy']);

