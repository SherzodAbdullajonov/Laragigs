<?php

use App\Http\Controllers\ListingController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Listing;

// Common Resource Routes;
// index -Show all listing
// show - Show single listing
// create - Show form to create new listing
// store - Store new listing
// edit - Show form to edit listing
// update - Update listing
// destroy - Delete listing

// All Listings
Route::get('/', [ListingController::class, 'index']);



//Show Create Form
Route::get('/listings/create', [ListingController::class, 'create']);


//Store Listing Data
Route::post('/listings',[ListingController::class, 'store']);


// Show Edit Form
Route::get('/listings/{listing}/edit',
[ListingController::class, 'edit']);


//Update Listing
Route::put('/listings/{listing}', [ListingController::class, 'update']);

//Delete Listing
Route::delete('/listings/{listing}', [ListingController::class, 'delete']);


//Single Listing
Route::get('/listings/{listing}',[ListingController::class, 'show']);