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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/pargraf/{id}', function ($id) {
    return "pargraf id:".$id;
});
Route::get('/pargraf', function () {
    return view('pargraf');
});
Route::get('/signup', function () {
    return view('signup');
});
Route::post('/edit', function () {
    return "<script>alert('inserted')</script>";

})->name('insert');
Route::post('/edit', function () {
    return "<script>alert('delete')</script>";

})->name('delete');

Route::group(['prefix'=>'en','name'=>'account'],function(){

    Route::get('/register', function () {
        return ('register');
    });
    Route::get('/login', function () {
        return ('login');
    });
});