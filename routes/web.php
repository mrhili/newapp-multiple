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



Route::get('/', 'AdsController@index')->name('index');

/*from any to get*/
Route::get('/main', 'AdsController@main')->name('main');

Route::get('/{id}/profile/', 'UserController@profile')->name('profile');

Route::get('/{id}/ads/', 'UserController@ads')->name('profile.ads');

Route::get('/ads/{id}', 'AdsController@show')->name('ads.show');



Route::get('/hidden', function () {
    return view('front.welcome');
});

Route::get('/quick/{cat_business}/{cat}', 'AdsController@quick')->name('quick');

Route::get('/childrenselect/{id}', 'CategoryController@childrenselect')->name('chidren-select');

Route::get('/ads/{id}/get', 'AdsController@get')->name('ads.get');

Route::put('/ads/{id}/change-status', 'AdsController@changeStatus')->name('ads.change-status');

Route::get('/ads/{id}/destroy', 'AdsController@destroy')->name('ads.destroy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['user']], function () {

    Route::get('/{id}/my-ads-not-checked-yet/', 'UserController@adsNotChecked')->name('profile.ads-not-checked');

    Route::get('/ads-favorite', 'UserController@adsFavorite')->name('profile.ads-favorite');

    Route::get('/add-info/', 'UserController@addInfo')->name('profile.add-info');

    Route::put('/add-info-store/', 'UserController@addInfoStore')->name('profile.add-info-store');

    Route::put('/img-store/', 'UserController@imgStore')->name('profile.img-store');

    Route::get('/sensible-info/', 'UserController@sensibleInfo')->name('profile.sensible-info');

    Route::put('/sensible-info-email/', 'UserController@sensibleInfoEmail')->name('profile.sensible-info-email');
    
    Route::put('/sensible-info-pass/', 'UserController@sensibleInfoPass')->name('profile.sensible-info-pass');

});

Route::group(['middleware' => ['publisher']], function () {

    Route::get('/add-ads/', 'AdsController@addAds')->name('profile.add-ads');

    Route::get('/destroy-pic/{id}', 'PicController@destroy')->name('pic.destroy');
    
    Route::post('/store-ads/', 'AdsController@store')->name('ads.store');

    Route::get('/update-ads/{id}', 'AdsController@updateAds')->name('profile.update-ads');
    Route::post('/update-ads/{id}', 'AdsController@update')->name('ads.update');


});

Route::group(['middleware' => ['admin']], function () {
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard.index');
        /*Users*/

    Route::get('/_ads', 'AdsController@data')->name('ads.data');
    Route::get('/_ads-data', 'AdsController@datatable')->name('ads.datatable');
});

Route::group(['middleware' => ['master']], function () {

    Route::get('/configs', 'ConfigController@index')->name('configs.index');

    Route::post('/configs/store', 'ConfigController@store')->name('configs.store');

    Route::get('/configs/add', 'ConfigController@add')->name('configs.add');

    Route::post('/configs/store-config', 'ConfigController@storeConfig')->name('configs.store-config');


});


/*

Route::group(['middleware' => ['admin']], function () {




    Route::get('/dashboard/config', 'ConfigController@index')->name('welcomeBack');

    Route::post('/dashboard/config/store', 'ConfigController@store')->name('configs.store');

    Route::get('/dashboard/users', 'UserController@index')->name('users.index');




});


Route::group(['middleware' => ['user']], function () {

    Route::get('/myprofile', 'ProfileController@index')->name('profile.index');
    
    Route::get('/resetmypassword', 'Auth\ResetPassword4UserController@reset')->name('users.password.change');
    Route::patch('/resetmypassword/update', 'Auth\ResetPassword4UserController@update')->name('users.password.update');

    Route::get('/resetmyemail', 'Auth\ResetEmail4UserController@reset')->name('users.email.change');
    Route::patch('/resetmyemail/update', 'Auth\ResetEmail4UserController@update')->name('users.email.update');
    
    Route::get('/additionalinfo', 'ProfileController@additionalinfo')->name('users.additionalinfo.change');
    Route::patch('/additionalinfo', 'ProfileController@updateaddinfo')->name('users.additionalinfo.update');
    
    

});

*/