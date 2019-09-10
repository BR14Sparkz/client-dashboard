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

Route::view('/', 'welcome');

Route::get('clients', 'ClientsController@list');

/*
* 	Client
*	- Daskboard
*	- Tickets
*	- New Ticket
*	- Update Ticket
*	- Update Details
*
*	Admin
*	- Daskboard
*	- Tickets
*	- New Ticket
*	- Update Ticket
*	- Client List
*	- Create Client
*	- Update Client Details
*	- Create Retainer
*	- Update Admin Details
*
*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
