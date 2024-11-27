<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ClientRequestController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/request', function () {
    return view('request');
})->middleware(['auth', 'verified'])->name('request');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/request', [ClientRequestController::class, 'index'])->middleware(['auth', 'verified'])->name('request');
    Route::get('/dashboard', [ClientRequestController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');
    Route::get('/client-requests/create', [ClientRequestController::class, 'create'])->name('client-requests.create');
    Route::post('/client-requests', [ClientRequestController::class, 'store'])->name('client-requests.store');
    
});


require __DIR__.'/auth.php';

require __DIR__.'/admin-auth.php';
