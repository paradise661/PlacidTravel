<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//blogs
Route::get('blog', [ApiController::class, 'blogIndex'])->name('blogs');
Route::get('blog/{slug}', [ApiController::class, 'singleBlog'])->name('blog.single');

//partners
Route::get('partner', [ApiController::class, 'partnerIndex'])->name('partners');

//ourteams
Route::get('teams', [ApiController::class, 'ourTeamIndex'])->name('ourteams');

//faqs
Route::get('faq', [ApiController::class, 'faqIndex'])->name('faqs');

//inquiry
Route::post('inquiries', [ApiController::class, 'inquiryStore'])->name('inquiries');

//pages
Route::get('page', [ApiController::class, 'pageIndex'])->name('pages');
Route::get('page/{slug}', [ApiController::class, 'singlePage'])->name('page.single');


//services
Route::get('service', [ApiController::class, 'serviceIndex'])->name('services');
Route::get('service/{slug}', [ApiController::class, 'singleService'])->name('service.single');

//abroadss
Route::get('abroads', [ApiController::class, 'abroadsIndex'])->name('abroadss');
Route::get('abroads/{slug}', [ApiController::class, 'singleabroads'])->name('abroads.single');


//vacacies
Route::get('vacancy', [ApiController::class, 'vacancyIndex'])->name('vacacies');
Route::get('vacancy/{slug}', [ApiController::class, 'singleVacancy'])->name('service.single');

//settings
Route::get('settings', [ApiController::class, 'settings'])->name('settings');

//downloads
Route::get('downloads', [ApiController::class, 'downloads'])->name('downloads');

//galleries
Route::get('galleries', [ApiController::class, 'gallery'])->name('gallery');

//reviews
Route::get('reviews', [ApiController::class, 'review'])->name('review');

//videos
Route::get('videos', [ApiController::class, 'video'])->name('video');

//menus
Route::get('menu/{id}', [ApiController::class, 'menu'])->name('menu');
