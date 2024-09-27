<?php
use App\Http\Controllers\Admin\CarController as AdminCarController;
use App\Http\Controllers\Admin\CustomerController as AdminCustomerController;
use App\Http\Controllers\Admin\PagesController as AdminPagesController;
use App\Http\Controllers\Admin\RentalController as AdminRentalController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RentalController;
use Illuminate\Support\Facades\Route;

// frontend pages route
Route::get("/", [PagesController::class, 'homePage'])->name('home');
Route::get("/about", [PagesController::class, 'aboutPage'])->name('about');
Route::get("/contact", [PagesController::class, 'contactPage'])->name('contact');
Route::get("/cars", [CarController::class, 'carsListing'])->name('carslisting');
Route::get("/{car}/car-details", [CarController::class, 'carDetails'])->name('car.details');

//Create admin user first installation
Route::get('/installation/create/admin', [PagesController::class, 'createAdmin'])->name('installation.create.admin');
Route::post('/installation/store/admin', [PagesController::class, 'storeAdmin'])->name('installation.store.admin');

// Frontend User Route
Route::middleware(['auth', 'customer', 'verified'])->group(function () {
    Route::get('/customer-dashboard', [CustomerController::class, 'customerDashboard'])->name('customer.dashboard');
    Route::get('/myprofile/password', [CustomerController::class, 'changePassword'])->name('password.change');
    Route::put('/myprofile/password/update', [CustomerController::class,'updatePassword'])->name('password.update.now');
    Route::put('/myprofile/update', [CustomerController::class,'updateCurrentUser'])->name('profile.update');
    Route::get('/booking/{booking}/details', [CustomerController::class, 'bookingDetails'])->name('booking.details');
    Route::post('/booking/startbooking', [RentalController::class,'startBooking'])->name('rental.start');
    Route::post('/booking/confirm', [RentalController::class,'confirmBooking'])->name('rental.confirm');
    Route::get('/booking/success/{rentalid}', [RentalController::class,'bookingSuccess'])->name('rental.success');
    Route::post('/booking/{rentalid}/cancel', [RentalController::class, 'bookingCancel'])->name('booking.cancel');
    Route::get('/booking-history', [CustomerController::class, 'bookingHistory'])->name('booking.history');
});

// Admin pages route
Route::middleware('auth', 'admin', 'verified')->group(function () {
    Route::get('/admin', [AdminPagesController::class,'dashboard'])->name('admin.dashboard');
    Route::resource('/admin/customers', AdminCustomerController::class);
    Route::resource('/admin/cars', AdminCarController::class);
    Route::resource('/admin/rentals', AdminRentalController::class);
    Route::post('/admin/rentals/{rental}/update/complete', [AdminRentalController::class,'updateStatusComplete'])->name('rentals.status.complete');
    Route::post('/admin/rentals/{rental}/update/cancel', [AdminRentalController::class,'updateStatusCancel'])->name('rentals.status.cancel');
    Route::get('/admin/profile', [AdminCustomerController::class,'userProfile'])->name('admin.profile');
});