<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\AdminPageController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;


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
    Route::group(['prefix' => '/products'], function(){
        Route::get('/', [ProductController::class, 'products'])->name('admin.products');
        Route::get('/create', [ProductController::class, 'productCreate'])->name('admin.product.create');
        Route::post('/create', [ProductController::class, 'productStore'])->name('admin.product.store');
        Route::get('/edit/{id}', [ProductController::class, 'productEdit'])->name('admin.product.edit');
        Route::post('/edit/{id}', [ProductController::class, 'productEditPost'])->name('admin.product.edit.post');
        Route::post('/delete/{id}', [ProductController::class, 'productDeletePost'])->name('admin.product.delete.post');
    });
    Route::group(['prefix' => '/categories'], function(){
        Route::get('/', [CategoryController::class, 'categories'])->name('admin.categories');
        Route::get('/create', [CategoryController::class, 'categoryCreate'])->name('admin.category.create');
        Route::post('/create', [CategoryController::class, 'categoryStore'])->name('admin.category.store');
        Route::get('/edit/{id}', [CategoryController::class, 'categoryEdit'])->name('admin.category.edit');
        Route::post('/edit/{id}', [CategoryController::class, 'categoryEditPost'])->name('admin.category.edit.post');
        Route::post('/delete/{id}', [CategoryController::class, 'categoryDeletePost'])->name('admin.category.delete.post');
    });
});

Route::get('/', [FrontendController::class, 'index'])->name('home');
Route::get('/shop', [FrontendController::class, 'shop'])->name('shop');