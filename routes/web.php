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
    $appUrl = env("APP_URL", null);
    if (strpos($appUrl, '//' . request()->getHttpHost()) === false) {
        return redirect($appUrl);
    } else {
        return view('welcome');
    }
});
