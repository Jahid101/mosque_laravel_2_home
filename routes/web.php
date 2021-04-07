<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Backend\AboutController;
use App\Http\Controllers\Backend\DonateController;
use App\Http\Controllers\Backend\HomeController;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\AnnouncementController;
use App\Http\Controllers\Backend\EventController;
use App\Http\Controllers\Backend\FoodController;
use App\Http\Controllers\Backend\FundController;
use App\Http\Controllers\Backend\TablighiController;
use App\Http\Controllers\Backend\MaktabController;
use App\Http\Controllers\Backend\MahfilController;
use App\Http\Controllers\Backend\CommiteeMemberController;


// Route::get('/home', function () {
//     return view('backend.home');
// });


Route::get('/',[HomeController::class,'home'])->name('home');

Route::get('/home',[HomeController::class,'home'])->name('home');

Route::get('/about',[AboutController::class,'about'])->name('about');

Route::get('/donate',[DonateController::class,'donate'])->name('donate');

Route::get('/announcement',[AnnouncementController::class,'announcement'])->name('announcement');

Route::get('/event',[EventController::class,'event'])->name('event');

Route::get('/food',[FoodController::class,'food'])->name('food');

Route::get('/fund',[FundController::class,'fund'])->name('fund');

Route::get('/admin',[AdminController::class,'admin'])->name('admin');

Route::get('/tablighi',[TablighiController::class,'tablighi'])->name('tablighi');

Route::get('/maktab',[MaktabController::class,'maktab'])->name('maktab');

Route::get('/mahfil',[MahfilController::class,'mahfil'])->name('mahfil');

Route::post('/donation',[DonateController::class,'list'])->name('donate.list');

Route::get('/commiteeMember',[CommiteeMemberController::class,'commiteeMember'])->name('commiteeMember');
