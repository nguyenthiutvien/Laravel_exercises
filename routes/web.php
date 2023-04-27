<?php

use Illuminate\Support\Facades\Route;

// use App\Http\Controllers\CalculatorController;
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


// Route::get('/calculate', function () {
//     return view('calculate');
// });


Route::get('/tong',[App\Http\Controllers\CongController::class,'tinhtong']);
Route::post('/tong',[App\Http\Controllers\CongController::class,'tinhtong']);

Route::get('/area',[App\Http\Controllers\AreaofshapeController::class,'computeArea']);
Route::post('/area',[App\Http\Controllers\AreaofshapeController::class,'computeArea']);

Route::get('/covid19', [App\Http\Controllers\Covid19Controller::class, 'show']);

Route::post('/covid19', [App\Http\Controllers\Covid19Controller::class, 'show']);





Route::get('/for', [App\Http\Controllers\SignupController::class,'index']);
Route::post('/form', [App\Http\Controllers\SignupController::class,'displayinfor']);

;

// file routes/web.php


// file app/Http/Controllers/RoomController.php

// file routes/web.php


// file app/Http/Controllers/RoomController.php

Route::get('/create', [App\Http\Controllers\RoomController::class,'create']);
Route::post('/create', [App\Http\Controllers\RoomController::class,'store'])->name('rooms.store');


// 

Route::get('/master', [App\Http\Controllers\PageController::class,'getIndex']);