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

//Route::get('/', function () {
//    return view('home');
//});

Auth::routes();

Route::get('/', 'indexPageController@index')->name('home');
Route::get('/blog', 'blogPageController@index')->name('blog');
Route::get('/blog/{id}', 'BlogController@show')->name('blog.show');
Route::view('/about', 'about')->name('about');
Route::view('/sign-in', 'auth.sign-in')->name('sign-in');
Route::view('/contact', 'contact')->name('contact');
Route::view('/home', 'home')->name('homePage');
Route::view('/userProfile', 'UserProfile')->name('userProfile')->middleware('auth');
Route::view('/createBlog', 'createBlog')->name('createBlog');
Route::view('/updateBlog', 'updateBlog')->name('updateBlog');
Route::view('/contact', 'ContactUs')->name('contact');
Route::view('/blog-page', 'blogDetails')->name('blog-page')->middleware('auth');
