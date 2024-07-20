<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SeatController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\TheaterController;
use App\Http\Controllers\LandingPageController;

Route::get('/', [LandingPageController::class, 'index'])->name('now-playing');
Route::get('/theater', [LandingPageController::class, 'theater'])->name('theater');
Route::get('/upcoming', [LandingPageController::class, 'upcoming'])->name('upcoming');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login/authenticate', [AuthController::class, 'authenticate'])->name('login.auth');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register/store', [AuthController::class, 'store'])->name('register.store');
Route::get('/movie/{id}', [MovieController::class, 'show'])->name('movie.show');
Route::get('/movie/theater/{movieId}', [MovieController::class, 'theater'])->name('movie.theater');
Route::get('/theater/{id}', [TheaterController::class, 'show'])->name('theater.show');


Route::middleware(['auth'])->group(function () {
    Route::get('/seats/{showtimeId}', [SeatController::class, 'showSeats'])->name('seats.layout');
    Route::post('/tickets/confirm', [TicketController::class, 'confirmTicket'])->name('ticket.confirm');
    Route::get('/payment/{ticket}', [PaymentController::class, 'showPaymentPage'])->name('payment');
    Route::post('/payment/complete-payment', [PaymentController::class, 'completePayment'])->name('payment.complete');
    Route::get('/payment-history', [PaymentController::class, 'paymentHistory'])->name('payment.history');
    Route::get('/user/profile', [UserController::class, 'profile'])->name('user.profile');
    Route::post('/user/profile/update', [UserController::class, 'updateProfile'])->name('user.profile.update');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});
