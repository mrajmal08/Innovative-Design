<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [App\Http\Controllers\WelcomeController::class, 'index'])->name('welcome');
Route::get('designs/{id}', [App\Http\Controllers\WelcomeController::class, 'designs'])->name('designs');
Route::get('designers', [App\Http\Controllers\WelcomeController::class, 'designers'])->name('designers');
Route::get('add_to_wishlist/{id}', [App\Http\Controllers\WelcomeController::class, 'addToWishlist'])->name('add_to_wishlist');
Route::get('wishlist', [App\Http\Controllers\WelcomeController::class, 'wishlist'])->name('wishlist');
Route::get('designer/detail/{id}', [App\Http\Controllers\WelcomeController::class, 'designerDetail'])->name('designer.detail');
Route::get('contact_us', [App\Http\Controllers\WelcomeController::class, 'contactUs'])->name('contact_us');
Route::post('contact_us/store', [App\Http\Controllers\WelcomeController::class, 'contactStore'])->name('contact.store');
Route::get('faq', [App\Http\Controllers\WelcomeController::class, 'faq'])->name('faq');
Route::get('about_us', [App\Http\Controllers\WelcomeController::class, 'aboutUs'])->name('about_us');
Route::get('privacy_policy', [App\Http\Controllers\WelcomeController::class, 'privacyPolicy'])->name('privacy_policy');
Route::get('term_condition', [App\Http\Controllers\WelcomeController::class, 'termCondition'])->name('term_condition');
Route::get('trends', [App\Http\Controllers\WelcomeController::class, 'trends'])->name('trends');
Route::get('videos', [App\Http\Controllers\WelcomeController::class, 'videos'])->name('videos');
Route::get('room_maker', [App\Http\Controllers\WelcomeController::class, 'roomMaker'])->name('room_maker');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Users Routes
Route::get('/users', [App\Http\Controllers\UserController::class, 'index'])->name('users.index');
Route::get('/users/create', [App\Http\Controllers\UserController::class, 'create'])->name('users.create');
Route::post('/users/store', [App\Http\Controllers\UserController::class, 'store'])->name('users.store');
Route::get('/users/edit/{id}', [App\Http\Controllers\UserController::class, 'edit'])->name('users.edit');
Route::post('/users/update/{id}', [App\Http\Controllers\UserController::class, 'update'])->name('users.update');
Route::get('/users/delete/{id}', [App\Http\Controllers\UserController::class, 'delete'])->name('users.delete');

// Visitors Routes
Route::get('/visitor', [App\Http\Controllers\VisitorController::class, 'index'])->name('visitor.index');
Route::get('/visitor/create', [App\Http\Controllers\VisitorController::class, 'create'])->name('visitor.create');
Route::post('/visitor/store', [App\Http\Controllers\VisitorController::class, 'store'])->name('visitor.store');
Route::get('/visitor/edit/{id}', [App\Http\Controllers\VisitorController::class, 'edit'])->name('visitor.edit');
Route::post('/visitor/update/{id}', [App\Http\Controllers\VisitorController::class, 'update'])->name('visitor.update');
Route::get('/visitor/delete/{id}', [App\Http\Controllers\VisitorController::class, 'delete'])->name('visitor.delete');

// Design Routes
Route::get('/design', [App\Http\Controllers\DesignController::class, 'index'])->name('design.index');
Route::get('/design/create', [App\Http\Controllers\DesignController::class, 'create'])->name('design.create');
Route::post('/design/store', [App\Http\Controllers\DesignController::class, 'store'])->name('design.store');
Route::get('/design/edit/{id}', [App\Http\Controllers\DesignController::class, 'edit'])->name('design.edit');
Route::post('/design/update/{id}', [App\Http\Controllers\DesignController::class, 'update'])->name('design.update');
Route::get('/design/delete/{id}', [App\Http\Controllers\DesignController::class, 'delete'])->name('design.delete');
