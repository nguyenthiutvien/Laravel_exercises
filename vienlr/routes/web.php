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
Route::get('/register', function () {						
    return view('user.register');						
	});						





										

Route::post('/register',[App\Http\Controllers\UserController::class,'Register']);


Route::get('/login', function () {						
     return view('user.login');						
    });						
         
    Route::post('/login',[App\Http\Controllers\UserController::class,'Login']);



  
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

Route::get('master', [App\Http\Controllers\PageController::class,'getIndex'])->name('trang-chu');

Route::get('type/{id}', [App\Http\Controllers\PageController::class,'getLoaiSp']);

Route::get('loai-san-pham/{type}',[
    'as'=> 'loaisanpham',
    'uses'=> 'App\Http\Controllers\PageController@getLoaiSp']);


   

    Route::get('loaisanpham/{type}', [App\Http\Controllers\PageController::class,'getLoaiSp']);
    Route::get('/admin',[App\Http\Controllers\PageController::class,'getIndexAdmin']);

    Route::get('/admin-add-form',[App\Http\Controllers\PageController::class,'getAdminAdd'])->name('add-product');
    
    Route::post('/admin-add-form',[App\Http\Controllers\PageController::class,'postAdminAdd']);
    Route::get('/admin-edit-form/{id}',[App\Http\Controllers\PageController::class,'getAdminEdit']);
    Route::post('/admin-edit',[App\Http\Controllers\PageController::class,'postAdminEdit']);
    Route::post('/admin-delete/{id}',[App\Http\Controllers\PageController::class,'postAdminDelete']);
    Route::get('admin-export',[App\Http\Controllers\PageController::class,'exportAdminProduct'])->name('export');
Route::get('/chitiet_sanpham/{id}', [App\Http\Controllers\PageController::class,'getChitiet']);
Route::get('/database', function() {
    Schema::create('products', function($pr) {
        $pr->increments('id');
        $pr->string('ten', 200);
        
    });
    echo "da tao thanh cong";
});

Route::get('add-to-cart/{id}', [App\Http\Controllers\PageController::class, 'getAddToCart'])->name('themgiohang');											
Route::get('del-cart/{id}', [App\Http\Controllers\PageController::class, 'getDelItemCart'])->name('xoagiohang');											
