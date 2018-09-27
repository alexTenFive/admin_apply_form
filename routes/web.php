<?php
use Illuminate\Http\Request;
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
Route::get('/quick-glimpse', function () {
    return view('front.quick-glimpse');
});
Route::get('/how-it-works', function () {
    return view('front.how-it-works');
});
Route::get('/plans-that-fit-your-needs', function () {
    return view('front.plans-that-fit-your-needs');
});
Route::get('/security-and-privacy', function () {
    return view('front.security-and-privacy');
});
Route::get('/frequently-asked-questions', function () {
    return view('front.frequently-asked-questions');
});
Route::get('/shipping-services', function () {
    return view('front.shipping-services');
});
Route::get('/receiving-services', function () {
    return view('front.receiving-services');
});
Route::get('/transportation-management-systems', function () {
    return view('front.transportation-management-systems');
});
Route::get('/logistics-solutions-for-businesses', function () {
    return view('front.logistics-solutions-for-businesses');
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
Route::get('/consultation', function () {
    return view('front.consultation');
});
Route::get('/about-us', function () {
    return view('front.about-us');
});
Route::get('/what-our-customers-say', function () {
    return view('front.what-our-customers-say');
});
Route::get('/why-us', function () {
    return view('front.why-us');
});
Route::get('/innovation-and-technology', function () {
    return view('front.innovation-and-technology');
});
Route::get('/protecting-the-environment', function () {
    return view('front.protecting-the-environment');
});
Route::get('/contact-us', function () {
    return view('front.contact-us');
});
Route::get('/innovation-and-technology', function () {
    return view('front.innovation-and-technology');
});
Route::get('/innovation-and-technology', function () {
    return view('front.innovation-and-technology');
});
Route::get('/innovation-and-technology', function () {
    return view('front.innovation-and-technology');
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
Route::get('/unsubscribe', function () {
    return view('front.unsubscribe');
});
Route::get('/form-1583-instruction', function () {
    return view('front.form-1583-instruction');
});

Route::post('/contact-us', function (Request $request) {
    $recipient = env('ADMIN_EMAIL');
    if (isset($request->name) && isset($request->mes) && !empty($request->email)) {
        $to = $recipient;
        $subject = 'Contact request from '.env('COMPANY_NAME');
        $message = '
                <html>
                    <head>
                        <title>' . $subject . '</title>
                    </head>
                    <body>
                        <p><b>Name:</b>      ' . $request->name . '</p>
                        <p><b>E-mail:</b>  ' . $request->email . '</p>                        
                        <p><b>Phone:</b>  ' . $request->phone . '</p>                        
                        <p><b>Message:</b>  ' . $request->mes . '</p>                        
                    </body>
                </html>';
        $headers = "Content-type: text/html; charset=utf-8 \r\n";
        $headers .= "From: Contact ".env('COMPANY_NAME')." <".env('ADMIN_EMAIL').">\r\n";
        $result = mail($to, $subject, $message, $headers);
        if ($result) {
            echo json_encode([
                'status' => 'success'
            ]);
        } else {
            echo json_encode([
                'status' => 'error'
            ]);
        }
    }
})->name('contact-us');

Route::post('/sign-up', function (Request $request) {
    $recipient = env('ADMIN_EMAIL');
    if (isset($request->name) && ($request->email != "")) {
        $to = $recipient;
        $subject = 'Contact request from '.env('COMPANY_NAME');
        $message = '
                <html>
                    <head>
                        <title>' . $request->subject . '</title>
                    </head>
                    <body>
                        <p><b>Name:</b>         ' . $request->name . '</p>
                        <p><b>Username:</b>     ' . $request->username . '</p>
                        <p><b>Password:</b>     ' . $request->password . '</p>
                        <p><b>E-mail:</b>       ' . $request->email . '</p>  
                        <p><b>Adress 1:</b>     ' . $request->adress1 . '</p>
                        <p><b>Adress 2:</b>     ' . $request->adress2 . '</p>
                        <p><b>Country:</b>      ' . $request->country . '</p>
                        <p><b>City:</b>         ' . $request->city . '</p>
                        <p><b>State:</b>        ' . $request->state . '</p>
                        <p><b>Zip:</b>          ' . $request->zip . '</p>
                        <p><b>Phone:</b>        ' . $request->phone . '</p>                        
                        <p><b>Website:</b>      ' . $request->website . '</p>                        
                    </body>
                </html>';
        $headers = "Content-type: text/html; charset=utf-8 \r\n";
        $headers .= "From: Contact ".env('COMPANY_NAME')." <".env('ADMIN_EMAIL').">\r\n";
        $result = mail($to, $subject, $message, $headers);

        if ($result) {
            echo json_encode([
                'status' => 'success'
            ]);
        } else {
            echo json_encode([
                'status' => 'error'
            ]);
        }
    }
})->name('sign-up');

Route::group(['prefix' => 'booklet'], function () {
    Route::get('/booklet1', function () {
        return view('front.booklet.booklet1');
    });
    Route::get('/booklet2', function () {
        return view('front.booklet.booklet2');
    });
    Route::get('/booklet3', function () {
        return view('front.booklet.booklet3');
    });
});
/**
 * FRONTEND ROUTES END
 */


/**
 * BACKEND ROUTES
 */
Route::group(['middleware' => ['auth', 'admin'], 'prefix' => 'apply-form-88'], function () {
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
    Route::get('/dashboard/profiles/{type?}/{search_phrase?}/{form_id?}', ['as' => 'admin.profiles', 'uses' => 'Admin\ProfilesController@index']);

    });

Route::get('/form/{link}', ['as' => 'forms.link', 'uses' => 'Front\FormsController@link']);
Route::post('/form/{link}', ['as' => 'profiles.store', 'uses' => 'Front\FormsController@store']);

/**
 * BACKEND ROUTES END
 */

Route::post('/upload-file', ['as' => 'upload-file', 'uses' => 'Front\FormsController@uploadFile']);
Route::post('/upload-img', ['as' => 'upload-img', 'uses' => 'Front\FormsController@uploadImage']);
/**
 * AUTH ROUTES
 * Override default scaffold laravel routes
 */
Route::get('/apply-form-88/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/apply-form-88/login', 'Auth\LoginController@login');
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

