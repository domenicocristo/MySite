<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@home') -> name('home');

Route::get('/register_btn', 'HomeController@register_btn') -> name('register_btn');
Route::get('/login_btn', 'HomeController@login_btn') -> name('login_btn');

Route::post('/register', 'Auth\RegisterController@register') -> name('register');

Route::post('/login', 'Auth\LoginController@login') -> name('login');
Route::get('/logout', 'Auth\LoginController@logout') -> name('logout');

Route::get('/api/posts/list', 'ApiController@getPosts') -> name('api.posts.list');

Route::middleware('auth')->prefix('postcards')->group(function() {

    Route::get('/create', 'GuestController@create')-> name('create');
    Route::post('/store', 'GuestController@store')-> name('store');
});