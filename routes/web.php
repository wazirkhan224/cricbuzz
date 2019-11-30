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

Route::get('/clear',function(){
    Artisan::call('config:clear');
    Artisan::call('cache:clear');
    Artisan::call('config:cache');
});

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


//User Routes
Route::resource('users','UsersController');

//Admin Routes

Route::prefix('admin')->group(function()
{
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('dashboard','AdminController@index')->name('admin_dashboard')->middleware('auth:admin');
    Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');

});


Route::group(['middleware' => 'auth'],function (){

Route::get('/home', 'HomeController@index')->name('main_page');
Route::get('/stream', 'HomeController@stream')->name('stream');
Route::get('/live', 'HomeController@stream')->name('live');
Route::get('/video', 'VideoController@index')->name('videos');
Route::get('/tour', 'TourController@index')->name('tours');
Route::get('/blog', 'PostController@index')->name('blog');
});
