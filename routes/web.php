<?php

Route::get ('/welcome','WelcomeController@index');

Route::get('/', function () {
    return view('welcome');
});
