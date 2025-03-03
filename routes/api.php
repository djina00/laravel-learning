<?php

use App\Http\Controllers\Api\v1\BlogController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::group(['prefix' => 'v1'], function(){


    Route::get('/blogs/search', [BlogController::class, 'search']);


    Route::get('/blogs', [BlogController::class, 'index']);
    Route::post('/blogs', [BlogController::class, 'store']);
    Route::put('/blogs/{id}', [BlogController::class, 'update']);
    Route::put('/blogs/{id}', [BlogController::class, 'show']);
    Route::delete('/blogs/{id}', [BlogController::class, 'destroy']);

});