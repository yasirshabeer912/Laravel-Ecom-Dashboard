<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});



Route::get('admin', [App\Http\Controllers\Admin\AdminController::class, 'index']);
Route::post('admin/auth', [App\Http\Controllers\Admin\AdminController::class, 'auth']);


Route::middleware([\App\Http\Middleware\AdminMiddleware::class])->group(function () {
    Route::get('admin/dashboard', [App\Http\Controllers\Admin\AdminController::class, 'dashboard']);
    Route::get('admin/logout', function () {
        session()->forget('ADMIN_LOGIN', true);
        session()->forget('ADMIN_ID' );
        return redirect('admin')->with('error','Logged Out Successfully');
    });

    Route::get('admin/category', [App\Http\Controllers\Admin\CategoryController::class, 'index']);
    Route::get('admin/add-category', [App\Http\Controllers\Admin\CategoryController::class, 'addCategory']);
    Route::post('admin/addCategory', [App\Http\Controllers\Admin\CategoryController::class, 'insert']);
    Route::get('admin/edit-category/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'edit']);
    Route::post('admin/updateCategory/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'update']);
    Route::get('admin/delete-category/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'delete']);
    Route::get('admin/edit-category/status/{status}/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'status']);


    Route::get('admin/coupon', [App\Http\Controllers\Admin\CouponController::class, 'index']);
    Route::get('admin/add-coupon', [App\Http\Controllers\Admin\CouponController::class, 'addcoupon']);
    Route::post('admin/addcoupon', [App\Http\Controllers\Admin\CouponController::class, 'insert']);
    Route::get('admin/edit-coupon/{id}', [App\Http\Controllers\Admin\CouponController::class, 'edit']);
    Route::post('admin/updatecoupon/{id}', [App\Http\Controllers\Admin\CouponController::class, 'update']);
    Route::get('admin/delete-coupon/{id}', [App\Http\Controllers\Admin\CouponController::class, 'delete']);
    Route::get('admin/edit-coupon/status/{status}/{id}', [App\Http\Controllers\Admin\CouponController::class, 'status']);


    Route::get('admin/size', [App\Http\Controllers\Admin\SizeController::class, 'index']);
    Route::get('admin/add-size', [App\Http\Controllers\Admin\sizeController::class, 'addsize']);
    Route::post('admin/addsize', [App\Http\Controllers\Admin\sizeController::class, 'insert']);
    Route::get('admin/edit-size/{id}', [App\Http\Controllers\Admin\sizeController::class, 'edit']);
    Route::post('admin/updatesize/{id}', [App\Http\Controllers\Admin\sizeController::class, 'update']);
    Route::get('admin/delete-size/{id}', [App\Http\Controllers\Admin\sizeController::class, 'delete']);
    Route::get('admin/edit-size/status/{status}/{id}', [App\Http\Controllers\Admin\sizeController::class, 'status']);

    Route::get('admin/color', [App\Http\Controllers\Admin\colorController::class, 'index']);
    Route::get('admin/add-color', [App\Http\Controllers\Admin\colorController::class, 'addcolor']);
    Route::post('admin/addcolor', [App\Http\Controllers\Admin\colorController::class, 'insert']);
    Route::get('admin/edit-color/{id}', [App\Http\Controllers\Admin\colorController::class, 'edit']);
    Route::post('admin/updatecolor/{id}', [App\Http\Controllers\Admin\colorController::class, 'update']);
    Route::get('admin/delete-color/{id}', [App\Http\Controllers\Admin\colorController::class, 'delete']);
    Route::get('admin/edit-color/status/{status}/{id}', [App\Http\Controllers\Admin\colorController::class, 'status']);

    Route::get('admin/product', [App\Http\Controllers\Admin\ProductController::class, 'index']);
    Route::get('admin/add-product', [App\Http\Controllers\Admin\productController::class, 'addproduct']);
    Route::post('admin/addproduct', [App\Http\Controllers\Admin\productController::class, 'insert']);
    Route::get('admin/edit-product/{id}', [App\Http\Controllers\Admin\productController::class, 'edit']);
    Route::post('admin/updateproduct/{id}', [App\Http\Controllers\Admin\productController::class, 'update']);
    Route::get('admin/delete-product/{id}', [App\Http\Controllers\Admin\productController::class, 'delete']);
    Route::get('admin/edit-product/status/{status}/{id}', [App\Http\Controllers\Admin\productController::class, 'status']);
});



