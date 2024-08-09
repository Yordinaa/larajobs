<?php

use Illuminate\Support\Facades\Route;
use App\Models\listing;
//All listings
Route::get('/', function () {
   return view('listings',
   [
    'heading' => 'latest listings',
    'listings' => Listing::all()
   ]);
});
Route::get('/listings/{id}', function($id)
{
return view('listing',[
        'listing' => Listing::find($id)
]);
});
Route::get('/test-db', function () {
    $listings = Listing::all();
    return $listings;
});