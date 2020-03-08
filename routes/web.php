<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/products', function () {
   return view('allproducts');
});
Route::get('/product/{id}', function () {
   return view('singleproduct');
});
Auth::routes();



Route::prefix("/AmecAdmin")->middleware(['auth','admin'])->group(function(){
   Route::get('/','AdminHomeController@index'); 
   Route::resource('profile','ProfileController');
   Route::resource('achievement','AchievementController');
   Route::resource('category','CategoryController'); 
   Route::resource('order','OrderController');
   Route::resource('payment','PaymentController');
   Route::resource('products','ProductController');
   Route::resource('review','ReviewController');
   Route::resource('post','PostController');
});

Route::get('/home', 'HomeController@index')->name('home');
Route::prefix("/user")->middleware(['auth'])->group(function(){
 Route::resource('profile','UserProfileController');
    Route::resource('whishlist','WhishlistController');
    Route::resource('userorder','UserorderController'); 
    
 });