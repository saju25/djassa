<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\Frontend\AddController as FrontendAddController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\User\AdressController;
use App\Http\Controllers\User\CartController;
use App\Http\Controllers\User\DashboardController;
use App\Http\Controllers\User\OrderController;
use App\Http\Controllers\User\PostController;
use App\Http\Controllers\User\ProfileController;
use App\Http\Controllers\User\SocialMediaController;
use App\Http\Controllers\User\SubController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
 */

// NEW PROJECT ROUTE START

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/all-product', [HomeController::class, 'findProduct'])->name('all.product');

// OTP VERIFY ROUTE
Route::get('verify-account', [DashboardController::class, 'verifyaccount'])->name('verifyAccount');
Route::post('verifyotp', [DashboardController::class, 'useractivation'])->name('verifyotp');
Route::get('/verify-otp/{user}', [DashboardController::class, 'verifyOtpByUser'])->name('otp-verify');
Route::get('/resend-otp/{user}', [DashboardController::class, 'resendOtp'])->name('resend-otp');
Route::get('/policy-and-confidentiality', [HomeController::class, 'policy'])->name('policy-and-confidentiality');
Route::get('/about-us', [HomeController::class, 'about'])->name('about.us');

// NEW PROJECT ROUTE END

Route::get('/test-success', [SubController::class, 'success']);

Route::get('/test-fail', [SubController::class, 'fail']);
//al candidates
Route::get('/all-candidates', [HomeController::class, 'allCandidates'])->name('all.candidates');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

// NEW PROJECT ROUTE START

//ADD DETAILS ROUTE
    Route::get('/add-details/{id}/{slug}', [FrontendAddController::class, 'addPostDetails'])->name('add.details');

//ADD STORE ROUTE
    Route::get('/user/new-add-post', [PostController::class, 'create'])->name('user.add.post');
    Route::post('/store/add', [PostController::class, 'store'])->name('store.add');
    // Product update
    Route::get('/product/update/{id}', [PostController::class, 'show'])->name('show.update');
    Route::post('/product/update/{id}', [PostController::class, 'update'])->name('product.update');
    // Route for deleting a user by ID
    Route::delete('/product/{id}', [PostController::class, 'destroy'])->name('product.delete');

//CART PAGE ROUTE
    Route::post('/cart-page', [CartController::class, 'index'])->name('cart.page');
//ORDER ROUTE
    Route::post('/order/store', [OrderController::class, 'store'])->name('order.store');
    Route::post('/order/update/{id}', [OrderController::class, 'update'])->name('order.update');

//ORDER print
    Route::get('/print-order/{id}/{s_id}/{c_id}', [ProfileController::class, 'orderPrint'])->name('order.print');
//candidate profile details
    Route::get('/candidate/profile/{id}', [HomeController::class, 'candidateProfile'])->name('candidate.profile.details');
    Route::get('/profile-detail/my-add', [ProfileController::class, 'profileAdd'])->name('profile.add');
    Route::get('/profile-detail/stock-out', [ProfileController::class, 'stockOut'])->name('stock.add');
    Route::get('/profile-detail/my-order', [ProfileController::class, 'orderList'])->name('profile.order');
    Route::get('/profile-detail/my-buying-product', [ProfileController::class, 'buyingOrder'])->name('profile.buying');
    Route::get('/profile-detail', [ProfileController::class, 'candidateDetails'])->name('profile.detail');
//product rating
    Route::post('/comments', [CommentController::class, 'store'])->name('comments.store');

// NEW PROJECT ROUTE END

    //user dashboard
    Route::get('/user/deshboard', [DashboardController::class, 'userDashboard'])->name('user.dashboard');

    //user Sub
    Route::get('/user/subscription-page', [SubController::class, 'index'])->name('user.sub');
    Route::get('/user/sub/{id}', [SubController::class, 'sub'])->name('user.subs');

    //social account update
    Route::post('/update/social-media', [SocialMediaController::class, 'update'])->name('social.account.update');
    // update user info
    Route::post('/update/user/info', [AdressController::class, 'updateUserInfo'])->name('user.update.info');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/profile/edit', function (Request $request) {
        $user = $request->user();
        return view('user.profile.edit', compact('user'));
    })->name('user.profile.edit');
});

//social-login
Route::get('login/{provider}', [SocialController::class, 'redirect']);
Route::get('login/{provider}/callback', [SocialController::class, 'Callback']);

require __DIR__ . '/auth.php';
require __DIR__ . '/admin/auth.php';
