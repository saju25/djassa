<?php

use App\Http\Controllers\Admin\AdminManageController;
use App\Http\Controllers\Admin\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Admin\PaymentController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\RefundMonyController;
use App\Http\Controllers\Admin\WebSocialLinkController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest:admin')->prefix('admin')->name('admin.')->group(function () {

    Route::get('login', [AuthenticatedSessionController::class, 'create'])->name('login');

    Route::post('login', [AuthenticatedSessionController::class, 'store'])->name('login');
});

Route::middleware('auth:admin')->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    //Payment request routes

    Route::get('payment-request', [PaymentController::class, 'payment_index'])->name('payment.index');
    Route::get('payment-approve/{id}', [PaymentController::class, 'payment_approve'])->name('payment.approve');

    Route::get('withdraw-request', [PaymentController::class, 'withdraw_index'])->name('withdraw.index');
    Route::get('withdraw-approve/{id}', [PaymentController::class, 'withdraw_approve'])->name('withdraw.approve');

    //refund request
    Route::get('refund-request', [RefundMonyController::class, 'refund_index'])->name('refund.request');
    Route::get('refund-approve/{id}', [RefundMonyController::class, 'refund_approve'])->name('refund.approve');

    Route::get('website-social-links', [WebSocialLinkController::class, 'index'])->name('website.social.links');
    Route::post('website-social-links/update/{id}', [WebSocialLinkController::class, 'update'])->name('update.social.links');

    Route::get('delivery-company-info', [WebSocialLinkController::class, 'delInfoIndex'])->name('delivery-company-info');
    Route::get('delivery-company', [WebSocialLinkController::class, 'deliveryIndex'])->name('delivery-company');
    Route::post('delivery-company-store', [WebSocialLinkController::class, 'deliveryStore'])->name('delivery-company-store');
    Route::get('delivery-company-delete/{id}', [WebSocialLinkController::class, 'deliveryDestroy'])->name('delivery-company-delete');

    // admin user management
    Route::get('user-delete/{id}', [WebSocialLinkController::class, 'userDelete'])->name('user.delete');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
        ->name('logout');

    //admin manages
    Route::get('admin-manages', [AdminManageController::class, 'index'])->name('manages');

    Route::get('admin-create', [AdminManageController::class, 'create'])->name('create.admin');
    Route::get('admin-delete/{id}', [AdminManageController::class, 'destroy'])->name('delete.admin');
    Route::post('admin-store', [AdminManageController::class, 'store'])->name('store');

    Route::get('banner-information', [AdminManageController::class, 'bannerView'])->name('banner-in');
    Route::get('banner-in-add', [AdminManageController::class, 'bannerCreatView'])->name('banner-in-view');
    Route::post('banner-store', [AdminManageController::class, 'bannerStore'])->name('banner.store');
    Route::get('bannerdelete/{id}', [AdminManageController::class, 'bannerDelet'])->name('detel.banner');

    //change passwords
    Route::get('admin-store', [AdminManageController::class, 'changePassword'])->name('change.password.index');
    Route::post('password-change', [AdminManageController::class, 'passwordChange'])->name('password.change');
});
