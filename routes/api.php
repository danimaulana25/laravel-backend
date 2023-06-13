<?php

use App\Http\Controllers\ProductController;
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

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/greeting', function(){
    return 'Hello Wordl';
});
Route::get('products', [ProductController::class, 'index'])->name('products.index');
// Route::get('products1', [ProductsController::class, 'index1'])->name('products.index1');
Route::post('products', [ProductController::class, 'store'])->name('products.store');
