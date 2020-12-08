<?php

use App\Http\Controllers\SubscribeController;
use Illuminate\Support\Facades\Route;

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






Auth::routes(['register' => false]);


// admin page
Route::resource('admin', 'DashboardController')->middleware('auth');
Route::resource('movie', 'MovieController')->middleware('auth');
Route::resource('about', 'AboutController')->middleware('auth');
Route::resource('profile', 'ProfileController')->middleware('auth');
Route::get('/report', 'ReportController@index')->name('report.index')->middleware('auth');
Route::delete('/report/destroy/{id}', 'ReportController@destroy')->name('report.destroy')->middleware('auth');
Route::get('/setting', 'SmediaController@edit')->name('setting.edit')->middleware('auth');
Route::put('/setting/update/{id}', 'SmediaController@update')->name('update.setting')->middleware('auth');


// user page
Route::get('/', 'LandingpageCOntroller@index')->name('home');
Route::get('/detail/{id}', 'LandingpageController@show')->name('detail');
Route::resource('list', 'ListController');
Route::get('/list/search', 'ListController@search')->name('list.search');
Route::post('/subscribe', 'SubscribeController@store');
Route::get('/subscribe', 'SubscribeController@index');
Route::post('/report', 'ReportController@store')->name('report.post');
