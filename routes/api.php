<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AboutSiteController;
use App\Http\Controllers\DiscountController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PdetialController;
use App\Http\Controllers\PreOrderController;
use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SiteFeedbackController;
use App\Http\Controllers\UserAddressController;
use App\Http\Controllers\UserPaymentController;
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
Route::apiResource('about',AboutSiteController::class);
Route::apiResource('discount',DiscountController::class);
Route::apiResource('order',OrderController::class);
Route::apiResource('p_detail',PdetialController::class);
Route::apiResource('pre_order',PreOrderController::class);
Route::apiResource('product_category',ProductCategoryController::class);
Route::apiResource('product',ProductController::class);
Route::apiResource('site_feedback',SiteFeedbackController::class);
Route::apiResource('user_address',UserAddressController::class);
Route::apiResource('user_payment',UserPaymentController::class);