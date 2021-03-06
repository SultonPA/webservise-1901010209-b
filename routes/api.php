<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\CustomerController;
use App\Http\Controllers\API\OrderController;
use App\Http\Controllers\API\ProductController;
use App\Http\Controllers\API\CategorieController;
use App\Http\Controller\AuthController;


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
//customer
Route::get('v1/customer', [CustomerController::class, 'index']);
Route::get('v1/customer/{id}', [CustomerController::class, 'show']);
//delete
Route::delete('v1/customer/{id}', [CustomerController::class, 'destroy']);
//tambah
Route::post('v1/customer', [CustomerController::class, 'store']);

//product
Route::get('product', [ProductController::class, 'index']);
Route::get('product/{id}', [ProductController::class, 'show']);
// //delete
Route::delete('product/{id}', [ProductController::class, 'destroy']);
// //tambah
Route::post('product', [ProductController::class, 'store']);
//update
Route::patch('product/{id}', [ProductController::class, 'update']);


//orders
Route::get('order', [OrderController::class, 'index']);
Route::get('order/{id}', [OrderController::class, 'show']);
// //delete
Route::delete('order/{id}', [OrderController::class, 'destroy']);
// //tambah
Route::post('order', [OrderController::class, 'store']);

//category
Route::get('category', [CategorieController::class, 'index']);
Route::get('category/{id}', [CategorieController::class, 'show']);
// //delete
Route::delete('category/{id}', [CategorieController::class, 'destroy']);
// //tambah
Route::post('category', [CategorieController::class, 'store']);

Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {

    Route::post('login', [App\Http\Controllers\AuthController::class, 'login']);
    Route::post('logout', [App\Http\Controllers\AuthController::class, 'login']);
    Route::post('refresh', [App\Http\Controllers\AuthController::class, 'refresh']);
    Route::post('me', [App\Http\Controllers\AuthController::class, 'me']);

});
