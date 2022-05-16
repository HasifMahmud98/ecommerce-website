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
    Route::group(['prefix' => '/products'], function(){
        Route::get('/', [AdminPageController::class, 'products'])->name('admin.products');
        Route::get('/create', [AdminPageController::class, 'productCreate'])->name('admin.product.create');
        Route::post('/create', [AdminPageController::class, 'productStore'])->name('admin.product.store');
        Route::get('/edit/{id}', [AdminPageController::class, 'productEdit'])->name('admin.product.edit');
        Route::post('/edit/{id}', [AdminPageController::class, 'productEditPost'])->name('admin.product.edit.post');
        Route::post('/delete/{id}', [AdminPageController::class, 'productDeletePost'])->name('admin.product.delete.post');
    });
});

Route::get('/', [FrontendController::class, 'index'])->name('home');
Route::get('/shop', [FrontendController::class, 'shop'])->name('shop');