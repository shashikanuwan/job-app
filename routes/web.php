<?php

use App\Http\Controllers\Account\AdditionalDetailController;
use App\Http\Controllers\Account\VerifyController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\CvController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Employee\EmployeeDashboardController;
use App\Http\Controllers\Employer\EmployerDashboardController;
use App\Http\Controllers\Employer\EmployerJobController;
use App\Http\Controllers\Employer\PreviousJobRequestController;
use App\Http\Controllers\Employer\StatusController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Job\JobApplyController;
use App\Http\Controllers\Job\JobSearchController;
use App\Http\Controllers\Job\ShowJobController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)
    ->name('welcome');

Route::get('job', JobSearchController::class)
    ->name('job.search');

Route::get('job/{job:slug}', ShowJobController::class)
    ->name('job.show');

Route::middleware(['auth'])->group(function () {
    Route::get('dashboard', DashboardController::class)
        ->name('dashboard');

    Route::get('account-verify', VerifyController::class)
        ->name('account.verify');

    Route::get('additional-detail', [AdditionalDetailController::class, 'index'])
        ->name('additional.detail.index');

    Route::post('employer-detail-store', [AdditionalDetailController::class, 'employerDetailStore'])
        ->name('employer.detail.store');

    Route::post('employee-detail-store', [AdditionalDetailController::class, 'employeeDetailStore'])
        ->name('employee.detail.store');

    Route::post('job-apply', JobApplyController::class)
        ->name('job.apply');

    Route::get('cv-show/{applying}', CvController::class)
        ->name('cv.show');
});

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('admin/dashboard', AdminDashboardController::class)
        ->name('admin.dashboard');
});

Route::middleware(['auth', 'role:employer', 'additional_detail', 'account_verified'])->prefix('employer')->group(function () {
    Route::get('dashboard', EmployerDashboardController::class)
        ->name('employer.dashboard');

    Route::resource('jobs', EmployerJobController::class);

    Route::post('status/{applying}', StatusController::class)
        ->name('status.update');

    Route::get('previous-job-request', PreviousJobRequestController::class)
        ->name('previous.job.request');
});

Route::middleware(['auth', 'role:employee', 'additional_detail', 'account_verified'])->prefix('employee')->group(function () {
    Route::get('dashboard', EmployeeDashboardController::class)
        ->name('employee.dashboard');
});

require __DIR__ . '/auth.php';
