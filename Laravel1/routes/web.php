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
//------------首頁專用---------------//
/*
一開始進頁面用
*/
Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

//-------------登入頁用---------------//
/*

/*
導向MemberController
*/
Route::get('loginpage', 'MemberController@Login');


Route::get('registerpage', 'MemberController@register');
Route::post('registercheck', function(){
    return "Registered";
});

Route::post('logincheck', 'MemberController@LoginCheck');
    //若驗證成功，將網址傳送至首頁，並帶著Session

Route::get('logoutpage', 'MemberController@Logout');