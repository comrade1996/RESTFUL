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

/**
*Buyers Routes
*/
Route::resource('Buyers','Buyer\BuyerController',['only' => ['index','show']]);

/**
*Categories Routes
*/
Route::resource('Categories','Category\CategoryController',['except' => ['create','edit']]);

/**
*Products Routes
*/
Route::resource('Products','Product\ProductController',['only' => ['index','show']]);

/**
*Sellers Routes
*/
Route::resource('Sellers','Seller\SellerController',['only' => ['index','show']]);

/**
*Transactions Routes
*/
Route::resource('Transactions','Transaction\TransactionController',['only' => ['index','show']]);

/**
*Users Routes
*/
Route::resource('Users','User\UserController',['except' => ['create','edit']]);

