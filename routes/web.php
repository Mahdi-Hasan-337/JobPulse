<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Auth\PasswordlessAuthenticationController;
use App\Http\Controllers\Dashboard\CandidateAdminController;
use App\Http\Controllers\Dashboard\ComapnyAdminController;
use App\Http\Controllers\Dashboard\SystemAdminController;
use App\Http\Controllers\JobsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [WelcomeController::class, 'index']);
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/jobs', [JobsController::class, 'index'])->name('jobs');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

Route::post('/magic-login', [PasswordlessAuthenticationController::class, 'sendLink'])
    ->name('passwordless-login');

Route::get('/magic-login/{user}', [PasswordlessAuthenticationController::class, 'authenticateUser'])
    ->name('passwordless.authenticate');

///
Route::middleware(['auth', 'usertype:system', 'role:superadmin'])->group(function () {
    ///
    Route::get('system/superadmin/dashboard', [SystemAdminController::class, 'index'])->name('system.superadmin.dashboard');

    ///
    // Route::post('/system/superadmin/update-verify-status/{encryptedCompanyId}', [SystemAdminController::class, 'updateVerifyStatus'])
    //     ->name('update.Verify.Status');
    Route::post('/toggle-verify-status/{encryptedCompanyId}', [SystemAdminController::class, 'toggleVerifyStatus'])->name('toggleVerifyStatus');

    // Route::put('/update-role/{id}', 'EmployeeController@updateRole')->name('updateRole');
    Route::put('/update-role/{id}', [SystemAdminController::class, 'updateRole'])->name('updateRole');

    ///
    Route::post('/add-carousel-slide', [SystemAdminController::class, 'CreateBanner'])->name('addBanner');

    ///
    Route::put('/add-logo-name', [SystemAdminController::class, 'CreateLogoName'])->name('addLogoName');

    ///
    Route::post('/update-banner-status/{encryptedUserId}', [SystemAdminController::class, 'updateBannerStatus'])
        ->name('update.Banner.status');

    ///
    Route::put('/edit-banner/{id}', [SystemAdminController::class, 'EditBanner'])->name('edit-banner');
});

Route::middleware(['auth', 'usertype:company', 'role:member'])->group(function () {
    Route::get('company/dashboard', [ComapnyAdminController::class, 'index'])->name('company.dashboard');
});

Route::middleware(['auth', 'usertype:candidate', 'role:member'])->group(function () {
    Route::get('candidate/dashboard', [CandidateAdminController::class, 'index'])->name('candidate.dashboard');
});

Route::put('/toggle-verify-status/{encryptedCompanyId}', [SystemAdminController::class, 'updateVerifyStatus'])->name('toggle.Verify.Status');
