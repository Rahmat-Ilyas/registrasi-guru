<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'HomeController@index');

// User
Route::group(['prefix' => 'user'], function () {
    Route::get('/login', 'Auth\AuthUserController@showLoginForm')->name('user.login');
    Route::post('/login', 'Auth\AuthUserController@login')->name('user.login.submit');
    Route::get('/logout', 'Auth\AuthUserController@logout')->name('user.logout');
    Route::get('/', 'UserController@home')->name('user.home');

    Route::post('/config', 'UserController@config');
    Route::post('/store/{target}', 'UserController@store');
    Route::post('/update/{target}', 'UserController@update');
    Route::get('/delete/{target}/{id}', 'UserController@delete');

    Route::get('/{page}', 'UserController@page');
    Route::get('/{dir}/{page}', 'UserController@pagedir');
});

// Admin
Route::group(['prefix' => 'admin'], function () {
    Route::get('/login', 'Auth\AuthAdminController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AuthAdminController@login')->name('admin.login.submit');
    Route::get('/logout', 'Auth\AuthAdminController@logout')->name('admin.logout');
    Route::get('/', 'AdminController@home')->name('admin.home');

    Route::post('/config', 'AdminController@config');
    Route::post('/store/{target}', 'AdminController@store');
    Route::post('/update/{target}', 'AdminController@update');
    Route::get('/delete/{target}/{id}', 'AdminController@delete');

    Route::get('/{page}', 'AdminController@page');
    Route::get('/{dir}/{page}', 'AdminController@pagedir');
});

// Penilai
Route::group(['prefix' => 'penilai'], function () {
    Route::get('/login', 'Auth\AuthPenilaiController@showLoginForm')->name('penilai.login');
    Route::post('/login', 'Auth\AuthPenilaiController@login')->name('penilai.login.submit');
    Route::get('/logout', 'Auth\AuthPenilaiController@logout')->name('penilai.logout');
    Route::get('/', 'PenilaiController@home')->name('penilai.home');

    Route::post('/config', 'PenilaiController@config');
    Route::post('/store/{target}', 'PenilaiController@store');
    Route::post('/update/{target}', 'PenilaiController@update');
    Route::get('/delete/{target}/{id}', 'PenilaiController@delete');

    Route::get('/{page}', 'PenilaiController@page');
    Route::get('/{dir}/{page}', 'PenilaiController@pagedir');
});

// Verifier
Route::group(['prefix' => 'verifier'], function () {
    Route::get('/login', 'Auth\AuthVerifierController@showLoginForm')->name('verifier.login');
    Route::post('/login', 'Auth\AuthVerifierController@login')->name('verifier.login.submit');
    Route::get('/logout', 'Auth\AuthVerifierController@logout')->name('verifier.logout');
    Route::get('/', 'VerifierController@home')->name('verifier.home');

    Route::post('/config', 'VerifierController@config');
    Route::post('/store/{target}', 'VerifierController@store');
    Route::post('/update/{target}', 'VerifierController@update');
    Route::get('/delete/{target}/{id}', 'VerifierController@delete');

    Route::get('/{page}', 'VerifierController@page');
    Route::get('/{dir}/{page}', 'VerifierController@pagedir');
});
