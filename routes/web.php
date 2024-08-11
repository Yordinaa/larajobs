<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListingController;

//common resource routes
//index
//show
//create - show a form to create a new listing
//store - store new listing
//edit - show a form to edit a listing
//update -update a listing
//destroy -delete listing

//All listings
Route::get('/', [ListingController::class, 'index']);


//show creat form

Route::get('/listings/create', [ListingController::class, 'create']);

//store listing data

Route::post('/listings', [ListingController::class,'store']);
//single listing

Route::get('/listings/{listing}', [ListingController::class,'show']);