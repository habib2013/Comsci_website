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

// Route::get('/', function () {
//     return view('home');
// });

Auth::routes();


Route::get('/p', 'PostsController@create')->name('createpost');
Route::get('/p/{post}', 'PostsController@show');
Route::post('/p/store', 'PostsController@store');

Route::get('/about', 'HomeController@about')->name('about');
Route::get('/', 'CoursesController@showcourse');
Route::get('/showlist', 'CoursesController@showlist');
Route::get('/home', 'CoursesController@showcourse');
Route::resource('/course','CoursesController');

//Route::get('/aboutme', 'HomeController@aboutme')->name('aboutme');
Route::get('/test', 'HomeController@testfollow')->name('testfollow');
Route::get('/profile/{user}', 'ProfilesController@index')->name('profile.show');

Route::get('/profile/{user}/edit', 'ProfilesController@edit')->name('profile.edit');

Route::get('/p/{post}/edit', 'PostsController@edit')->name('post.edit');
Route::put('/post/{post}', 'PostsController@update')->name('posts.update');
Route::post('/post/{post}', 'PostsController@destroy')->name('posts.update');

Route::patch('/profile/{user}', 'ProfilesController@update')->name('profile.update');
Route::get('/showteacher/{user}', 'ProfilesController@showteacher');
