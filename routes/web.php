<?php

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

Route::get('/', function () {
    return view('user.frontpage.home.home'); // ✅ 
});

Route::post('/menu', function () {
    return 'Menu route works!';
})->name('menu');

Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
})->name('password.request');

Route::get('/available-plots', function () {
    return view('user.frontpage.available-plots.main');
});

// ✅ Added missing routes
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');
Route::get('/poleads', function () {
    return view('user.frontpage.available-plots.poleads');
})->name('poleads');
Route::get('/slot-booking', function () {
    return view('user.frontpage.slotbooking.slot_booking');
})->name('slot.booking');
Route::get('/Select_Duration', function () {
    return view('user.frontpage.duration.Select_duration');
})->name('Select_Duration');
Route::get('/payment', function () {
    return view('user.frontpage.payment.payment');
})->name('payment');

use App\Http\Controllers\AdvertisementController;
use App\Http\Controllers\BookingController;



Route::get('/ads', [AdvertisementController::class, 'index'])->name('ads.index');
Route::get('/book/{area}', [AdvertisementController::class, 'book'])->name('ads.book');

Route::post('/booking/confirm', [BookingController::class, 'confirm'])->name('booking.confirm');
Route::get('/booking/summary', function () {
    return view('booking.summary');
})->name('booking.summary');


Route::get('/about', function () {
    return view('user.frontpage.about.main');
});
Route::get('/Services', function () {
    return view('user.frontpage.about.Services');
});
Route::get('/contact', function () {
    return view('user.frontpage.about.contact');
});
Route::get('/Visual_Markers', function () {
    return view('user.frontpage.VisualMarkers.Visual_Markers');
})->name('Visual_Markers');

Route::get('/my_booking', function () {
    return view('user.frontpage.booking.my_booking');
})->name('my_booking');
Route::get('/History', function () {
    return view('user.frontpage.history.History');
})->name('History');
Route::get('/Profile', function () {
    return view('user.frontpage.profile.Profile');
})->name('Profile');
Route::get('/Dashboard', function () {
    return view('user.frontpage.dashboard.Dashboard');
})->name('Dashboard');
