<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [CustomAuthController::class, 'home'])->name('home');
Route::get('/about', [CustomAuthController::class, 'about'])->name('about');
Route::get('/blog', [CustomAuthController::class, 'blog'])->name('blog');
Route::get('/services', [CustomAuthController::class, 'services'])->name('services');
Route::get('/contact-us', [CustomAuthController::class, 'contact'])->name('contact');
Route::get('/waef', [CustomAuthController::class, 'waef'])->name('waef');
Route::get('/gallery', [CustomAuthController::class, 'gallery'])->name('gallery');
Route::post('/contact-us/submit', [CustomAuthController::class, 'submitContactForm'])->name('contact.submit');
Route::get('/admin/login', [CustomAuthController::class, 'adminLogin'])->name('admin.login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');

Route::get('/dashboard', [CustomAuthController::class, 'dashboard'])->name('dashboard');
