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


Route::get('/billing/add', 'BillingController@billing_add')->name('billing.add');
Route::post('/billing/add/submit', 'BillingController@billing_add_sub')->name('add.accounts.submit');
Route::get('/billing/all', 'BillingController@billing_all')->name('billing.all');

Route::get('/billing/edit/{id}', 'BillingController@billing_edit')->name('billing.edit');
Route::post('/billing/edit/submit', 'BillingController@billing_edit_submit')->name('billing.edit.submit');
Route::get('/billing/view/{id}', 'BillingController@billing_view')->name('billing.view');

Route::get('/installment/add', 'InstallmentController@installment_add')->name('installment.add');
Route::post('/installment/submit', 'InstallmentController@installment_submit')->name('installment_add.submit');
Route::get('/installment/show/all', 'InstallmentController@installment_all')->name('installment.all');

Route::get('/installment/edit/{id}', 'InstallmentController@installment_view_chart')->name('installment.view.chart');
Route::get('/installment/view/{id}', 'InstallmentController@installment_view_one')->name('installment.view');
Route::post('/installment/edit/submit', 'InstallmentController@installment_view_chart_submit')->name('installment.submit.chart');
Route::post('/installment/view/chart/submit', 'InstallmentController@installment_view_chart_submit')->name('installment.submit.chart');


Route::post('/customer/date/search', 'CustomerController@date_search')->name('date_search');







Route::get('/notepad/add', 'NotepadController@notepad_add')->name('notepad.add');
Route::post('/notepad/submit', 'NotepadController@notepad_submit')->name('add.notepad.submit');
Route::get('/notepad/all', 'NotepadController@notepad_all')->name('notepad.all');
Route::get('/notepad/edit/{id}', 'NotepadController@notepad_edit')->name('notepad.edit');
Route::post('/notepad/edit/submit', 'NotepadController@notepad_edit_submit')->name('notepad.edit.submit');
Route::get('/notepad/view/{id}', 'NotepadController@notepad_view')->name('notepad.view');
Route::post('/company/add', 'BillingController@company_add')->name('company.add');
