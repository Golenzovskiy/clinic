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

use Illuminate\Support\Facades\Route;

Route::get('/debug-sentry', function () {
    throw new Exception('My first Sentry error!');

});

Route::get('/', ['uses' => 'PageController']);
Route::get('{specialization}', ['uses' => 'PageController@view']);

Route::post('/ajax-visit', ['uses' => 'AjaxController@createVisit'])->name('ajax-visit');
Route::post('/ajax-slots', ['uses' => 'AjaxController@getSlots'])->name('ajax-slots');
