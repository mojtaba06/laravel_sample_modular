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

Route::prefix('todoui')->group(function () {
    Route::get('/', 'TodoUIController@index');
    Route::get('/mark_as_done/{id}', 'TodoUIController@mark')->name("todoui_mark_as_done_path");
    Route::get('/admin/{module}/{method}', 'TodoUIController@admin')->name("admin");
});
