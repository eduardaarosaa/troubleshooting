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
    return view('welcome');
});

Auth::routes();

Route::get('/contract/{customer_id}/{contract_id}', [
    'as' => 'contract.show',
    'uses' => 'ContractController@show'
])->defaults('LOREN', '$contract_id');



