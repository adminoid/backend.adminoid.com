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

Route::get('/', function () {
    return view('pages.index');
});

Route::get('/process.html', function () {
    return view('process');
});

Route::get('/price.html', function () {
    return view('price');
});

Route::get('/portfolio.html', function () {
    return view('portfolio');
});

Route::get('/tools.html', function () {
    return view('tools');
});