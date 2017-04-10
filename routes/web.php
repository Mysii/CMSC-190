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

/*Route::get('/', function () {
    return view('welcome');
});*/

//Route::get('/', 'HomeController@index');
Route::get('/', 'WelcomeController@index');

Auth::routes();
Route::get('/home', 'HomeController@index');
Route::get('/userprofile','UserProfileController@index');
Route::post('/userprofile/store','UserProfileController@store');
//Route::get('/home', 'DashboardController@index');

//Route::get('/adminstaff', 'AdminStaffController@index');
//\Route::post('/adminstaff/store','AdminStaffController@store');
//Route::get('/adminstaff/delete/{id}','AdminStaffController@destroy');


//Route::get('/inventory', 'InventoryController@index');
//Route::get('/sales', 'SalesController@index');
//Route::get('/sendnotif', 'SendNotifController@index');
Route::get('/about', 'AboutController@index');


//transactions routes
Route::resource('transactions', 'TransactionsController');
Route::get('/sanla', 'TransactionsController@sanla');
Route::get('/renew', 'TransactionsController@renew');
Route::get('/tubos', 'TransactionsController@tubos');
Route::get('transaction/downloadExcel', 'TransactionsController@downloadExcel');
Route::get('transaction/pdf', 'TransactionsController@pdf');
Route::any('/searchdate', 'TransactionsController@searchDate');
Route::any('/search', 'TransactionsController@search');

//inventory routes
Route::get('/inventory', 'InventoryController@index');
Route::get('/remata', 'InventoryController@remata');
Route::get('/mareremata', 'InventoryController@mareremata');
Route::get('inventory/downloadExcel', 'InventoryController@downloadExcel');
Route::get('inventory/pdf', 'InventoryController@pdf');

//sales routes
Route::get('/sales', 'SalesController@index');
Route::get('inventory/downloadExcel', 'SalesController@downloadExcel');
Route::get('inventory/pdf', 'SalesController@pdf');

//users/adminstaff routes
Route::resource('adminstaff', 'AdminStaffController');
Route::resource('users', 'UsersController');
Route::get('/admin', 'UsersController@admin');
Route::get('/staff', 'UsersController@staff');
Route::any('/searchusers', 'UsersController@search');

//send notif routes
Route::get('/sendnotif', 'SendNotifController@index');
Route::any('/sent', 'SendNotifController@sendSMS');


