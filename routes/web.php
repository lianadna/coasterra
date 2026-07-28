<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PagesController;

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/index2', 'index2')->name('index2');
    Route::get('/index3', 'index3')->name('index3');
    Route::get('/index4', 'index4')->name('index4');
    Route::get('/index5', 'index5')->name('index5');
    Route::get('/about', 'about')->name('about');
    Route::get('/contact', 'contact')->name('contact');
    Route::get('/services', 'services')->name('services');
});

Route::controller(BlogController::class)->group(function () {
    Route::get('/blog-details', 'blogDetails')->name('blogDetails');
    Route::get('/blog-grid', 'blogGrid')->name('blogGrid');
    Route::get('/blog-standard', 'blogStandard')->name('blogStandard');
});

Route::controller(PagesController::class)->group(function () {
    Route::get('/be-volunteer', 'beVolunteer')->name('beVolunteer');
    Route::get('/camping', 'camping')->name('camping');
    Route::get('/camping-details', 'campingDetails')->name('campingDetails');
    Route::get('/camping-donation', 'campingDonation')->name('campingDonation');
    Route::get('/donations', 'donations')->name('donations');
    Route::get('/project', 'project')->name('project');
    Route::get('/project-details', 'projectDetails')->name('projectDetails');
    Route::get('/services-details', 'servicesDetails')->name('servicesDetails');
    Route::get('/volunteer', 'volunteer')->name('volunteer');
    Route::get('/volunteer-details', 'volunteerDetails')->name('volunteerDetails');
});
