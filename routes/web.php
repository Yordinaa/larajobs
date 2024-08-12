<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;
use Illuminate\Auth\Events\Logout;

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

Route::get('/listings/create', [ListingController::class, 'create'])->middleware('auth');

//store listing data

Route::post('/listings', [ListingController::class,'store'])->middleware('auth');

//show edit form
Route::get('/listings/{listing}/edit',[ListingController::class, 'edit'])->middleware('auth');

//submit the edit form to update
Route::put('/listings/{listing}',[ListingController::class, 'update'])->middleware('auth');


//Delete
Route::delete('/listings/{listing}',[ListingController::class, 'destroy'])->middleware('auth');

// Manage Listings
Route::get('/listings/manage', [ListingController::class, 'manage'])->middleware('auth');

//single listing

Route::get('/listings/{listing}', [ListingController::class,'show']);

//show register form
Route::get('/register', [UserController::class, 'create']
)->middleware('guest');

//create a new user

Route::post('/users', [UserController::class,'store']);
//logout
Route::post
('/logout', [UserController::class, 'logout'])->middleware('auth');

//login form
Route::get('/login',[UserController::class, 'login'])->name('login')->middleware('guest');
//login users

Route::post('/users/authenticate', [UserController::class,'authenticate']);