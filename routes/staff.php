<?php

// ------------------------------------------
//   Staff / Dashboard PANEL ROUTES
//      middleware('role:2')->
// ------------------------------------------
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Staff;

Route::middleware('role:2')->prefix('staff')->name('staff.')->group(function (){

    Route::get('dashboard', [Staff\DashboardController::class, 'dashboard'])
        ->name('dashboard');

    Route::get('/profile', [Staff\ProfileController::class, 'edit'])
        ->name('profile.edit');
    Route::patch('/profile', [Staff\ProfileController::class, 'update'])
        ->name('profile.update');
    Route::delete('/profile', [Staff\ProfileController::class, 'destroy'])
        ->name('profile.destroy');

});
