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

//Method > get ดึงข้อมูลต่างมาโชว์ ,post เอาข้อมูลที่ส่งไปมาเซฟใน db , put part เอาข้อมูลมาupdate db , delete ลบข้อมูลในdb

Route::get('/', 'BlogController@index');

Route::get('/main', 'BlogController@about');

Route::post('/main/main','BlogController@add');

Route::get('/show','BlogController@show');