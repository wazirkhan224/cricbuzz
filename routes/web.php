<?php



Route::get('/clear',function(){
    Artisan::call('config:clear');
    Artisan::call('cache:clear');
    Artisan::call('config:cache');
});

Auth::routes();

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

    Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
});

Route::get('/home', 'HomeController@index')->name('main_page');
Route::get('/stream', 'HomeController@stream')->name('stream');
Route::get('/live', 'HomeController@stream')->name('live');
Route::get('/video', 'VideoController@index')->name('videos');



Route::get('/tour', 'TourController@index')->name('tours');
Route::get('/blog', 'PostController@index')->name('blog');
