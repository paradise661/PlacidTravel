<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\ServicesController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\ContactsController;
use App\Http\Controllers\Admin\AbroadController;
use App\Http\Controllers\Admin\AbroadCoursesController;
use App\Http\Controllers\Admin\AbroadUniversityController;
use App\Http\Controllers\Admin\DownloadController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\MemberController;
use App\Http\Controllers\Admin\LocationController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\PartnerController;
use App\Http\Controllers\Admin\RecruitmentsController;
use App\Http\Controllers\Admin\ReviewController;
use App\Http\Controllers\Admin\UserRegisterController;
use App\Http\Controllers\Admin\VideoController;
use App\Http\Controllers\Admin\CounterController;
use App\Http\Controllers\Admin\PopUpController;
use App\Http\Controllers\Admin\ScholarshipController;
use App\Http\Controllers\Admin\SEnquiriesController;
use App\Http\Controllers\Admin\TestController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\SocialController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Auth::routes();
Auth::routes(['register' => false]);



Route::get('/admin/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');

/*
|--------------------------------------------------------------------------
| Backend Routes
|--------------------------------------------------------------------------
 */

Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {

    Route::get('register', [UserRegisterController::class, 'index'])->name('register');
    Route::post('register', [UserRegisterController::class, 'store'])->name('store.register');

    /*
    |--------------------------------------------------------------------------
    | Change/Update Password Route
    |--------------------------------------------------------------------------
     */

    Route::get('change-password', [AuthController::class, 'index'])->name('profile');
    Route::post('change-password', [AuthController::class, 'store'])->name('change.password');


    /*
    |--------------------------------------------------------------------------
    | Setting Route
    |--------------------------------------------------------------------------
     */

    Route::get('setting', [SettingController::class, 'edit'])->name('admin.setting.index');
    Route::post('setting', [SettingController::class, 'update'])->name('admin.setting.update');

    /*
    |--------------------------------------------------------------------------
    | Forms Route
    |--------------------------------------------------------------------------
     */

    Route::resource('contacts', ContactsController::class);
    Route::post('inquiry', [ContactsController::class, 'inquiry'])->name('inquiry');



    /*
    |--------------------------------------------------------------------------
    | Posts/Pages Routes
    |--------------------------------------------------------------------------
     */

    Route::resource('blog', NewsController::class);
    Route::resource('course', ScholarshipController::class); //for course
    Route::resource('test', TestController::class);
    Route::resource('abroad', AbroadController::class);
    Route::resource('download', DownloadController::class);
    Route::resource('faq', FaqController::class);
    Route::resource('locations', LocationController::class);
    Route::resource('members', MemberController::class);
    Route::resource('page', PageController::class);
    Route::resource('partner', PartnerController::class);
    Route::resource('review', ReviewController::class);
    Route::resource('services', ServicesController::class);
    Route::resource('video', VideoController::class);
    Route::resource('counter', CounterController::class);
    Route::resource('popup', PopUpController::class);
    Route::resource(name: "enquiry", controller: SEnquiriesController::class);
    Route::get('/enquiry/{id}/pdf', [SEnquiriesController::class, 'generatePdf'])->name('enquiry.pdf');
    Route::resource('slider', SliderController::class);
    Route::resource('social', SocialController::class);

    // abroad routes
    Route::get('abroad/university/{abroad_id}', [AbroadUniversityController::class, 'index'])->name('abroaduniversity.index');
    Route::get('abroad/university/{abroad_id}/create', [AbroadUniversityController::class, 'create'])->name('abroaduniversity.create');
    Route::get('abroad/university/{abroad_id}/{abroaduniversity}/edit', [AbroadUniversityController::class, 'edit'])->name('abroaduniversity.edit');
    Route::post('abroad/university/{abroad_id}', [AbroadUniversityController::class, 'store'])->name('abroaduniversity.store');
    Route::put('abroad/university/{abroad_id}/{abroaduniversity}', [AbroadUniversityController::class, 'update'])->name('abroaduniversity.update');
    Route::delete('abroad/university/{abroad_id}/{abroaduniversity}', [AbroadUniversityController::class, 'destroy'])->name('abroaduniversity.destroy');


    // Total Coursed Displayed Here
    // Route::get('abroad/course/{abroad_id}', [AbroadCoursesController::class, 'index'])->name('abroadcourse.index');
    // Route::get('abroad/course/{abroad_id}/create', [AbroadCoursesController::class, 'create'])->name('abroadcourse.create');
    // Route::get('abroad/course/{abroad_id}/{abroadcourse}/edit', [AbroadCoursesController::class, 'edit'])->name('abroadcourse.edit');
    // Route::post('abroad/course/{abroad_id}', [AbroadCoursesController::class, 'store'])->name('abroadcourse.store');
    // Route::put('abroad/course/{abroad_id}/{abroadcourse}', [AbroadCoursesController::class, 'update'])->name('abroadcourse.update');
    // Route::delete('abroad/course/{abroad_id}/{abroadcourse}', [AbroadCoursesController::class, 'destroy'])->name('abroadcourse.destroy');
    /*
    |--------------------------------------------------------------------------
    | Gallery Routes
    |--------------------------------------------------------------------------
     */
    Route::resource('galleries', GalleryController::class);
    Route::get('/gallery/delete-file/{id}', [GalleryController::class, 'documentDelete'])->name('document.delete');

    /*
    |--------------------------------------------------------------------------
    | Menu Routes
    |--------------------------------------------------------------------------
     */
    Route::get('menus/{id?}', [MenuController::class, 'index'])->name('admin.menu.index');
    Route::post('create-menu', [MenuController::class, 'store'])->name('admin.menu.create');

    Route::get('add-post-to-menu', [MenuController::class, 'addPostToMenu'])->name('admin.menu.addpost');
    Route::get('add-page-to-menu', [MenuController::class, 'addPageToMenu'])->name('admin.menu.addpage');
    Route::get('add-service-to-menu', [MenuController::class, 'addServiceToMenu'])->name('admin.menu.addservice');
    Route::get('add-abroads-to-menu', [MenuController::class, 'addabroadsToMenu'])->name('admin.menu.addabroads');
    Route::get('add-custom-link', [MenuController::class, 'addCustomLink'])->name('admin.menu.addcustom');

    Route::get('update-menu', [MenuController::class, 'updateMenu'])->name('admin.menu.updatemenu');
    Route::post('update-menuitem/{id}', [MenuController::class, 'updateMenuItem'])->name('admin.menu.updateitem');
    Route::get('delete-menuitem/{id}/{key}/{in?}', [MenuController::class, 'deleteMenuItem'])->name('admin.menu.deleteitem');
    Route::get('delete-menu/{id}', [MenuController::class, 'destroy'])->name('admin.menu.deletemenu');
});
