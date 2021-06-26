<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
//
//Route::get('/userr', function (Request $request) {
//    return $request->user();
//});

Route::get('/userr', function (Request $request) {
    return ["name"=>"theodore"];
});

Route::get('/homem', 'DiscussionController@index')->name('dis');

Route::resource('Discussion','DiscussionController');
Route::resource('Reply','ReplyController');
Route::resource('Comment','CommentController');
Route::resource('Section','SectionController');

