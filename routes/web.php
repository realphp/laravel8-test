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

Route::get('/', function () {
//\Illuminate\Support\Facades\Http::post()
});

Route::any('/auth/user', function () {
    \Illuminate\Support\Facades\Log::info('user', request()->all());
    return 'allow';
});
Route::any('/auth/vhost', function () {
    \Illuminate\Support\Facades\Log::info('vhost', request()->all());
    return 'allow';
});

Route::any('/auth/resource', function () {
    \Illuminate\Support\Facades\Log::info('resource', request()->all());
    return 'allow';
});
Route::any('/auth/topic', function () {
    \Illuminate\Support\Facades\Log::info('topic', request()->all());
    return 'allow';
});

