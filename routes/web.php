<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Front\FrontController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\DestinationController;
use App\Http\Controllers\Admin\PackageController;
use App\Http\Controllers\Authentication\AuthenticationController;
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
Route::get('/contact',[FrontController::class,'contact'])->name('user.contact');
Route::post('/sendMail',[FrontController::class,'sendMail']);

// :::::::::::::::::::: Authentication ::::::::::::::::::::::::
Route::get('/admin-login',[AuthenticationController::class,'loginView'])->name('admin.login');
Route::post('/admin-login',[AuthenticationController::class,'loginProcess'])->name('admin.login');
Route::get('logout',[AuthenticationController::class,'logout']);


// :::::::::::::::::::: Admin Dashboard routes ::::::::::::::::::::

Route::prefix('admin')->middleware(['checkAdmin'])->group(function () {
    // Routes defined here will have the "admin" prefix
    Route::get('dashboard', [AdminDashboardController::Class , 'index'])->name('admin.dashboard');
    Route::get('destination/list', [DestinationController::Class , 'index'])->name('destination.list');
    Route::get('destination/add', [DestinationController::Class , 'addDestination'])->name('destination.add');
    Route::post('destination/add', [DestinationController::Class , 'addDestinationProcess'])->name('destination.add');
    
    // Package routes
    Route::get('package/list', [PackageController::Class , 'index'])->name('package.list');
    Route::get('package/add', [PackageController::Class , 'addPackage'])->name('package.add');
    Route::post('package/add', [PackageController::Class , 'addPackageProcess'])->name('package.add');

});

// Authenticate