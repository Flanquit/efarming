<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FarmerController;
use App\Http\Controllers\FarmerProductsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController;
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

Route::get('/', [WelcomeController::class, 'index'])->name('welcome');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('catalogue', [ProductController::class,'index'])->name('catalogue');
Route::get('collections', function (){
    return view('collections.index');
})->name('collections');

Route::get('carrots', function (){
    return view('collections.carrots');
})->name('carrots');

Route::get('groundnuts', function (){
    return view('collections.groundnuts');
})->name('groundnuts');


Route::get('potatoes', function (){
    return view('collections.potatoes');
})->name('potatoes');

Route::get('tomatoes', function (){
    return view('collections.tomatoes');
})->name('tomatoes');


Route::get('sweetPotatoes', function (){
    return view('collections.sweetPotatoes');
})->name('sweetPotatoes');






Route::get('/home', [HomeController::class,'index'])->name('home')->middleware('auth');

Route::group(['middleware' => 'auth'], function () {
    Route::get('farmers', [FarmerController::class,'index'])->name('farmers');
    Route::get('farmers/create', [FarmerController::class,'create'])->name('create-farmer');
    Route::post('farmers/products/create', [FarmerController::class,'create'])->name('farmer-products');
    Route::post('farmers/store', [FarmerController::class,'store'])->name('store-farmer');
    Route::post('farmers/products/store', [FarmerProductsController::class,'store'])->name('store-farmer-products');

    Route::get('categories', [CategoryController::class,'index'])->name('categories');
    Route::get('categories/create', [CategoryController::class,'create'])->name('create-category');
    Route::post('categories/store', [CategoryController::class,'store'])->name('store-category');

    Route::get('add-user', function (){
        return view('users.add_user');
    })->name('add-user');


    Route::get('icons', function () {
        return view('pages.icons');
    })->name('icons');

    Route::get('map', function () {
        return view('pages.map');
    })->name('map');

    Route::get('notifications', function () {
        return view('pages.notifications');
    })->name('notifications');

    Route::get('rtl-support', function () {
        return view('pages.language');
    })->name('language');

    Route::get('upgrade', function () {
        return view('pages.upgrade');
    })->name('upgrade');
});

Route::group(['middleware' => 'auth'], function () {
    Route::resource('user', UserController::class, ['except' => ['show']]);
    Route::get('profile', ['as' => 'profile.edit', 'uses' => [ProfileController::class ,'edit']]);
    Route::put('profile', ['as' => 'profile.update', 'uses' => [ProfileController::class ,'update']]);
    Route::put('profile/password', ['as' => 'profile.password', 'uses' => [ProfileController::class ,'password']]);
});
