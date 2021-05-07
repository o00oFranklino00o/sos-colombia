<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ImageController;

// /Users/eduat/Desktop/Self/MR/magic-roses-dashboard/app/Http/Controllers/ImageController.php
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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::get('/home', function (Request $request) {
//     return "Welcome: Magic Roses";
// });

Route::get('/home', [ UserController::class, 'index' ]);
Route::post('/upload', [ ImageController::class, 'upload' ]);

Route::apiResource('products', ProductController::class);
Route::apiResource('orders', OrderController::class)->only('index', 'show');
