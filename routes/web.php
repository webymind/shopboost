<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StoreController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/add-my-store', function () {
    return view('Setup');
});


Route::get('/privacy-policy', function () {
    return view('privacy');
});


Route::get('/terms-and-conditions', function () {
    return view('termsandconditions');
});

Route::post('/stores', [StoreController::class, 'store'])->name('stores.store');



Route::get('/payment-method', [StoreController::class, 'show'])
    ->name('payment.method');

Route::post('/stores/{store}/request-cash', [StoreController::class, 'requestCash'])
    ->name('stores.requestCash');
