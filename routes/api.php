<?php

use App\Http\Controllers\PlatosController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(PlatosController::class)->group(function () {
    Route::get('/platos', 'index');
    Route::post('/plato', 'create');
    Route::get('/plato/{name}', 'show');
    Route::put('/plato/{id}', 'update');
    Route::delete('/plato/{id}', 'destroy');
});
