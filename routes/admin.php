<?php

// ------------------------------------------
//   Admin / Dashboard PANEL ROUTES
//      middleware('role:3')->
// ------------------------------------------
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin;

Route::middleware('role:3')->prefix('admin')->name('admin.')->group(function (){

    Route::get('dashboard', [Admin\DashboardController::class, 'dashboard'])
        ->name('dashboard');

    Route::get('users', [Admin\UsersController::class, 'index'])
        ->name('users.index');

    Route::get('/profile', [Admin\ProfileController::class, 'edit'])
        ->name('profile.edit');
    Route::patch('/profile', [Admin\ProfileController::class, 'update'])
        ->name('profile.update');
    Route::delete('/profile', [Admin\ProfileController::class, 'destroy'])
        ->name('profile.destroy');



});
