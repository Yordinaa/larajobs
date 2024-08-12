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

Route::get('/listings/create', [ListingController::class, 'create']);

//store listing data

Route::post('/listings', [ListingController::class,'store']);

//show edit form
Route::get('/listings/{listing}/edit',[ListingController::class, 'edit']);

//submit the edit form to update
Route::put('/listings/{listing}',[ListingController::class, 'update']);


//Delete
Route::delete('/listings/{listing}',[ListingController::class, 'destroy']);

//single listing

Route::get('/listings/{listing}', [ListingController::class,'show']);

//show register formR
Route::get('/register', [UserController::class, 'create']
);

//create a new user

Route::post('/users', [UserController::class,'store']);
//logout
Route::post
('/logout', [UserController::class, 'logout']);

//login form
Route::get('/login',[UserController::class, 'login']);
//login users

Route::post('/users/authenticate', [UserController::class,'authenticate']);