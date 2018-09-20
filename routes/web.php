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
    return view('front.front');
});
Route::get('/mail-forwarding-at-a-glance', function () {
    return view('front.mail-forwarding-at-a-glance');
});
Route::get('/how-mail-forwarding-works', function () {
    return view('front.how-mail-forwarding-works');
});
Route::get('/options-that-fit-your-needs', function () {
    return view('front.options-that-fit-your-needs');
});
Route::get('/privacy-and-security', function () {
    return view('front.privacy-and-security');
});
Route::get('/mail-forwarding-faq', function () {
    return view('front.mail-forwarding-faq');
});
Route::get('/shipping', function () {
    return view('front.shipping');
});
Route::get('/receiving', function () {
    return view('front.receiving');
});
Route::get('/transportation-management-systems', function () {
    return view('front.transportation-management-systems');
});
Route::get('/logistics-for-business-customers', function () {
    return view('front.logistics-for-business-customers');
});
Route::get('/services-overview', function () {
    return view('front.services-overview');
});
Route::get('/order-fulfillment', function () {
    return view('front.order-fulfillment');
});
Route::get('/amazon-fulfillment', function () {
    return view('front.amazon-fulfillment');
});
Route::get('/quality-control', function () {
    return view('front.quality-control');
});
Route::get('/customization', function () {
    return view('front.customization');
});
Route::get('/consultation-services', function () {
    return view('front.consultation-services');
});
Route::get('/about-us', function () {
    return view('front.about-us');
});
Route::get('/customer-satisfaction', function () {
    return view('front.customer-satisfaction');
});
Route::get('/why-parsendo', function () {
    return view('front.why-parsendo');
});
Route::get('/customer-relations', function () {
    return view('front.customer-relations');
});
Route::get('/protecting-the-enviroment', function () {
    return view('front.protecting-the-enviroment');
});
Route::get('/contact-us', function () {
    return view('front.contact-us');
});
Route::get('/customer-relations', function () {
    return view('front.customer-relations');
});
Route::get('/customer-relations', function () {
    return view('front.customer-relations');
});
Route::get('/customer-relations', function () {
    return view('front.customer-relations');
});
Route::get('/account', function () {
    return view('front.account');
});
Route::get('/terms-of-service', function () {
    return view('front.terms-of-service');
});
Route::get('/password-recovery', function () {
    return view('front.password-recovery');
});
Route::get('/username-recovery', function () {
    return view('front.username-recovery');
});
Route::get('/usubscribe', function () {
    return view('front.usubscribe');
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
    Route::get('/dashboard/profiles/{profile}/delete/{type?}', ['as' => 'admin.profiles.delete', 'uses' => 'Admin\ProfilesController@delete']);
    Route::get('/dashboard/profiles/{profile}/edit/{type?}', ['as' => 'admin.profiles.edit', 'uses' => 'Admin\ProfilesController@edit']);
    Route::patch('/dashboard/profiles/{profile}/update/{type?}', ['as' => 'admin.profiles.update', 'uses' => 'Admin\ProfilesController@update']);
    Route::get('/dashboard/profiles/{type?}/{search_phrase?}', ['as' => 'admin.profiles', 'uses' => 'Admin\ProfilesController@index']);

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

