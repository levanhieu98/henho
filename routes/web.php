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
	Route::get('/canhan', 'UserController@canhan');
	Route::get('/banbe', 'UserController@banbe');
	Route::get('/thuvienanh', 'UserController@thuvienanh');
	Route::post('/hienthiAlbum','UserController@hienthiAlbum');
	Route::post('/taoAlbum','UserController@taoAlbum');
	Route::get('/status', 'UserController@status');
	Route::get('/doimatkhau','UserController@doimk');
	Route::post('/capnhat','UserController@capnhat');
	Route::get('/messages','messagesController@messages');
	Route::get('/contentmassage/{id}','messagesController@contentmassage');
	Route::post('/ketquatimkiem', 'messagesController@ketquatimkiem')->name('search');
	Route::post('/sentmessages','messagesController@sendmassges');
	Route::post('/doianhdaidien','UserController@doianhdaidien');
	Route::get('/suathongtin', 'UserController@suathongtin');
	Route::post('/dulieusua', 'UserController@dulieusua');
	Route::post('/baidang','UserController@baidang');
	Route::get('/suabaidang/{id_post}/{id_user}','UserController@suabaidang');
	Route::post('/dulieusuabaidang/{id_post}','UserController@dulieusuabaidang');
	Route::get('/xoabaidang/{id_post}','UserController@xoabaidang');
	Route::get('/trangtimkiem', 'SearchController@trangtimkiem');
	Route::get('/trangtimkiem/search', 'SearchController@search');
	Route::get('/chitietcanhan/{id}','UserController@chitietcanhan');
	Route::post('/ketban','friendsController@ketban');
	Route::post('/huyketban','friendsController@huyketban');

	Route::get('/danhgia', 'UserController@danhgia');
	Route::post('/dulieudanhgia','UserController@dulieudanhgia');
	//Kiem tra tat ca trang thai online hay offline cua tat cua user
	Route::get('/check', 'UserController@userOnlineStatus');
	Route::post('/searchtrangchu','SearchController@searchtrangchu');
});


//giao dien ngoai
Route::get('/lienhe', 'frontendController@lienhe');
Route::post('/thongtinlienhe','frontendController@thongtinlienhe');
Route::get('/blog', 'frontendController@blog');
Route::get('/category_blog/{id}','frontendController@category_blog');
Route::get('/detail_blog/{id}','frontendController@detail_blog');
Route::get('/gioithieu', 'frontendController@gioithieu');
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
	Route::get('suathongtin','admin\adminController@suathongtin' );
	Route::post('dulieusuathongtin','admin\adminController@dulieusuathongtin' );

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
	Route::post('xuly','admin\contact@xuly');

//users
	Route::get('dsuser', 'admin\adminController@dsuser');
	Route::get('khoataikhoan/{id}', 'admin\adminController@khoataikhoan');
	Route::get('motaikhoan/{id}', 'admin\adminController@motaikhoan');
//admin
	Route::get('dsadmin','admin\adminController@dsadmin')->middleware('checkroleadmin');
	Route::get('themquantri', 'admin\adminController@themquantri')->middleware('checkroleadmin');
	Route::post('dthemquantri','admin\adminController@dthemquantri')->middleware('checkroleadmin');
	Route::get('xoaadmin/{id}','admin\adminController@xoaadmin');

});

Route::fallback(function () {
	return redirect('/');
});






