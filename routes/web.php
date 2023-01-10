<?php

use App\Http\Controllers\AdminControlller;
use App\Http\Controllers\EcommerceControlller;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', [EcommerceControlller::class, 'home'])->name('home');
Route::get('/product/{id}', [EcommerceControlller::class, 'singleProduct'])->name('product.single');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard', [AdminControlller::class, 'dashboard'])->name('admin.dashbaord');

    // product routes
    Route::get('/admin/product', [ProductController::class, 'addProduct'])->name('admin.add.product');
    Route::post('/admin/product', [ProductController::class, 'saveProduct'])->name('admin.save.product');

    Route::get('/admin/manage-product/', [ProductController::class, 'manageProduct'])->name('admin.manage.product');

    Route::get('/admin/update-product/{id}', [ProductController::class, 'updateProduct'])->name('admin.update.product');
    Route::post('/admin/update-product/{id}', [ProductController::class, 'saveProductUpdate'])->name('admin.saveUpdate.product');

    // ?user
    Route::get('/admin/user', [UserController::class, 'user'])->name('admin.user');
    Route::get('/admin/user/manage', [UserController::class, 'manageUser'])->name('admin.manage.user');
});
