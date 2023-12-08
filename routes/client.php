<?php

// ------------------------------------------
//   Client / Dashboard PANEL ROUTES
//      middleware('role:1')->
// ------------------------------------------
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\client;

Route::middleware('role:1')->prefix('client')->name('client.')->group(function (){

    Route::get('dashboard', [Client\DashboardController::class, 'dashboard'])
        ->name('dashboard');

    Route::get('/profile', [client\ProfileController::class, 'edit'])
        ->name('profile.edit');
    Route::patch('/profile', [Client\ProfileController::class, 'update'])
        ->name('profile.update');
    Route::delete('/profile', [client\ProfileController::class, 'destroy'])
        ->name('profile.destroy');

});
