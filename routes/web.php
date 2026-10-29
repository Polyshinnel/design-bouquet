<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::view('/services', 'services')->name('services');
Route::view('/about', 'about')->name('about');
Route::view('/contacts', 'contacts')->name('contacts');
Route::view('/portfolio', 'portfolio')->name('portfolio');
Route::view('/portfolio/orange-group', 'projects.orange-group')->name('portfolio.orange-group');
Route::view('/portfolio/rizz-restaurant', 'projects.rizz-restaurant')->name('portfolio.rizz-restaurant');
Route::view('/portfolio/shanghai-biennale', 'projects.shanghai-biennale')->name('portfolio.shanghai-biennale');
Route::view('/portfolio/land-art', 'projects.land-art')->name('portfolio.land-art');
Route::view('/portfolio/phoenix-new-year', 'projects.phoenix-new-year')->name('portfolio.phoenix-new-year');
Route::view('/portfolio/verb-restaurant', 'projects.verb-restaurant')->name('portfolio.verb-restaurant');
Route::view('/portfolio/floral-art', 'projects.floral-art')->name('portfolio.floral-art');
Route::view('/portfolio/gum-wedding', 'projects.gum-wedding')->name('portfolio.gum-wedding');
Route::view('/privacy-policy', 'privacy-policy')->name('privacy-policy');
