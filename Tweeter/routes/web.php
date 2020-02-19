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

Route::get('profile', 'ProfileController@show');

Route::get('profile/editProfile', 'ProfileController@editProfile');

Route::post('profile/updateProfile', 'ProfileController@updateProfile');


Route::get('tweetfeeds', 'TweetFeedController@show');

Route::get('/tweetfeeds/postTweet', 'TweetFeedController@postTweet');

Route::get('/tweetfeeds/deleteTweet', 'TweetFeedController@deleteTweet');

Route::get('/tweetfeeds/editTweet', 'TweetFeedController@editTweet');

Route::post('/tweetfeeds/updateTweet', 'TweetFeedController@updateTweet');


Route::get('/followerprofiles', 'TweetFeedController@showAllUsers');

Route::get('/followerprofiles/followUsers', 'TweetFeedController@followUsers');

Route::get('/followerprofiles/UnfollowUsers', 'TweetFeedController@UnfollowUsers');



Route::post('/tweetfeeds/likesTweet', 'TweetFeedController@likesTweet');

Route::get('/tweetfeeds/commentsTweet', 'TweetFeedController@commentsTweet');

Route::get('/tweetfeeds/DeleteCommentsTweet', 'TweetFeedController@DeleteCommentsTweet');

Route::post('/tweetfeeds/editComments', 'TweetFeedController@editComments');








Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

