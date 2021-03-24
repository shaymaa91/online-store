<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\StaticPageController;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\UserProfileController;
use App\Http\Controllers\Auth\ChangePasswordController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController as FrontHomeController;
use App\Http\Controllers\ProductsController as ProductsHomeController;

use App\Http\Controllers\Admin\CustomerDetailsController;


Route::get('/', [FrontHomeController::class,'index']);
Route::get('/page/{slug}', [FrontHomeController::class,'page']);
Route::get('/services', [FrontHomeController::class,'services']);
Route::get('/services/{slug}', [FrontHomeController::class,'serviceDetails']);
Route::get('/contact-us', [ContactController::class,'contact']);
Route::post('/contact-us', [ContactController::class,'contactus']);

Route::get('/products', [ProductsHomeController::class,'index']);
Route::get('/products/cart', [CartController::class,'cart']);
Route::get('/products/add-to-cart/{id}', [CartController::class,'addToCart'])->name('add-to-cart');
Route::get('/products/remove-from-cart/{id}', [CartController::class,'removeFromCart'])->name('remove-from-cart');
Route::get('/products/{slug}', [ProductsHomeController::class,'details'])->name("product.details");


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

//Route::get('/', 'TestController@index');
Route::prefix("admin")->middleware(['auth','role:admin'])->group(function(){    
    Route::get("/",[HomeController::class,'index']);
    
    Route::resource("category",CategoryController::class);
    Route::get("category/{id}/delete",[CategoryController::class,'destroy'])->name("category.delete");

    Route::resource("user",UserController::class);
    Route::get("user/{id}/delete",[UserController::class,'destroy'])->name("users.delete");
    
    Route::resource("static-page",StaticPageController::class);
    Route::get("static-page/{id}/delete",[StaticPageController::class,'destroy'])->name("static-page.delete");
    
    Route::resource("customer",CustomerController::class);
    Route::get("customer/{id}/delete",[CustomerController::class,'destroy'])->name("customer.delete");

    Route::resource("products",ProductController::class);
    Route::get("products/{id}/delete",[ProductController::class,'destroy'])->name("products.delete");

    Route::resource("slider",SliderController::class);
    Route::get("slider/{id}/delete",[SliderController::class,'destroy'])->name("slider.delete");

    Route::resource("service",ServiceController::class);
    Route::get("service/{id}/delete",[ServiceController::class,'destroy'])->name ("service.delete");
    
    Route::post("order/update-status/{id}",[OrderController::class,'updateStatus'])->name("order.updateStatus");
    Route::resource("order",OrderController::class);
    Route::get("order/{id}/delete",[OrderController::class,'destroy'])->name("order.delete");
    // Route::get('/detalis/{id}' , 'DetaliController@index')->name('detalis');
    Route::get("change-pass",[ChangePasswordController::class,'edit'])->name("password.edit");
    Route::post("change-pass",[ChangePasswordController::class,'update'])->name("password.changed");
    Route::get("profile",[UserProfileController::class,'edit'])->name("profile.edit");
    Route::put("profile",[UserProfileController::class,'update'])->name("profile.update");

    Route::resource("customer-details",CustomerDetailsController::class);
    Route::get("customer-details/{id}/delete",[CustomerDetailsController::class,'destroy'])->name ("customer-details.delete");

});
