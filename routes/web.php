<?php

use App\Http\Controllers\ListingController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Listing;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [ListingController::class,'index']);

Route::get('/listings/create', [ListingController::class,'create']);

Route::post('/listings', [ListingController::class,'store']);

Route::get('/listings/{listing}/edit',[ListingController::class,'edit']);

Route::put('/listings/{listing}',[ListingController::class,'update']);

Route::delete('/listings/{listing}',[ListingController::class,'destroy']);

Route::get('/find/{listing}', [ListingController::class,'show']);
