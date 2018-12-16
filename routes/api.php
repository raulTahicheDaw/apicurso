<?php

use Illuminate\Http\Request;

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

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/
Route::apiResource('users', 'UserController');
Route::apiResource('buyers', 'BuyerController', ['only' => ['index', 'show']]);

Route::apiResource('sellers', 'SellerController', ['only' => ['index', 'show']]);
Route::apiResource('sellers.transactions', 'SellerTransactionController', ['only' => ['index']]);
Route::apiResource('sellers.categories', 'SellerCategoryController', ['only' => ['index']]);
Route::apiResource('sellers.buyers', 'SellerBuyerController', ['only' => ['index']]);
Route::apiResource('sellers.products', 'SellerProductController', ['except' => ['show']]);

Route::apiResource('products', 'ProductController');
Route::apiResource('transactions', 'TransactionController');

Route::apiResource('categories', 'CategoryController');
Route::apiResource('categories.transactions', 'CategoryTransactionController', ['only' =>['index']]);
Route::apiResource('categories.buyers', 'CategoryBuyerController', ['only' =>['index']]);
Route::apiResource('categories.products', 'CategoryProductController', ['only' =>['index']]);
Route::apiResource('categories.sellers', 'CategorySellerController', ['only' =>['index']]);
