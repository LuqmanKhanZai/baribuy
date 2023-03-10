<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\Admin\CityController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\StateController;
use App\Http\Controllers\Admin\CountryController;
use App\Http\Controllers\Frontend\PageController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PropertyController;
use App\Http\Controllers\Customer\ProfileController;
use App\Http\Controllers\Frontend\LandingController;
use App\Http\Controllers\Frontend\ListingController;
use App\Http\Controllers\Customer\UserDocumentController;

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

Route::get('properties', function () {
    return view('welcome');
})->name('properties');

Route::get('/', [LandingController::class,'index']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('page')->as('page.')->controller(PageController::class)->group(function() {
    Route:: get('about', 'about')->name('about');
    Route:: get('learn', 'learn')->name('learn');
    Route:: get('contact-us', 'contactUs')->name('contact-us');
    Route:: get('signup', 'signup')->name('signup');
    Route:: post('store-user', 'storeUser')->name('store-user');
    Route:: get('basic-info', 'basicInfo')->name('basic-info');
    Route:: post('storeBasicInfo', 'storeBasicInfo')->name('storeBasicInfo');
    Route:: get('registerCustomerInfo', 'register')->name('registerCustomerInfo');
    Route:: get('emailverify', 'emailverify')->name('emailverify');
});

Route::post('user_register',   [CustomerController::class,'user_register'] )->name('user_register');

Route::post('/register/customer',   [CustomerController::class,'registerCustomer'] )->name('customer.register');
Route::get('/validate/customer/email',  [CustomerController::class,'validateEmail'] )->name('customer.validate.email');

Route::get('/listings',  [ListingController::class,'index'])->name('listings');

// Customer
Route::prefix('profile')->as('profile.')->controller(ProfileController::class)->group(function() {
    Route:: get('show', 'show')->name('show');
    Route:: get('edit', 'edit')->name('edit');
    Route:: post('update', 'update')->name('update');
    Route:: post('upload_photo', 'upload_photo')->name('upload_photo');
});

Route::prefix('document')->as('document.')->controller(UserDocumentController::class)->group(function() {
    Route:: post('upload', 'upload')->name('upload');
    Route:: get('destroy/{id}', 'destroy')->name('destroy');
});
// Customer












// Admin Route New Template Start
Route::prefix('category')->as('category.')->controller(CategoryController::class)
    ->group(function() {
    Route::get('index', 'index')->name('index');
    Route::post('store', 'store')->name('store');
    Route::post('status', 'status')->name('status');
    Route::post('modal', 'modal')->name('modal');
    Route::post('update', 'update')->name('update');
    Route::get('delete/{id}', 'destroy')->name('delete');
});

Route::prefix('country')->as('country.')->controller(CountryController::class)
    ->group(function() {
    Route::get('index', 'index')->name('index');
    Route::post('store', 'store')->name('store');
    Route::post('status', 'status')->name('status');
    Route::post('modal', 'modal')->name('modal');
    Route::post('update', 'update')->name('update');
    Route::get('delete/{id}', 'destroy')->name('delete');
});

Route::prefix('state')->as('state.')->controller(StateController::class)
    ->group(function() {
    Route::get('index', 'index')->name('index');
    Route::post('store', 'store')->name('store');
    Route::post('status', 'status')->name('status');
    Route::post('modal', 'modal')->name('modal');
    Route::post('update', 'update')->name('update');
    Route::get('delete/{id}', 'destroy')->name('delete');
});

Route::prefix('city')->as('city.')->controller(CityController::class)
    ->group(function() {
    Route::get('index', 'index')->name('index');
    Route::post('store', 'store')->name('store');
    Route::post('status', 'status')->name('status');
    Route::post('modal', 'modal')->name('modal');
    Route::post('update', 'update')->name('update');
    Route::get('delete/{id}', 'destroy')->name('delete');
});

Route::prefix('user')->as('user.')->controller(UserController::class)->group(function() {
    Route:: get('customerlist', 'customerlist')->name('customerlist');
    Route:: get('index', 'index')->name('index');
    Route:: post('store', 'store')->name('store');
    Route:: post('status', 'status')->name('status');
    Route:: post('modal', 'modal')->name('modal');
    Route:: post('update', 'update')->name('update');
});

Route::prefix('property')->as('property.')->controller(PropertyController::class)->group(function() {
    Route:: get('index', 'index')->name('index');
    Route:: get('create', 'create')->name('create');
    Route:: post('store', 'store')->name('store');
    Route::get('edit/{id}', 'edit')->name('edit');
    Route:: post('status', 'status')->name('status');
    Route:: post('modal', 'modal')->name('modal');
    Route:: post('update/{id}', 'update')->name('update');
    Route:: post('upload_images', 'upload_images')->name('upload_images');
    Route::get('delete/{id}', 'destroy')->name('delete');
});
// Admin Route New Template Ended


// TEsting
Route::post('/profile',  [LandingController::class,'index'])->name('user.profile.update');
// Route::post('/upload',  [LandingController::class,'index'])->name('user.profile');
Route::post('/add',  [LandingController::class,'index'])->name('user.add.fund');
