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
Route::post('population/registration', [
    'uses' => 'PopulationController@Register',
    'as' => 'api.registration'
]);
Route::post('get/province', [
    'uses' => 'PopulationController@getProvince',
    'as' => 'api.getProvince'
]);
    Route::post('get/district', [
    'uses' => 'PopulationController@getDistrict',
    'as' => 'api.getDistrict'
]);
Route::post('province/district', [
    'uses' => 'PopulationController@provinceDistrict',
    'as' => 'api.provinceDistrict'
]);
Route::post('vote/registration/check', [
    'uses' => 'PopulationController@checkNida',
    'as' => 'api.checkNida'
]);

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
