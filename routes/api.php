<?php

use App\Http\Controllers\ProductCategoryController;
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

Route::group(['prefix' => 'v1'], function() {
    // Route::apiResource('product-categories', 'ProductCategoryResource'); 
    // Route::get('product-categories', [ProductCategoryController::class, 'index']);

    Route::resource('product-categories', ProductCategoryController::class);
});