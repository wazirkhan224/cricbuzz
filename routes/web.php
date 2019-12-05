<?php

Route::get('/clear',function(){
    Artisan::call('config:clear');
    Artisan::call('cache:clear');
    Artisan::call('config:cache');
});

Auth::routes();

//home controller
Route::get('/','HomeController@index');

// Auser
Route::post('/loginn','User\AuthController@login')->name('user.login');
Route::post('/user/register','User\AuthController@register')->name('user.register');

//Admin
Route::prefix('admin')->group(function()
{
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('dashboard','AdminController@index')->name('admin_dashboard')->middleware('auth:admin');

    // live link
    Route::get('/live-streaming','AdminController@liveStreaming')->name('admin_live_streaming')->middleware('auth:admin');
    Route::post('/streaming','AdminController@liveLink')->name('admin_live_create')->middleware('auth:admin');

    //vidoes
    Route::get('/video','AdminController@vidoes')->name('admin_videos')->middleware('auth:admin');
    Route::post('/video-link','AdminController@vidoeLink')->name('admin_videos-link')->middleware('auth:admin');
    Route::get('/video-edit/{id}','AdminController@editVideo')->name('admin_videos-edit')->middleware('auth:admin');
    Route::put('/video-update/{id}','AdminController@updateVideo')->name('admin_videos-update')->middleware('auth:admin');
    Route::get('/video-delete/{id}','AdminController@deleteVideo')->name('admin_videos-delete')->middleware('auth:admin');

    //posts
    Route::get('/post','AdminController@post')->name('admin_post')->middleware('auth:admin');
    Route::post('/post-create','AdminController@postCreate')->name('admin_post-create')->middleware('auth:admin');
    Route::get('/post-edit/{id}','AdminController@editPost')->name('admin_post-edit')->middleware('auth:admin');
    Route::put('/post-update/{id}','AdminController@updatePost')->name('admin_post-update')->middleware('auth:admin');
    Route::get('/post-delete/{id}','AdminController@deletePost')->name('admin_post-delete')->middleware('auth:admin');

    // Read more post option
    Route::get('/post-show/{id}/{slug}','AdminController@showPost')->name('admin_post-show')->middleware('auth:admin');
    Route::get('/post-show-detail/{id}/{slug}','AdminController@showPostDetail')->name('admin_post-showw')->middleware('auth:admin');

    //upcoming series
    Route::get('/tour/','AdminController@upcomentTour')->name('admin_upcoming-tour')->middleware('auth:admin');
    Route::post('/tour-detail/','AdminController@tourDetail')->name('admin_tour-detail')->middleware('auth:admin');
    Route::get('/tour-edit/{id}','AdminController@editTour')->name('admin_tour-edit')->middleware('auth:admin');
    Route::put('/tour-update/{id}','AdminController@updateTour')->name('admin_tour-update')->middleware('auth:admin');

    Route::get('/tour-delete/{id}','AdminController@deleteTour')->name('admin_tour-delete')->middleware('auth:admin');


    Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
});

//website pages
Route::get('/home', 'HomeController@index')->name('main_page');
Route::get('/stream', 'HomeController@stream')->name('stream');
Route::get('/live', 'HomeController@stream')->name('live');
Route::get('/video', 'VideoController@index')->name('videos');

Route::get('/tour', 'TourController@index')->name('tours');
Route::get('/blog', 'PostController@index')->name('blog');
