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

use App\Http\Controllers\SslCommerzPaymentController;

Route::get('/', function () {
    return view('welcome');
});

// SSLCOMMERZ Start

Route::get('/pay',[SslCommerzPaymentController::class, 'index']);
Route::get('/example2',[SslCommerzPaymentController::class, 'exampleHostedCheckout']);
Route::post('/success',[SslCommerzPaymentController::class, 'success']);
Route::post('/fail',[SslCommerzPaymentController::class, 'fail']);
Route::post('/cancel',[SslCommerzPaymentController::class, 'cancel']);
Route::post('/ipn',[SslCommerzPaymentController::class, 'ipn']);

//[UserController::class, 'show']
//Route::post('/pay', 'SslCommerzPaymentController@index');
//Route::get('/example1', 'SslCommerzPaymentController@exampleEasyCheckout')->name('ssl.easyCheckout');
//Route::post('/pay-via-ajax', 'SslCommerzPaymentController@payViaAjax');

//Route::post('/success', 'SslCommerzPaymentController@success');
//Route::post('/fail', 'SslCommerzPaymentController@fail');
//Route::post('/cancel', 'SslCommerzPaymentController@cancel');

//Route::post('/ipn', 'SslCommerzPaymentController@ipn');
//SSLCOMMERZ END
