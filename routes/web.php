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
    return redirect('/login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/customer/add', 'CustomerController@customeradd')->name('customer.add');
Route::post('/customer/submit', 'CustomerController@customersubmit')->name('customer.submit');
Route::get('/customer/all', 'CustomerController@customer_all')->name('customer.all');
Route::get('/customer/edit/{id}', 'CustomerController@customer_edit')->name('customer.edit');
Route::get('/customer/view/{id}', 'CustomerController@customer_view')->name('customer.view');
Route::get('/download/{filename}', 'CustomerController@download')->name('down');

Route::post('/customer/edit/submit', 'CustomerController@customereditsubmit')->name('customer.edit.submit');
Route::get('/clear', 'CustomerController@clear')->name('clear');
