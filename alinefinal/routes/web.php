<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\client\IndexController;
use \App\Http\Controllers\client\ProductController;
use \App\Http\Controllers\client\CartSessionController;
use \App\Http\Controllers\client\OrderController;
use \App\Http\Controllers\client\BlogController;
use \App\Http\Controllers\client\AboutController;
use \App\Http\Controllers\client\ContactController;

    Route::get('/',[IndexController::class, 'index'])->name('index');
    Route::get('/shop',[ProductController::class, 'shop'])->name('shop');
    Route::get('/shopdr/{id}',[ProductController::class, 'shopbr'])->name('shopbr');
    Route::get('/addcart/{id}',[CartSessionController::class, 'addToCart'])->name('add.cart');
    Route::get('/cart',[CartSessionController::class, 'viewCart'])->name('cart.index');
    Route::get('/cart/{id}/delete',[CartSessionController::class, 'removeFromCart'])->name('remove.cart');
    Route::get('/shop/{id}', [ProductController::class, 'shopdetail'])->name('shop.detail');
    Route::get('/blog',[ BlogController::class, 'blog'])->name('blog');
    Route::get('/blogdetail/{id}',[ BlogController::class, 'blogdetail'])->name('blogdetail');
    Route::get('/about',[ AboutController::class, 'index'])->name('about');
    Route::get('/contact',[ ContactController::class, 'index'])->name('contact');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::put('/order', [OrderController::class, 'store'])->name('checkout.create');
    Route::get('/cart/checkout',[CartSessionController::class, 'viewcheckout'])->name('checkout');
    Route::put('/checkout',[CartSessionController::class, 'viewcheckout'])->name('checkout.store');
    Route::put('/cart/{id}',[CartSessionController::class, 'updateCart'])->name('update.cart');

    Route::get('/orderhistory',[OrderController::class, 'index'])->name('order.history');
    Route::get('/showorder/{id}', [OrderController::class, 'show'])->name('show.order');
    Route::put('/order/{id}/edit', [OrderController::class, 'update'])->name('edit.order');
    Route::put('/orderdetail/{id}/edit', [OrderController::class, 'update_detail'])->name('edit.orderdetail');


});
Route::prefix('admin')->name('admin.')->group(function () {
  


Route::middleware('admin')->group(function () {
    Route::get('/', function () {
        return view('admin.index');
    });
    Route::resource('category', \App\Http\Controllers\Admin\CategoryController::class);
    Route::resource('users', \App\Http\Controllers\Admin\UserController::class);
    Route::resource('brand', \App\Http\Controllers\Admin\BrandController::class);
    Route::resource('product', \App\Http\Controllers\Admin\ProductController::class);
    Route::resource('orders', \App\Http\Controllers\Admin\OrderController::class);


    Route::resource('blogs',\App\Http\Controllers\Admin\BlogController::class);
    Route::resource('contact',\App\Http\Controllers\Admin\ContactController::class);
    // Các route admin khác
});

});

// Route::get('/', function () {
//     return view('welcome');
// });









require __DIR__.'/auth.php';
