<?php
use App\Models\Category;
use App\Models\Product;

use Illuminate\Http\Request;
use App\Http\Controllers\CategoriesApiController;
use App\Http\Controllers\ProductsApiController;
use App\Http\Controllers\TypesApiController;
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
Route::get('/categories', [CategoriesApiController::class, 'index']);
Route::post('/categories', [CategoriesApiController::class, 'store']);
Route::get('/categories/{id}', [CategoriesApiController::class, 'getCategory']);
Route::get('/categories/{category}/product', [ProductsApiController::class, 'index']);
Route::post('/categories/{category}/product', [ProductsApiController::class, 'store']);

Route::get('/types', [TypesApiController::class, 'index']);
Route::post('/types', [TypesApiController::class, 'store']);
Route::get('/types/{id}', [TypesApiController::class, 'getType']);

Route::get('/products', [ProductsApiController::class, 'indexwithoutcategory']);
Route::get('/products/{id}', [ProductsApiController::class, 'getProduct']);

Route::get('/types/{type}/product', [ProductsApiController::class, 'indexByType']);
Route::get('/types/{product}/type', [TypesApiController::class, 'indexByProducts']);