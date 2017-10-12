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
Route::get('/master-home', function (){
    return view('master-home');
});
Route::get('/sales-home', function (){
    return view('sales-home');
});
Route::get('/finance-home', function (){
    return view('finance-home');
});
Route::get('/development-home', function (){
    return view('development-home');
});
Route::get('/admin-home', function (){
    return view('admin-home');
});
Route::get('/assignments', function (){
    return view('assignments');
});

Route::get('/customers', function (){
    return view('customers');
});

Route::resource('admin', 'Admincontroller');
Route::resource('customerSearch', 'customerController');
Route::resource('finance', 'financeController');

