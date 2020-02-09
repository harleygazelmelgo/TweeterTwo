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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('userProfile', 'ProfileController@show');

Route::get('userProfile/editBio', 'ProfileController@editBio');

Route::get('userProfile/updateBio', 'ProfileController@updateBio');

Route::get('profile', 'TweetFeedController@show');

Route::get('/profile/postTweet', 'TweetFeedController@postTweet');

Route::get('/profile/deleteTweet', 'TweetFeedController@deleteTweet');

Route::get('/profile/editTweet', 'TweetFeedController@editTweet');

Route::get('/profile/updateTweet', 'TweetFeedController@updateTweet');

Route::get('/showProfiles', 'TweetFeedController@showAllUsers');




