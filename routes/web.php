<?php

use App\Http\Controllers\Subscription\SubscriptionController;
use Illuminate\Support\Facades\Route;

Route::post('subscriptions/store', [SubscriptionController::class, 'store'])->name('subscriptions.store');
Route::get('subscriptions/checkout', [SubscriptionController::class, 'index'])->name('subscriptions.checkout');
Route::get('subscriptions/premium', [SubscriptionController::class, 'premium'])->name('subscriptions.premium');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
