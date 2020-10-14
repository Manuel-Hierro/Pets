<?php

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');

Route::get('/detalles', function () {
    return view('show');
});

Route::get('/contacto', function () {
    return view('contact');
})->name('contact');

Route::get('/legal', function () {
    return 'Pagina de terminos legales';
})->name('legal');

Route::get('/nosotros', function () {
    return 'Todo sobre nosotros';
})->name('us');

Route::get('/adopcion', function () {
    return 'Terminos sobre la adopcion';
})->name('adopcion');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin'], function(){
    Voyager::routes();
});
