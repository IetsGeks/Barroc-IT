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
Route::get('/customers', function (){
    return view('customers');
});
Route::get('/add-customer', function (){
    return view('add-customer');
});
Route::post('/add-customer', function (\Illuminate\Http\Request $request) {
    dd($request->all());
});
Route::get('/search-customer', function (){
    return view('search-customer');
});
Route::get('/customer-inf', function (){
    return view('customer-inf');
});
Route::get('/template-home', function (){
    return view('template-home');
});
Route::get('/admin', function (){
    return view('admin');
});

