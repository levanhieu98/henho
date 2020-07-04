<?php

use Illuminate\Support\Facades\Route;

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


//front_end
Route::get('/','frontendController@index');
Route::get('/trangchu', 'frontendController@trangchu')->middleware(['verified','checkadmin'])->name('personal');
Route::get('/canhan', 'frontendController@canhan')->middleware('checkadmin');
Route::get('/banbe', 'frontendController@banbe')->middleware('checkadmin');
Route::get('/thuvienanh', 'frontendController@thuvienanh')->middleware('checkadmin');
Route::get('/status', 'frontendController@status')->middleware('checkadmin');
Route::get('/caidat', 'frontendController@caidat')->middleware('checkadmin');
Route::get('/doimatkhau','frontendController@doimk')->middleware('checkadmin');
Route::post('/capnhat','frontendController@capnhat');
Route::get('/messages','messagesController@messages')->middleware('checkadmin');
Route::get('/contentmassage/{id}','messagesController@contentmassage')->middleware('checkadmin');
Route::post('/ketquatimkiem', 'messagesController@ketquatimkiem')->name('search');
Route::post('/sentmessages','messagesController@sendmassges');
Route::post('/doianhdaidien','frontendController@doianhdaidien');
Route::get('/suathongtin', 'frontendController@suathongtin');
Route::post('/dulieusua', 'frontendController@dulieusua');
Route::get('/lienhe', 'frontendController@lienhe');
Route::post('/thongtinlienhe','frontendController@thongtinlienhe');
Route::get('/blog', 'frontendController@blog');
Route::get('/category_blog/{id}','frontendController@category_blog');
Route::get('/detail_blog/{id}','frontendController@detail_blog');
Route::get('/gioithieu', 'frontendController@gioithieu');
Route::get('/danhgia', 'frontendController@danhgia');
Route::post('/dulieudanhgia','frontendController@dulieudanhgia');

//login facebook
Route::get('auth/facebook', 'Auth\AuthController@redirectToFacebook')->name('auth.facebook');
Route::get('auth/facebook/callback', 'Auth\AuthController@handleFacebookCallback');





//Back_end
Auth::routes(['verify' => true]);
Route::get('/logout','Auth\LoginController@logout');
Route::group(['prefix' => 'admin','middleware'=>'checkRole'], function() {
	Route::get('home', 'admin\homeController@index')->name('home');
	Route::get('loaiBlog','admin\category_blog@loaiBlog');
	Route::get('themloaiBlog','admin\category_blog@themloaiBlog');
	Route::get('blog','admin\blog@blog');
	Route::get('themblog','admin\blog@themblog');


	Route::get('review','admin\review@review');
	Route::get('contact','admin\contact@contact');
	Route::get('dsuser', 'admin\userController@dsuser');

});






