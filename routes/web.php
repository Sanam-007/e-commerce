<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SellerController;
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

Route::get('/', function () {
    return view('login');
});

Route::get('/s', function () {
    return view('signup');
});


Route::get('/test', function () {
    return view('admin.layouts.default');
});

Route::get('/landing', function () {
    return view('landing.pages.landing');
});



Route::get('/new', function () {
    return view('landing.pages.practice');
});

// Route::get('admin-create-seller', function () {
//     return view('admin.pages.seller');
// });


Route::get('/login',[AuthController::class,'login']);

Route::post('/loginstore',[AuthController::class,'loginstore']);
Route::post('/signupstore',[AuthController::class,'signupstore']);

Route::get('/landing',[AuthController::class,'landing']);
Route::get('/zoom/{id}',[AuthController::class,'View']);


 Route::middleware(['IsLoggedIn','IsAdmin'])->group(function(){

      Route::get('/admin/profile',[AdminController::class,'admindashboard']);
      Route::get('/create-seller',[AdminController::class,'createSeller']);
      Route::get('/insert-seller',[AdminController::class,'insertSeller']);

      Route::get('/create-category',[AdminController::class,'createCategory']);
      Route::get('/insert-category',[AdminController::class,'insertCategory']);
      Route::get('/table-seller',[AdminController::class,'showSeller']);
      


      Route::get('/edit-seller/{id}',[AdminController::class,'edSeller']);
    Route::post('/update-seller/{id}',[AdminController::class,'updateSeller']);
    Route::get('/delete-seller/{id}',[AdminController::class,'deleteSeller']);

    // Route::get('/edit-category/{id}',[AdminController::class,'edCategory']);
    // Route::post('/update-category/{id}',[AdminController::class,'updateCategory']);
    // Route::get('/delete-category/{id}',[AdminController::class,'deleteCategory']);




     });





















    Route::middleware(['IsLoggedIn','IsCustomer'])->group(function(){
        Route::get('/customer',[CustomerController::class,'customerdashboard']);

    });

    Route::middleware(['IsLoggedIn','IsSeller'])->group(function(){
        Route::get('/seller',[SellerController::class,'sellerdashboard']);
        Route::get('/product-post',[SellerController::class,'createProduct']);
      Route::post('/insert-product',[SellerController::class,'insertProduct']);
      

      Route::get('/seller/product-table',[SellerController::class,'showProduct']);
    });
    
Route::get('/logout',[AuthController::class,'logout']);

