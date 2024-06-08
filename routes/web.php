<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Paymentpage;


Route::get('/', function () {return view('welcome');})->name('welcome');

Route::get('/admin', function () {return view('admin');})->name('admin');

Route::get('/report', function () {return view('report');})->name('report');

Route::get('/schoolfaculty', function () {return view('schoolfaculty');})->name('schoolfaculty');

Route::get('/dues', function () {return view('dues');})->name('dues');

Route::get('/view-dues', function () {return view('view-dues');})->name('view-dues');

Route::get('/viewschool', function () {return view('viewschool');})->name('viewschool');

Route::get('/editdues', function () {return view('editdues');})->name('editdues');

Route::get('/bookings', function () {return view('bookings');})->name('bookings');

Route::get('/create-admin', function () {return view('create-admin');})->name('create-admin');

Route::get('/login', function () {return view('login');})->name('login');

Route::get('/paymentpage', function () {return view('paymentpage');})->name('paymentpage');

Route::get('/dashboard', function () {return view('dashboard');})->name('dashboard');

Route::get('/rooms', function () {return view('rooms');})->name('rooms');

Route::get('/receipt', function () {return view('receipt');})->name('receipt');

Route::get('/member-register', function () {return view('member-register');})->name('member-register');

Route::get('/admin-login', function () {return view('admin-login');})->name('admin-login');

Route::get('/about-us', function () {return view('about-us');})->name('about-us');

Route::get('/gallery', function () {return view('gallery');})->name('gallery');

Route::get('/contact-us', function () {return view('contact-us');})->name('contact-us');

Route::get('/update-password', function () {return view('update-password');})->name('update-password');

Route::get('/admin-register', function () {return view('admin-register');})->name('admin-register');

Route::get('/session', function () {return view('session');})->name('session');

Route::get('/view-payment', function () {return view('view-payment');})->name('view-payment');

Route::get('/view-payments', function () {return view('view-payments');})->name('view-payments');



Route::get('success', function () { return view('success');})->name('success');

Route::get('callback', [Paymentpage::class, 'callback'])->name('callback');

Route::get('cancel', [Paymentpage::class, 'cancel'])->name('cancel');
