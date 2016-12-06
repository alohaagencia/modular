<?php

Route::group([
    'middleware' => 'web',
    'prefix' => '/admin/login',
    'namespace' => 'Modules\Login\Http\Controllers',
], function () {
    Route::get('/', 'LoginController@showLoginForm');
    Route::post('/', 'LoginController@login');
});
