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

/* Mail Grup Rotası */
Route::group(['as' => 'mail.', 'prefix' => 'mail'], function () {

    /* Tüm Mailleri Çekme Rotası */
    Route::get('index', ['as' => 'index', 'uses' => 'MailController@index']);
    Route::get('show/{id?}', ['as' => 'show', 'uses' => 'MailController@show']);
    Route::get('destroy/{id?}', ['as' => 'destroy', 'uses' => 'MailController@destroy']);
    Route::any('store', ['as' => 'store', 'uses' => 'MailController@store']);

});

Route::group(['as' => 'mailgun.', 'prefix' => 'mailgun'], function () {

    /* Tüm Mailleri Çekme Rotası */
    Route::get('create', ['as' => 'create', 'uses' => 'MailGunController@create']);

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
