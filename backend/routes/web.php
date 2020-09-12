<?php

Route::get('/home', function () {
    return view('home');
});

Route::get('auth/register', 'Auth\registerController@showRegistrationForm');
Route::post('auth/register', 'Auth\registerController@register');
Route::get('auth/login', 'Auth\LoginController@showLoginForm');
Route::post('auth/login', 'Auth\LoginController@login');
Route::get('/auth/logout', 'Auth\LoginController@logout');
