<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Livewire\HomeCopmponent;
use App\Livewire\ShopCopmponent;
use App\Livewire\CartCopmponent;
use App\Livewire\CheckoutCopmponent;

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
Route::middleware(['auth:sanctun','verified'])->group(function(){

});

//for admin
Route::middleware(['auth:sanctun','verified'])->group(function(){

});