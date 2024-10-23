<?php

use App\Http\Controllers\studentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/store',[studentController::class,"store"]);
Route::get('/show',[studentController::class,'show']);
Route::delete('/delete/{id}',[studentController::class,'delete']);
Route::get('/edit/{id}',[studentController::class,'edit']);
Route::put('/update/{id}',[studentController::class,'update']);