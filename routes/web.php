<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\CommentsController;
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
    return view('auth.login');
});

Route::get('/showLogin', 'LoginController@showLoginForm')->name('showLogin');
Route::post('/login', 'LoginController@login')->name('login');

Route::prefix('admin')
    ->namespace('Admin')
    ->middleware(['auth', 'admin'])
    ->group(function(){
        Route::get('/', 'AdminController@index')
            ->name('dashboard');
        Route::get('/create', 'AdminController@create')
            ->name('request_create');
        Route::post('/store', 'AdminController@store')
            ->name('request_store');
        Route::post('/update/{id}', 'AdminController@update')
            ->name('request_update');
        Route::get('/view_ticket', 'AdminController@view')
            ->name('view.trouble_ticket');
        Route::get('/detail_ticket/{id}', 'AdminController@detail')
            ->name('detail.trouble_ticket');
        Route::post('/detail_ticket/update/{id}', 'AdminController@updatedetail')
            ->name('update_detail.trouble_ticket');
        Route::get('/destroy/{id}', 'AdminController@destroy')
            ->name('destroy.trouble_ticket');
        Route::get('/user', 'TableUserController@index')
            ->name('view.user');
        Route::get('/user/show/{id}', 'TableUserController@show')
            ->name('show.user');
        Route::post('/user/updateuser/{id}', 'TableUserController@updateuser')
            ->name('update.user');
        Route::get('/destroy/user/{id}', 'TableUserController@destroy')
            ->name('destroy.user');
        Route::get('/type', 'TypesController@index')
            ->name('view.type');
        Route::get('/create/type', 'TypesController@create')
            ->name('create.type');
        Route::post('/store/type', 'TypesController@store')
            ->name('store.type');
        Route::get('/type/show/{id}', 'TypesController@show')
            ->name('show.type');
        Route::post('/type/updatetype/{id}', 'TypesController@updatetype')
            ->name('update.type');
        Route::get('/destroy/type/{id}', 'TypesController@destroy')
            ->name('destroy.type'); 
    });

Route::post('/store/comment', 'CommentsController@store')
        ->name('store.comment');

Route::prefix('user')
    ->namespace('User')
    ->middleware(['auth', 'user'])
    ->group(function(){
        Route::get('/', 'UserController@index')
            ->name('dashboard-user');
        Route::get('/create', 'UserController@create')
            ->name('request_create');
        Route::post('/store', 'UserController@store')
            ->name('request_store');
    });
Auth::routes();