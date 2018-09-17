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

/**
 * FRONTEND ROUTES
 */
Route::get('/', function () {
    return 'not implemented yet';
});

/**
 * FRONTEND ROUTES END
 */


/**
 * BACKEND ROUTES
 */
Route::group(['middleware' => ['auth', 'admin'], 'prefix' => 'admin'], function () {
    Route::get('/dashboard', ['as' => 'admin.dashboard', 'uses' => 'Admin\DashboardController@index']);
    /**
     * FORMS
     */
    Route::get('/dashboard/forms/add', ['as' => 'admin.forms.add', 'uses' => 'Admin\FormsController@create']);
    Route::post('/dashboard/forms/store', ['as' => 'admin.forms.store', 'uses' => 'Admin\FormsController@store']);

    Route::get('/dashboard/forms/{type?}', ['as' => 'admin.forms', 'uses' => 'Admin\FormsController@index']);

    /**
     * PROFILES
     */
    Route::get('/dashboard/profiles/{type?}', ['as' => 'admin.profiles', 'uses' => 'Admin\ProfilesController@index']);
});


/**
 * BACKEND ROUTES END
 */


/**
 * AUTH ROUTES
 */
Auth::routes();
