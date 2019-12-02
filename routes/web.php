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
    
    Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');


});


Route::get('/home', 'HomeController@index')->name('main_page');
Route::get('/stream', 'HomeController@stream')->name('stream');
Route::get('/live', 'HomeController@stream')->name('live');
Route::get('/video', 'VideoController@index')->name('videos');


Route::get('/tour', 'TourController@index')->name('tours');
Route::get('/blog', 'PostController@index')->name('blog');