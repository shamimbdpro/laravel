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


Route::get('/', function () {
    return view('welcome');
});
*/
Auth::routes();
// Website

//Route::get('/home', 'HomeController@index')->name(''); defult login
Route::get('/', 'WebsiteController@index')->name('index');

Route::get('/about', 'WebsiteController@about')->name('');
Route::get('/contact', 'WebsiteController@contact')->name('contact');
Route::get('/service', 'WebsiteController@service')->name('');
Route::get('/portfolio', 'WebsiteController@portfolio')->name('');
Route::get('/portfolio/single', 'WebsiteController@portfolio_single')->name('');
Route::get('/bloggrid', 'WebsiteController@blog_grid')->name('');
Route::get('/bloggrid/single', 'WebsiteController@blog_single')->name('');
Route::post('insert','WebsiteController@insert')->name('insert');

// Admin
Route::get('/admin','AdminController@index')->name('deshboard');
Route::get('all-user','UserController@index')->name('user');
Route::get('Enactive-user/{id}','UserController@Enactive_user')->name('Enactive');
Route::get('active-user/{id}','UserController@active_user')->name('active');
Route::get('contactus','ContactusController@index')->name('contactus');
Route::get('contact-view/{id}','ContactusController@view')->name('contactview');
Route::get('trash-message/{id}','ContactusController@trash')->name('trash');
Route::get('social-media','ManagesocialController@social')->name('social');
Route::post('update_social','ManagesocialController@update_social')->name('update_social');
Route::get('RecycleBin','recycle\RecyleController@index')->name('RecycleBin');
Route::get('restore/{id}','recycle\RecyleController@restor_trash')->name('restore');
Route::get('hard_delete/{id}','recycle\RecyleController@hard_delete')->name('delete');

/************** banners ******************/
Route::get('/banner', 'BannerController@index')->name('all-banner');
Route::get('/show-banner', 'BannerController@show_banner_form')->name('show-banner');
Route::post('/add-banner', 'BannerController@add')->name('add-banner');
Route::get('edit-banner/{id}','BannerController@edit')->name('edit-banner');
Route::post('update-banner/{id}','BannerController@update')->name('update-banner');
Route::get('bantrash/{id}','BannerController@delete')->name('ban_trash');

  // recycle banner
Route::get('ban_recycle','recycle\bannerController@index')->name('recycle_banner');
Route::get('ban_restore/{id}','recycle\bannerController@restor_trash')->name('ban_restore');
Route::get('delete_ban/{id}','recycle\bannerController@hard_delete')->name('ban_delete');
