<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\ProductImageController;
use App\Http\Controllers\Api\ProductInquiryController;


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

Route::get('/product-inquiry/{id}', [ProductInquiryController::class, 'show']);
Route::put('/product-inquiry/{id}', [ProductInquiryController::class, 'update']);


Route::get('/product-images/{id}', [ProductImageController::class, 'getImage']);
Route::post('/store-image-data', [ProductImageController::class, 'store']);
Route::put('/update-image-data/{id}', [ProductImageController::class, 'update']);
Route::delete('/delete-image-data/{id}', [ProductImageController::class, 'destroy']);
Route::delete('/product-inquiry/{id}', [ProductInquiryController::class, 'destroy'])->name('productInquiryDelete');

