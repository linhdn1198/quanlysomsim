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
    return view('welcome');
});

Route::prefix('sosim')->group(function () {
    Route::get('danhsachsim','sosim_c@danhsachsim')->name('danhsachsim');

    Route::get('getAdd', 'sosim_c@getAdd')->name('getAdd');
    Route::post('postAdd','sosim_c@postAdd')->name('postAdd');

    Route::get('getEdit/{id}','sosim_c@getEdit')->name('getEdit');
    Route::post('postEdit/{id}','sosim_C@postEdit')->name('postEdit');

    Route::get('getDelete/{id}','sosim_c@getDelete')->name('getDelete');

});