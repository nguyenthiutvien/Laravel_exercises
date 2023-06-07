<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/



Route::middleware('auth:api')->get('/user', function (Request $request) {							
	return $request->user();							
	});							
								
	// create api							
	Route::get('/get-product',[App\Http\Controllers\APIController::class,'getProducts']);							
								
								
								
	Route::get('/get-product/{id}', [App\Http\Controllers\APIController::class,'getOneProduct']);							
	Route::post('/add-product',[App\Http\Controllers\APIController::class,'addProduct']);							
	Route::delete('/delete-product/{id}',[App\Http\Controllers\APIController::class,'deleteProduct']);							
		
    Route::put('/edit-product/{id}', [App\Http\Controllers\APIController::class, 'editProduct']);
				
								
	Route::post('/upload-image',[App\Http\Controllers\APIController::class,'uploadImage']);							
