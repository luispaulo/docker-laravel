<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StringController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::post('/longest-strings', [StringController::class, 'todasStringsMaisLongas']);
