<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\AdminPageController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['prefix' => 'admin'], function(){
    Route::get('/', [AdminPageController::class, 'index'])->name('admin.index');
    Route::get('/product/create', [AdminPageController::class, 'product_create'])->name('admin.product.create');
});

Route::get('/', [FrontendController::class, 'index'])->name('home');
Route::get('/shop', [FrontendController::class, 'shop'])->name('shop');