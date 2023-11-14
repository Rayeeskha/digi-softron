<?php

use Illuminate\Support\Facades\Route;
use  \App\Http\Controllers\Frontend\FrontendController;


Route::get('/', FrontendController::class)->name('home');

Route::match(['POST','GET'],'{page}', [FrontendController::class, 'page'])->name('page')->where('page',"about-us|our-services|contact-us|web-development|application-development-company|digital-marketing-company");


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
