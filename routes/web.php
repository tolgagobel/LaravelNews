<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserController;

Route::group(['prefix'=>'admin', 'namespace'=>'Admin'], function (){
   Route::redirect('/', '/admin/login');

   Route::match(['get', 'post'],'/login',[\App\Http\Controllers\Admin\UserController::class,'login'])->name('admin.login');
   Route::get('/logout',[\App\Http\Controllers\Admin\UserController::class,'logout'])->name('admin.logout');

    Route::group(['middleware' => 'admin'], function (){
        Route::get('/main',[\App\Http\Controllers\Admin\MainController::class,'index'])->name('admin.main');

        Route::group(['prefix' => 'user'], function (){
            Route::match(['get','post'],'/',[\App\Http\Controllers\Admin\UserController::class,'index'])->name('admin.user');
            Route::get('/new',[\App\Http\Controllers\Admin\UserController::class, 'form'])->name('admin.user.new');
            Route::get('/update/{id}',[\App\Http\Controllers\Admin\UserController::class, 'form'])->name('admin.user.update');
            Route::post('/save/{id?}',[\App\Http\Controllers\Admin\UserController::class, 'save'])->name('admin.user.save');
            Route::get('/delete/{id?}',[\App\Http\Controllers\Admin\UserController::class, 'delete'])->name('admin.user.delete');
        });
        Route::group(['prefix' => 'category'], function (){
            Route::match(['get','post'],'/',[\App\Http\Controllers\Admin\CategoryController::class,'index'])->name('admin.category');
            Route::get('/new',[\App\Http\Controllers\Admin\CategoryController::class, 'form'])->name('admin.category.new');
            Route::get('/update/{id}',[\App\Http\Controllers\Admin\CategoryController::class, 'form'])->name('admin.category.update');
            Route::post('/save/{id?}',[\App\Http\Controllers\Admin\CategoryController::class, 'save'])->name('admin.category.save');
            Route::get('/delete/{id?}',[\App\Http\Controllers\Admin\CategoryController::class, 'delete'])->name('admin.category.delete');
        });
        Route::group(['prefix' => 'product'], function (){
            Route::match(['get','post'],'/',[\App\Http\Controllers\Admin\ProductController::class,'index'])->name('admin.product');
            Route::get('/new',[\App\Http\Controllers\Admin\ProductController::class, 'form'])->name('admin.product.new');
            Route::get('/update/{id}',[\App\Http\Controllers\Admin\ProductController::class, 'form'])->name('admin.product.update');
            Route::post('/save/{id?}',[\App\Http\Controllers\Admin\ProductController::class, 'save'])->name('admin.product.save');
            Route::get('/delete/{id?}',[\App\Http\Controllers\Admin\ProductController::class, 'delete'])->name('admin.product.delete');
        });
    });

});

Route::get('/',[MainController::class,'index'])->name('main');

Route::get('/category/{slug_categoryname}',[CategoryController::class,'index'])->name('category');

Route::get('/product/{slug_productname}',[ProductController::class,'index'])->name('product');
Route::post('/search',[ProductController::class,'search'])->name('product_search');
Route::get('/search',[ProductController::class,'search'])->name('product_search');

Route::group(['prefix'=>'cart'], function(){
    Route::get('/',[CartController::class,'index'])->name('cart');
    Route::post('/add',[CartController::class,'add'])->name('add.cart');
    Route::delete('/remove/{rowid}',[CartController::class,'remove'])->name('remove.cart');
    Route::delete('/destroy',[CartController::class,'destroy'])->name('destroy.cart');
    Route::patch('/update/{rowid}',[CartController::class,'update'])->name('update.cart');
});

Route::group(['middleware' => 'auth'], function (){
    Route::get('/payment',[PaymentController::class,'index'])->name('payment')->middleware('auth');
    Route::get('/orders',[OrderController::class,'index'])->name('orders');
    Route::get('/orders/{id}',[OrderController::class,'detail'])->name('orders');
});



Route::get('/user/login',[UserController::class,'login_form'])->name('user.login');
Route::post('/user/login',[UserController::class,'login']);
Route::get('/user/signup',[UserController::class,'signup_form'])->name('user.signup');
Route::post('/user/signup',[UserController::class,'signup'])->name('user.signupPost');
Route::post('/activate/{key}',[UserController::class,'activate'])->name('activate');
Route::post('/logout',[UserController::class,'logout'])->name('user.logout');

