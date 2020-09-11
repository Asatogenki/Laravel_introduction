<?php

Route::get('/home', function () {
    return view('home');
});

Route::get('auth/register', 'Auth\registerController@showRegistrationForm');
Route::post('auth/register', 'Auth\registerController@register');
