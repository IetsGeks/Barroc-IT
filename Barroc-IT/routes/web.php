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
    return view('director');
});
Route::get('/sales', function () {
    return view('sales');
});
Route::get('/projects', function () {
    return view('projects');
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
Route::get('assignments', function (){
    return view('assignments');
});
Route::resource('assignments', 'assignmentController');
Route::resource('admin', 'adminController');
Route::resource('sales', 'customerController');
Route::resource('finance', 'financeController');
Route::put('finance/{id}/complete', 'financeController@finish');
Route::put('finance/{id}/client_inactive', 'financeController@inactivate_client');
Route::post('finance/{id}/add_invoice', 'invoiceController@add_invoice');
Route::put('admin/{id}/activate', 'adminController@activate_client');
Route::put('finance/{id}/paid', 'financeController@set_paid');
Route::put('finance/{id}/update', 'financeController@update');
Auth::routes();