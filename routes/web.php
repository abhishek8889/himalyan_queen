<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Front\FrontController;
use App\Http\Controllers\Front\ReviewController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\DestinationController;
use App\Http\Controllers\Admin\PackageController;
use App\Http\Controllers\Admin\AccountSettingController;
use App\Http\Controllers\Authentication\AuthenticationController;
use App\Http\Controllers\Admin\SiteSettingController;

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

Route::get('/',[FrontController::class,'home'])->name('user.home');
Route::get('/about',[FrontController::class,'about'])->name('user.about');
Route::get('/service',[FrontController::class,'service'])->name('user.service');
Route::get('/packages',[FrontController::class,'tourPackages'])->name('user.packages');
Route::get('/package/detail/{slug}',[FrontController::class,'packageDetail'])->name('package.detail');

Route::get('/contact',[FrontController::class,'contact'])->name('user.contact');
Route::post('/sendMail',[FrontController::class,'sendMail']);
Route::get('/destination/{slug}',[FrontController::class,'destinationDetail']);
Route::get('/review',[ReviewController::class,'review'])->name('review');
Route::post('/add-review',[ReviewController::class,'submitReview'])->name('add.review');


// :::::::::::::::::::: Authentication ::::::::::::::::::::::::
Route::get('/admin-login',[AuthenticationController::class,'loginView'])->name('admin.login');
Route::post('/admin-login',[AuthenticationController::class,'loginProcess'])->name('admin.login');
Route::get('logout',[AuthenticationController::class,'logout']);


// :::::::::::::::::::: Admin Dashboard routes ::::::::::::::::::::

Route::prefix('admin')->middleware(['checkAdmin'])->group(function () {
    // Routes defined here will have the "admin" prefix
    Route::get('dashboard', [AdminDashboardController::Class , 'index'])->name('admin.dashboard');

    // package Route
    Route::get('package/list', [PackageController::Class , 'index'])->name('package.list');
    Route::get('package/add', [PackageController::Class , 'addPackage'])->name('package.add');
    Route::post('package/add', [PackageController::Class , 'addPackageProcess'])->name('package.add');
    Route::get('package/edit/{id}', [PackageController::Class , 'editPackage'])->name('package.edit');
    // Route::post('package/edit', [PackageController::Class , 'editPackageProcess'])->name('package.editprocess');
    Route::get('package/delete/{id}', [PackageController::Class , 'deletePackage'])->name('package.delete');
    
    
    // Destination routes
    Route::get('destination/list', [DestinationController::Class , 'index'])->name('destination.list');
    Route::get('destination/add', [DestinationController::Class , 'addDestination'])->name('destination.add');
    Route::get('destination/edit/{id}', [DestinationController::Class , 'editDestination'])->name('destination.edit');
    Route::post('destination/editproc', [DestinationController::Class , 'editDestinationProc'])->name('destination.editprocess');
    
    Route::post('destination/add', [DestinationController::Class , 'addDestinationProcess'])->name('destination.add');
    Route::get('destination/delete/{id}', [DestinationController::Class , 'deleteDestination'])->name('destination.delete');
    
    // Account Setting 
    Route::get('account/setting',[AccountSettingController::class,'setting'])->name('account.setting');
    Route::post('change-password',[AccountSettingController::class,'changePass'])->name('change.password');
    Route::get('site/meta',[SiteSettingController::class,'siteMeta'])->name('site.meta');
    Route::post('update/sitemeta',[SiteSettingController::class,'updateSiteMeta'])->name('update.site.meta');
});

// Authenticate