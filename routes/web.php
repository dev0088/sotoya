<?php

// use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/mentions', 'HomeController@mentions')->name('mentions');
Route::get('/faq', 'HomeController@faq')->name('faq');
Route::get('/cgv', 'HomeController@cgv')->name('cgv');
Route::get('/contact', 'HomeController@contact')->name('contact');
Route::get('/about', 'HomeController@about')->name('about');


Route::get('/part', 'PartController@index')->name('part');
Route::get('/part/{joinery}', 'PartController@joinery')->name('part_joinery');
Route::post('/part_summary', 'PartController@summary')->name('part_summary');
Route::get('/account_part', 'PartController@account')->name('account_part');
Route::get('/account_part_info', 'PartController@info')->name('account_part_info');
Route::get('/account_part_projects', 'PartController@projects')->name('account_part_projects');
Route::get('/account_part_his', 'PartController@history')->name('account_part_his');
Route::post('/modifyinfo_part', 'PartController@modifyinfo')->name('modifyinfo_part');
Route::post('/record_order_part', 'PartController@recordorder')->name('record_order_part');
Route::get('/order_part/{id}', 'PartController@order')->name('order_part')->middleware('order');
Route::get('/modify_order_part/{id}', 'PartController@modifyorder')->name('modify_order_part')->middleware('order');
Route::post('/modify_order_part', 'PartController@updateorder')->name('update_order_part');
Route::get('/delete_order_part/{id}', 'PartController@deleteorder')->name('delete_order_part')->middleware('order');;


Route::get('/pro', 'ProController@index')->name('pro');
Route::get('/account_pro', 'ProController@account')->name('account_pro');
Route::get('/account_pro_projects', 'ProController@projects')->name('account_pro_projects');
Route::get('/account_pro_his', 'ProController@history')->name('account_pro_his');
Route::get('/account_pro_info', 'ProController@info')->name('account_pro_info');
Route::post('/modifyinfo_pro', 'ProController@modifyinfo')->name('modifyinfo_pro');
Route::post('/record_order_pro', 'ProController@recordorder')->name('record_order_pro');
Route::get('/account_pro_projects/{id}', 'ProController@projects')->name('account_pro_projects_id')->middleware('project');
Route::get('/delete_project_pro/{id}', 'ProController@deleteproject')->name('delete_project_pro')->middleware('project');
Route::get('/modify_order_pro/{id}', 'ProController@modifyorder')->name('modify_order_pro')->middleware('order');
Route::post('/modify_order_pro', 'ProController@updateorder')->name('update_order_pro');
Route::get('/delete_order_pro/{id}', 'ProController@deleteorder')->name('delete_order_pro')->middleware('order');
Route::post('/create_project_pro', 'ProController@createproject')->name('create_project_pro');














