<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\FooterController;
use App\Http\Controllers\Admin\GalleryCategoryController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\ImageController;
use App\Http\Controllers\Admin\LogoController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\ReservationController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\TopbarConteroller;
use App\Http\Controllers\Admin\UsersignupColtroller;
use App\Http\Controllers\Admin\VideoController;
use App\Http\Controllers\Admin\WelcomeController;
use App\Http\Controllers\FrontedController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Models\GalleryCategory;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index'])->name('dashboard');
Route::post('/reservation', [HomeController::class, 'store'])->name('reservation.store');
Route::post('/usersignup', [HomeController::class, 'signup'])->name('usersignup.signup');

Route::group(['prefix'=>'admin', 'middleware'=>'auth'], function (){
    Route::get('dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::resource('logo', LogoController::class);
    Route::resource('topbar', TopbarConteroller::class);
    Route::resource('gallery-category', GalleryCategoryController::class);
    Route::resource('gallery', GalleryController::class);
    Route::resource('slider', SliderController::class);
    Route::resource('welcome', WelcomeController::class);
    Route::resource('about', AboutController::class);
    Route::resource('menu', MenuController::class);
    Route::resource('event', EventController::class);
    Route::resource('blog', BlogController::class);
    Route::resource('video', VideoController::class);
    Route::resource('footer', FooterController::class);
    Route::resource('contact', ContactController::class);
    Route::resource('image', ImageController::class);

    Route::get('about-page', [FrontedController::class, 'index'])->name('about_page.index');
    Route::get('menu-page', [FrontedController::class, 'menu'])->name('menu_page.index');
    Route::get('reservation-page', [FrontedController::class, 'reservation'])->name('reservation_page.index');
    Route::get('gallery-page', [FrontedController::class, 'gallery'])->name('gallery_page.index');
    Route::get('blog-details-page', [FrontedController::class, 'blog_details'])->name('blog_details_page.index');
    Route::get('blog-page', [FrontedController::class, 'blog'])->name('blog_page.index');
    Route::get('contact-page', [FrontedController::class, 'contact'])->name('contact_page.index');

    Route::get('reservation', [ReservationController::class, 'index'])->name('reservation.index');
    Route::post('/reservation/delete/{id}', [ReservationController::class, 'destroy'])->name('reservation.destroy');
    Route::post('/reservation/status/{id}', [ReservationController::class, 'status'])->name('reservation.status');

    Route::get('usersignup', [UsersignupColtroller::class, 'index'])->name('usersignup.index');
    Route::post('/usersignup/delete/{id}', [UsersignupColtroller::class, 'destroy'])->name('usersignup.destroy');
    Route::post('/usersignup/status/{id}', [UsersignupColtroller::class, 'status'])->name('usersignup.status');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
