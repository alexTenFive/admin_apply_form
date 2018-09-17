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
});


/**
 * BACKEND ROUTES END
 */


/**
 * AUTH ROUTES
 */
Auth::routes();
