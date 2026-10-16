<?php

use App\Http\Controllers\TraderController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

//Get - index
Route::get('/traders', [TraderController::class, 'index']);
/* http://127.0.0.1:8000/api/traders */

//Get - show
Route::get('/traders/{trader}', [TraderController::class, 'show']);
/* http://127.0.0.1:8000/api/traders/1 */

//Post - store
Route::post('/traders',[TraderController::class, 'store']);
/* http://127.0.0.1:8000/api/traders */

//Put - update
Route::put('/traders/{trader}',[TraderController::class, 'update']);
/* http://127.0.0.1:8000/api/traders/2 */

//Delete - destroy
Route::delete('/traders/{trader}',[TraderController::class, 'destroy']);
/* http://127.0.0.1:8000/api/traders/5 */