<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PartidoController;

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


Route::get('/partidos', [PartidoController::class, 'index']);
Route::post('/partidos', [PartidoController::class, 'store']);
Route::get('/partidos/{partido}', [PartidoController::class, 'show']);
Route::put('/partidos/{partido}', [PartidoController::class, 'update']);
Route::delete('/partidos/{partido}', [PartidoController::class, 'destroy']);