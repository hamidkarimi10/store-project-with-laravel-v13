<?php

use App\Http\Controllers\Admin\AddressController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CityController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DeliveryController;
use App\Http\Controllers\Admin\DiscountController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\UserController;

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::view('/', 'welcome')->name('dashboard');
Route::prefix('admin')->name('admin.')->group(function() {
    Route::get('/' , DashboardController::class)->name('index');
    Route::resource('categories' , CategoryController::class);
    Route::resource('products' , ProductController::class);
    Route::resource('users' , UserController::class);
    Route::resource('addresses' , AddressController::class);
    Route::resource('discounts' , DiscountController::class);
    Route::resource('deliveries' , DeliveryController ::class);
    Route::resource('orders', OrderController::class);

    
    
    Route::get('setting' , [SettingController::class, 'index'])->name('setting.index');
    Route::get('setting/{setting}/edit' , [SettingController::class, 'edit'])->name('setting.edit');
    Route::get('setting/{setting}' , [SettingController::class, 'update'])->name('setting.update');

    Route::get('cities' , [CityController::class, 'index'])->name('cities.index');
    Route::post('cities/change-status/{city}' , [CityController::class, 'changeStatus'])->name('cities.changeStatus');

    Route::resource('menus', MenuController::class);

});


require __DIR__.'/auth.php';
