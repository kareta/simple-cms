<?php

Route::controller('auth/password', 'Auth\PasswordController', [
    'getEmail' => 'auth.passwords.email',
    'getReset' => 'auth.passwords.reset'
]);

Route::controller('auth', 'Auth\AuthController', [
    'getLogin' => 'auth.login',
    'getLogout' => 'auth.logout'
]);

Route::get('backend/dashboard', [
    'as' => 'backend.dashboard',
    'uses' => 'Backend\DashboardController@index'
]);

Route::get('/', function () {
    return view('welcome');
});


