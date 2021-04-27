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




Route::get('/',[HomeController::class,'home'])->name('home');

Route::get('/home',[HomeController::class,'home'])->name('home');

Route::get('/about',[AboutController::class,'about'])->name('about');


Route::get('/donate',[DonateController::class,'donate'])->name('donate');
Route::post('/donation',[DonateController::class,'list'])->name('donate.list');


Route::get('/announcement',[AnnouncementController::class,'announcement'])->name('announcement');
Route::post('/createAnnouncement',[AnnouncementController::class,'announcementList'])->name('create.announcement');
Route::get('/announcement/update/{id}', [AnnouncementController::class, 'announcementUpdate']) -> name('update.announcement');
Route::put('/announcement/SaveUpdate/{id}', [AnnouncementController::class, 'announcementSaveUpdate']) -> name('saveUpdate.announcement');
Route::get('/announcement/delete/{id}', [AnnouncementController::class, 'announcementDelete']) -> name('delete.announcement');



Route::get('/event',[EventController::class,'event'])->name('event');
Route::post('/createEvent',[EventController::class,'eventList'])->name('create.event');
Route::get('/event/update/{id}', [EventController::class, 'eventUpdate']) -> name('update.event');
Route::put('/event/saveUpdate/{id}', [EventController::class, 'eventSaveUpdate']) -> name('saveUpdate.event');
Route::get('/event/delete/{id}', [EventController::class, 'eventDelete']) -> name('delete.event');



Route::get('/mahfil',[MahfilController::class,'mahfil'])->name('mahfil');
Route::post('/createMahfil',[MahfilController::class,'mahfilList'])->name('create.mahfil');
Route::put('/mahfil/saveUpdate/{id}', [MahfilController::class, 'mahfilSaveUpdate']) -> name('saveUpdate.mahfil');
Route::get('/mahfil/update/{id}', [MahfilController::class, 'mahfilUpdate']) -> name('update.mahfil');
Route::get('/mahfil/delete/{id}', [MahfilController::class, 'mahfilDelete']) -> name('delete.mahfil');



Route::get('/food',[FoodController::class,'food'])->name('food');

Route::get('/fund',[FundController::class,'fund'])->name('fund');

Route::get('/admin',[AdminController::class,'admin'])->name('admin');

Route::get('/tablighi',[TablighiController::class,'tablighi'])->name('tablighi');

Route::get('/maktab',[MaktabController::class,'maktab'])->name('maktab');




Route::get('/commiteeMember',[CommiteeMemberController::class,'commiteeMember'])->name('commiteeMember');
