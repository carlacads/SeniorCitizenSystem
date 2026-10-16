<?php

use App\Http\Controllers\AssistanceRequestController;
use App\Http\Controllers\BenefitController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\SeniorCitizenController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/dashboard');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::resource('seniors', SeniorCitizenController::class);
    Route::resource('assistance', AssistanceRequestController::class)
        ->parameters(['assistance' => 'assistanceRequest']);
    Route::resource('benefits', BenefitController::class);
    Route::get('/reports', [ReportController::class, 'index'])->name('reports.index');

    // Profile routes (used by the navigation menu)
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
