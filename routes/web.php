<?php

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;
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

Route::get('/register',[UserController::class,'create']);

Route::post('/users', [UserController::class,'store']);

Route::post('/logout', [UserController::class,'logout']);

Route::get('/login',[UserController::class,'login']);

Route::post('/users/authenticate', [UserController::class,'authenticate']);



