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
Route::get('/','frontendController@index')->middleware(['guest'])->name('giaodien');
Route::get('/trangchu', 'frontendController@trangchu')->middleware(['verified','checkadmin','checkstatus'])->name('personal');
Route::group(['middleware' => ['checkstatus','checkadmin']], function() {
	Route::get('/canhan', 'frontendController@canhan');
	Route::get('/banbe', 'frontendController@banbe');
	Route::get('/thuvienanh', 'frontendController@thuvienanh');
	Route::get('/status', 'frontendController@status');
	Route::get('/caidat', 'frontendController@caidat');
	Route::get('/doimatkhau','frontendController@doimk');
	Route::post('/capnhat','frontendController@capnhat');
	Route::get('/messages','messagesController@messages');
	Route::get('/contentmassage/{id}','messagesController@contentmassage');
	Route::post('/ketquatimkiem', 'messagesController@ketquatimkiem')->name('search');
	Route::post('/sentmessages','messagesController@sendmassges');
	Route::post('/doianhdaidien','frontendController@doianhdaidien');
	Route::get('/suathongtin', 'frontendController@suathongtin');
	Route::post('/dulieusua', 'frontendController@dulieusua');
	Route::post('/baidang','frontendController@baidang');
	Route::get('/suabaidang/{id_post}/{id_user}','frontendController@suabaidang');
	Route::post('/dulieusuabaidang/{id_post}','frontendController@dulieusuabaidang');
	Route::get('/xoabaidang/{id_post}','frontendController@xoabaidang');
	Route::get('/trangtimkiem', 'frontendController@trangtimkiem');
	Route::get('/trangtimkiem/search', 'frontendController@search');
	Route::get('/chitietcanhan/{id}','frontendController@chitietcanhan');
});


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
	Route::get('home', 'admin\homeController@index')->name('home')->middleware('verified');
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
	Route::post('dulieublog','admin\blog@dulieublog' );
	Route::get('suablog/{id}','admin\blog@suablog');
	Route::post('dulieusuab/{id}','admin\blog@dulieusuab' );
	Route::get('xoablog/{id}/{idloai}','admin\blog@xoablog');

//review
	Route::get('review','admin\review@review');
	Route::get('duyetreview/{id}','admin\review@duyetreview');
	Route::get('xoareview/{id}','admin\review@xoareview');

//contact
	Route::get('contact','admin\contact@contact');

//users
	Route::get('dsuser', 'admin\userController@dsuser');
	Route::get('khoataikhoan/{id}', 'admin\userController@khoataikhoan');
	Route::get('motaikhoan/{id}', 'admin\userController@motaikhoan');
//admin
	Route::get('dsadmin','admin\userController@dsadmin')->middleware('checkroleadmin');
	Route::get('themquantri', 'admin\userController@themquantri')->middleware('checkroleadmin');
	Route::post('dthemquantri','admin\userController@dthemquantri')->middleware('checkroleadmin');
	Route::get('xoaadmin/{id}','admin\userController@xoaadmin');

});

Route::fallback(function () {
	return redirect('/');
});






