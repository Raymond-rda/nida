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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['prefix' => '/home/'], function () {


    //province routes

    Route::get('province', [
        'uses' => 'ProvinceController@province',
        'as' => 'admin.province'
    ]);

    Route::get('getProvince', [
        'uses' => 'ProvinceController@getProvince',
        'as' => 'admin.getProvince'
    ]);
    Route::post('post/province', [
        'uses' => 'ProvinceController@saveProvince',
        'as' => 'admin.saveProvince'
    ]);
    Route::put('update/province', [
        'uses' => 'ProvinceController@updateProvince',
        'as' => 'admin.updateProvince'
    ]);
    Route::get('province/show/{id}', [
        'uses' => 'ProvinceController@show',
        'as' => 'admin.showProvince'
    ]);
    Route::delete('/province/delete/{id}', [
        'uses' => 'ProvinceController@delete',
        'as' => 'admin.deleteProvince'
    ]);

//district routes
    Route::get('district', [
        'uses' => 'DistrictController@district',
        'as' => 'admin.district'
    ]);
    Route::get('getDistrict', [
        'uses' => 'DistrictController@getDistrict',
        'as' => 'admin.getDistrict'
    ]);
    Route::post('post/district', [
        'uses' => 'DistrictController@saveDistrict',
        'as' => 'admin.saveDistrict'
    ]);
    Route::put('update/district', [
        'uses' => 'DistrictController@updateDistrict',
        'as' => 'admin.updateDistrict'
    ]);
    Route::get('district/show/{id}', [
        'uses' => 'DistrictController@show',
        'as' => 'admin.showDistrict'
    ]);
    Route::delete('/district/delete/{id}', [
        'uses' => 'DistrictController@delete',
        'as' => 'admin.deleteDistrict'
    ]);



    Route::get('getPopulations', [
        'uses' => 'PopulationController@getPopulations',
        'as' => 'admin.getPopulations'
    ]);

    Route::get('population', [
        'uses' => 'PopulationController@population',
        'as' => 'admin.populations'
    ]);
});
