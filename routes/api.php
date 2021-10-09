<?php

use App\Http\Controllers\ProductsController;
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

Route::get('/ping', function() {
   return 'All systems go';
});

Route::get('/products', [ProductsController::class, 'getAll']);
Route::get('/products/best-selling', [ProductsController::class, 'getBestSelling']);
Route::get('/products/{product}', [ProductsController::class, 'getProduct']);
