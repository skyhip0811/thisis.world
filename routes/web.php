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

Route::get('/static/world', function () {
    return view('static/articlelist');
});

Route::get('/static/content', function () {
    return view('static/content');
});

Route::get('/static/addnewline', function () {
    return view('static/add_new_line');
});

Route::get('/static/register', function () {
    return view('static/register');
});

Route::get('/', function () {
    return view('static/home');
});