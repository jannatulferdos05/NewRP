<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;


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

Route::get('/', [HomeController::class,'index']);

Route::get('/redirect', [HomeController::class,'redirect']);
Route::any('/robotics',[HomeController::class,'robotics']);
Route::any('/contact',[HomeController::class,'contact']);

Route::any('/blog',function (){
    return view('blog');
});
Route::any('/home',function (){
    return view('home.userpage');
});
Route::any('/about',function (){
    return view('about');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/view_category', [AdminController::class,'view_category']);

Route::post('/add_category', [AdminController::class,'add_category']);

Route::get('/delete_category/{id}', [AdminController::class,'delete_category']);

Route::get('/view_product', [AdminController::class,'view_product']);

Route::post('/add_product', [AdminController::class,'add_product']);

Route::get('/show_product', [AdminController::class,'show_product']);

Route::get('/delete_product/{id}', [AdminController::class,'delete_product']);

Route::get('/update_product/{id}', [AdminController::class,'update_product']);

Route::post('/update_product_confirm/{id}', [AdminController::class,'update_product_confirm']);

Route::get('/order', [AdminController::class,'order']);

Route::get('/return', [AdminController::class,'return']);










Route::get('/product_details/{id}', [HomeController::class,'product_details']);

Route::post('/add_cart/{id}', [HomeController::class,'add_cart']);

Route::get('/show_cart', [HomeController::class,'show_cart']);

Route::get('/remove_cart/{id}', [HomeController::class,'remove_cart']);

Route::get('/holder/{id}/{idd}', [HomeController::class,'holder'])->name('holder-route');

Route::get('/apply/{id}', [HomeController::class,'apply']);



Route::get('/donations',[\App\Http\Controllers\DonationController::class,'index'])->name("donations");
Route::get('/donations/create-new-token',[\App\Http\Controllers\DonationController::class,'createtoken'])->name("token");
Route::get('/donations/delete-token/{id}',[\App\Http\Controllers\DonationController::class,'delete'])->name("delete-token");
Route::post('/donations/donate-now',[\App\Http\Controllers\DonationController::class,'makeDonate'])->name("donate-now");
