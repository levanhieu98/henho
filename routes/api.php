<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::apiResource('city','api\city');
Route::apiResource('district','api\district');
Route::apiResource('ward','api\ward');
Route::apiResource('id_district','api\id_district');
Route::apiResource('id_ward','api\id_ward');
Route::apiResource('binhluan','api\BinhluanController');
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
