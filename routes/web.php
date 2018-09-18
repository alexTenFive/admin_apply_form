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
    Route::get('/dashboard/forms/{form}/edit/{type?}', ['as' => 'admin.forms.edit', 'uses' => 'Admin\FormsController@edit']);
    Route::patch('/dashboard/forms/{form}/update/{type?}', ['as' => 'admin.forms.update', 'uses' => 'Admin\FormsController@update']);
    Route::get('/dashboard/forms/{form}/deactivate/{type?}', ['as' => 'admin.forms.onOff', 'uses' => 'Admin\FormsController@onOff']);
    Route::get('/dashboard/forms/{type?}', ['as' => 'admin.forms', 'uses' => 'Admin\FormsController@index']);

    /**
     * PROFILES
     */
    Route::get('/dashboard/profiles/{type?}', ['as' => 'admin.profiles', 'uses' => 'Admin\ProfilesController@index']);
    Route::get('/dashboard/profiles/{profile}/delete/{type?}', ['as' => 'admin.profiles.delete', 'uses' => 'Admin\ProfilesController@delete']);
    Route::get('/dashboard/profiles/{profile}/edit/{type?}', ['as' => 'admin.profiles.edit', 'uses' => 'Admin\ProfilesController@edit']);
    Route::patch('/dashboard/profiles/{profile}/update/{type?}', ['as' => 'admin.profiles.update', 'uses' => 'Admin\ProfilesController@update']);

});


/**
 * BACKEND ROUTES END
 */


/**
 * AUTH ROUTES
 */
Auth::routes();
