<?php

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
/*---------- All ----------*/
Route::get('/login', function(){
    return view('login');
});

/*---------- Staff ----------*/
Route::get('/staff', function () {
    return view('staff/index');
});

Route::get('/add', function(){
    return view('staff/add');
});

Route::get('/manage', function(){
    return view('staff/manage_staff');
});

Route::get('/showbyteacher', function(){
    return view('staff/show_staff_byteacher');
});

Route::get('/showbydate', function(){
    return view('staff/show_staff_bydate');
});

/*---------- Teacher ----------*/
Route::get('/teacher', function(){
    return view('teacher/index_teacher');
});

Route::get('/select', function(){
    return view('teacher/select');
});

Route::get('/show', function(){
    return view('teacher/show_teacher');
});
