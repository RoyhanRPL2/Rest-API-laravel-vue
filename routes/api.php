<?php

use App\Http\Controllers\TransactionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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


// Route::get('/transaction', [TransactionController::class, 'index'] );

// Route::post('/transaction', [TransactionController::class, 'store'] ); 

// ROute::get('/transaction/{id}', [TransactionController::class, 'show'] ); 

// Route::put('/transaction/{id}', [TransactionController::class, 'update'] );

// Route::delete('/transaction/{id}', [TransactionController::class, 'destroy'] ); 

Route::resource('/transaction', TransactionController::class)->except(['create', 'edit']);