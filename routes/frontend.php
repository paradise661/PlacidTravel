<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\FrontendController;

Route::get('/', [FrontendController::class, 'home'])->name('home');
Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');
Route::post('/contact', [FrontendController::class, 'contactStore'])->name('contact.store');
Route::get('/blogs', [FrontendController::class, 'blog'])->name('blogs');
Route::get('/blogs/{slug}', [FrontendController::class, 'showBlog'])->name('show.blogs');
// Route::get('/country', [FrontendController::class, 'country'])->name('country');
// Route::get('/country/{slug}', [FrontendController::class, 'showCountry'])->name('show.country');
// Route::get('/course', [FrontendController::class, 'course'])->name('course');
// Route::get('/course/{slug}', [FrontendController::class, 'showCourse'])->name('show.course');
Route::get('/services', [FrontendController::class, 'services'])->name('services');
Route::get('/services/{slug}', [FrontendController::class, 'showService'])->name('show.services');
// Route::get('/testimonial', [FrontendController::class, 'testimonial'])->name('testimonial');
// Route::get('/teams', [FrontendController::class, 'teams'])->name('teams');
Route::get('/about', [FrontendController::class, 'about'])->name('about');
// Route::get('/faq', [FrontendController::class, 'faq'])->name('faq');
// Route::get('/pages/{slug}', [FrontendController::class, 'page'])->name('pages');
// Route::get('/student-registration', [FrontendController::class, 'register'])->name('frontend.register');
// Route::post('/student-registration', [FrontendController::class, 'registerstudent'])->name('frontend.register.submit');
