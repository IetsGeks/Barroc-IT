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
    return view('Login');
});
Route::get('/sales', function () {
    return view('sales');
});
Route::get('/projects', function () {
    return view('projects');
});
Route::get('/template-home', function (){
    return view('template-home');
});
Route::get('/customers', function (){
    return view('customers');
});

Route::resource('customerS', 'customerController');
Route::resource('admin', 'Admincontroller');

