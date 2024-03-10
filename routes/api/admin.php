<?php



use App\Http\Controllers\RoomCategoryController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CountryController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\TransportationController;
use App\Http\Controllers\TourTitleController;
use App\Http\Controllers\TransportationPriceController;




//Country (CRUD)
Route::apiResource('country', CountryController::class);


//City (CRUD)
Route::prefix('city')
    ->controller(CityController::class)
    ->group(function () {
        Route::get('/{id}', 'index_by_country');
    });
Route::apiResource('city', CityController::class);

// Transportation Types
Route::apiResource('transportation-types', TransportationController::class);


// Transportation Prices
Route::apiResource('transportation-prices', TransportationPriceController::class);

// Rooms Category 
Route::apiResource('rooms-category', RoomCategoryController::class);

// Tout Titles
Route::apiResource('tour-titles', TourTitleController::class);