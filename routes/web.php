<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Livewire\HomeCopmponent;
use App\Livewire\ShopCopmponent;
use App\Livewire\CartCopmponent;
use App\Livewire\CheckoutCopmponent;
use App\livewire\admin\AdminDashboardCompoent;
use App\livewire\user\UserDashboardCompoent;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',HomeCopmponent::class)->name('/');
Route::get('/shop',ShopCopmponent::class)->name('shop');
Route::get('/cart',CartCopmponent::class)->name('cart');
Route::get('/checkout',CheckoutCopmponent::class)->name('checkout');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

//for user or custumer
Route::middleware(['auth:sanctum','verified'])->group(function(){
    Route::get('user/dashboard',UserDashboardCompoent::class)->name('user.dashboard');
});

//for admin
Route::middleware(['auth:sanctum','verified','authadmin'])->group(function(){
    Route::get('admin/dashboard',AdminDashboardCompoent::class)->name('admin.dashboard');
});