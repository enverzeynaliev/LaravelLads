<?php


Route::get('/', function () {
    return view('homepage');
});

Route::get('/homepage', function () {
    return view('homepage');
});
Route::get('/add', function () {
    return view('add');
});
Route::get('/catalog', function () {
    return view('catalog');
})->name('catalog');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
