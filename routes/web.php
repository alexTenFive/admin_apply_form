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
     * TRANSFERS
     */
    Route::get('/dashboard/profiles/transfer/{form_id?}', ['as' => 'admin.profiles.transfer', 'uses' => 'Admin\TransferController@index']);
    Route::post('/dashboard/profiles/transfer/{form?}', ['as' => 'admin.profiles.transfer', 'uses' => 'Admin\TransferController@transfer']);

    /**
     * PROFILES
     */
    Route::get('/dashboard/profiles/{type?}/{search_phrase?}', ['as' => 'admin.profiles', 'uses' => 'Admin\ProfilesController@index']);
    Route::get('/dashboard/profiles/{profile}/delete/{type?}', ['as' => 'admin.profiles.delete', 'uses' => 'Admin\ProfilesController@delete']);
    Route::get('/dashboard/profiles/{profile}/edit/{type?}', ['as' => 'admin.profiles.edit', 'uses' => 'Admin\ProfilesController@edit']);
    Route::patch('/dashboard/profiles/{profile}/update/{type?}', ['as' => 'admin.profiles.update', 'uses' => 'Admin\ProfilesController@update']);

    });

Route::get('/form/{link}', ['as' => 'forms.link', 'uses' => 'Front\FormsController@link']);
Route::post('/form/{link}', ['as' => 'profiles.store', 'uses' => 'Front\FormsController@store']);

/**
 * BACKEND ROUTES END
 */


/**
 * AUTH ROUTES
 * Override default scaffold laravel routes
 */
Route::get('/admin/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/admin/login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');

// Register the typical email verification routes for an application.
Route::get('email/verify', 'Auth\VerificationController@show')->name('verification.notice');
Route::get('email/verify/{id}', 'Auth\VerificationController@verify')->name('verification.verify');
Route::get('email/resend', 'Auth\VerificationController@resend')->name('verification.resend');

