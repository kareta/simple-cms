<?php

Route::resource('backend/users', 'Backend\UsersController', ['except' => 'show']);
Route::resource('backend/pages', 'Backend\PagesController', ['except' => 'show']);

Route::get('backend/pages/{pages}/confirm', [
    'as' => 'backend.pages.confirm',
    'uses' => 'Backend\PagesController@confirm'
]);

Route::get('backend/users/{users}/confirm', [
    'as' => 'backend.users.confirm',
    'uses' => 'Backend\UsersController@confirm'
]);

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


