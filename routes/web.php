<?php

use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Employee\EmployeeDashboardController;
use App\Http\Controllers\Employer\EmployerDashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobSearchController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)
    ->name('welcome');

Route::get('job', JobSearchController::class)
    ->name('search.job');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', DashboardController::class)
        ->name('dashboard');
});

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', AdminDashboardController::class)
        ->name('admin.dashboard');
});

Route::middleware(['auth', 'role:employer'])->group(function () {
    Route::get('/employer/dashboard', EmployerDashboardController::class)
        ->name('employer.dashboard');
});

Route::middleware(['auth', 'role:employee'])->group(function () {
    Route::get('/employee/dashboard', EmployeeDashboardController::class)
        ->name('employee.dashboard');
});

require __DIR__ . '/auth.php';
