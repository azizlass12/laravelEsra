<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\MeetController;
use App\Http\Controllers\Admin\ReservationController;
use App\Http\Controllers\Admin\TableController;
use App\Http\Controllers\Frontend\MeetController as FrontendMeetController;
use App\Http\Controllers\Frontend\MenuController as FrontendMenuController;
use App\Http\Controllers\Frontend\ReservationController as FrontendReservationController;
use App\Http\Controllers\Frontend\WelcomeController;
use Illuminate\Support\Facades\Route;





Route::middleware(['auth', 'admin'])->name('admin.')->prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('index');
    Route::resource('/meets', MeetController::class);
    Route::resource('/tables', TableController::class);
    Route::resource('/reservations', ReservationController::class);
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/', [WelcomeController::class, 'index']);
    Route::get('/welcome', [WelcomeController::class, 'index']);
    Route::get('/meets', [FrontendMeetController::class, 'index'])->name('meets.index');
    Route::get('/meets/{meet}', [FrontendMeetController::class, 'show'])->name('meets.show');
    Route::get('/reservation/step-one', [FrontendReservationController::class, 'stepOne'])->name('reservations.step.one');
    Route::post('/reservation/step-one', [FrontendReservationController::class, 'storeStepOne'])->name('reservations.store.step.one');
    Route::get('/reservation/step-two', [FrontendReservationController::class, 'stepTwo'])->name('reservations.step.two');
    Route::post('/reservation/step-two', [FrontendReservationController::class, 'storeStepTwo'])->name('reservations.store.step.two');
    Route::get('/thankyou', [WelcomeController::class, 'thankyou'])->name('thankyou');


require __DIR__ . '/auth.php';
