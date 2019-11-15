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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Auth::routes();



Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'distributors', 'as' => 'distributors::'], function() {
    Route::get('/', [
        'as' => 'index',
        'uses' => 'DistributorsController@index'
    ]);

    Route::group(['prefix' => 'distributor', 'as' => 'distributor::'], function() {
        Route::get('create', [
            'as' => 'create',
            'uses' => 'DistributorsController@create',
            'middleware' => 'auth'
        ]);
        Route::post('store', [
            'as' => 'store',
            'uses' => 'DistributorsController@store',
            'middleware' => 'auth'
        ]);
        Route::get('{distributor}/edit', [
            'as' => 'edit',
            'uses' => 'DistributorsController@edit',
            'middleware' => ['auth', 'editor.check']
        ]);
        Route::put('{distributor}/update', [
            'as' => 'update',
            'uses' => 'DistributorsController@update',
            'middleware' => ['auth', 'editor.check']
        ]);
        Route::get('{distributor}/delete', [
            'as' => 'delete',
            'uses' => 'DistributorsController@destroy',
            'middleware' => ['auth', 'editor.check']

        ]);
    });
});
