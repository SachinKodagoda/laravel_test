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


Route::redirect('/', '/admin/login', 302); // 301 permanent redirect

Route::namespace('Admin')->prefix('admin')->group(function () {
    Route::get('/', 'UserController@mainAdmin')->name('mainAdmin');
    Route::get('/login', 'UserController@loginAdmin')->name('loginAdmin');
    Route::get('/register', 'UserController@registerAdmin')->name('registerAdmin');
    
});

Route::namespace('User')->prefix('user')->group(function () {
    Route::get('/search', 'UserController@searchUser')->name('searchUser');
    Route::get('/add', 'UserController@addUser')->name('addUser');
    Route::post('/add', 'UserController@addUserPost')->name('addUserPost');
    Route::post('/update', 'UserController@addUserPut')->name('addUserPut');
    Route::get('/update/{userId}', 'UserController@updateUser')->name('updateUser');
});
