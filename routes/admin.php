<?php


    Route::get('/', 'PagesController@root')->name('admin.root');

// 用户身份验证相关的路由
    Route::get('login', 'Auth\LoginController@showLoginForm')->name('admin.login');
    Route::post('login', 'Auth\LoginController@login');
    Route::post('logout', 'Auth\LoginController@logout')->name('admin.logout');

// 用户注册相关路由
    Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('admin.register');
    Route::post('register', 'Auth\RegisterController@register');

// 密码重置相关路由
    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('admin.password.reset');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('admin.password.update');

// Email 认证相关路由
    Route::get('email/verify', 'Auth\VerificationController@show')->name('admin.verification.notice');
    Route::get('email/verify/{id}', 'Auth\VerificationController@verify')->name('admin.verification.verify');
    Route::get('email/resend', 'Auth\VerificationController@resend')->name('admin.verification.resend');


