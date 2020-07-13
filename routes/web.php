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
//giao dien nguoi dung
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
Route::post('/baidang','frontendController@baidang');
Route::get('/suabaidang/{id_post}/{id_user}','frontendController@suabaidang');
Route::post('/dulieusuabaidang/{id_post}','frontendController@dulieusuabaidang');
Route::get('/xoabaidang/{id_post}','frontendController@xoabaidang');

//giao dien ngoai
Route::get('/lienhe', 'frontendController@lienhe');
Route::post('/thongtinlienhe','frontendController@thongtinlienhe');
Route::get('/blog', 'frontendController@blog');
Route::get('/category_blog/{id}','frontendController@category_blog');
Route::get('/detail_blog/{id}','frontendController@detail_blog');
Route::get('/gioithieu', 'frontendController@gioithieu');
Route::get('/danhgia', 'frontendController@danhgia');
Route::post('/dulieudanhgia','frontendController@dulieudanhgia');
Route::get('/chinhsachquyenriengtu','frontendController@chinhsachquyenriengtu');
Route::get('/dieukhoandichvu','frontendController@dieukhoandichvu');


//login facebook
Route::get('auth/facebook', 'Auth\AuthController@redirectToFacebook')->name('auth.facebook');
Route::get('auth/facebook/callback', 'Auth\AuthController@handleFacebookCallback');

/*Login GG+*/
Route::get('auth/google', 'Auth\GoogleController@redirect');
Route::get('auth/google/callback', 'Auth\GoogleController@callback');


//Back_end
Auth::routes(['verify' => true]);
Route::get('/logout','Auth\LoginController@logout');
Route::group(['prefix' => 'admin','middleware'=>'checkRole'], function() {
	Route::get('home', 'admin\homeController@index')->name('home');
	Route::get('doimatkhau','admin\adminController@doimatkhau' );
	Route::post('matkhaumoi','admin\adminController@matkhaumoi');

// Category_blog
	Route::get('loaiBlog','admin\category_blog@loaiBlog');
	Route::get('themloaiBlog','admin\category_blog@themloaiBlog');
	Route::post('dulieuloai','admin\category_blog@dulieuloai');
	Route::get('xoaloai/{id}','admin\category_blog@xoaloai');
	Route::get('sualoai/{id}', 'admin\category_blog@sualoai');
	Route::post('dulieusua/{id}','admin\category_blog@dulieusua');


//Blog	
	Route::get('blog','admin\blog@blog');
	Route::get('themblog','admin\blog@themblog');

//review
	Route::get('review','admin\review@review');

//contact
	Route::get('contact','admin\contact@contact');

//users
	Route::get('dsuser', 'admin\userController@dsuser');

});






