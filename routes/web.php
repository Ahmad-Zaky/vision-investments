<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// payment response route
<<<<<<< HEAD
Route::get('/subscribe', 'SubscriptionController@subscribe')->name('subscribe');
Route::post('/request', 'SubscriptionController@request')->name('request');
Route::get('/response', 'SubscriptionController@response')->name('response');
Route::get('/payment', 'SubscriptionController@payment')->name('payment');
Route::get('/payment-fawry', 'SubscriptionController@fawry')->name('paymentFawry');
Route::get('/payment-fawry-callback', 'SubscriptionController@fawryCallBack')->name('paymentFawryCallback');
Route::get('/payment-fawry-callback-response', 'SubscriptionController@fawryCallbackResponse')->name('payFawryCallResp');
=======
Route::post('/request', 'TransactionController@request')->name('request');
Route::get('/response', 'TransactionController@response')->name('response');
Route::get('/payment', 'RegUserController@payment')->name('payment');
>>>>>>> cf704e62529f0efa54daf011aede787371eced0d

// auth Routes
Auth::routes(); 

// User Side routes
<<<<<<< HEAD
Route::get('/', 'PostController@index')->name('home-vision');
=======
Route::get('/', 'PostController@index')->name('homePosts');
>>>>>>> cf704e62529f0efa54daf011aede787371eced0d
Route::get('/category/{category:cat_code}', 'PostController@byCategory')->name('catPosts');
Route::get('/{post:slug}', 'PostController@show')->name('homePost');

// ADMIN Panel routes
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
  Route::get('/home', 'HomeController@index')->name('home');
  
  
  // Users Routes
  Route::get('/user-card', 'RegUserController@index')->name('user-card');
  Route::get('/users', 'RegUserController@index')->name('users');
  Route::get('/user/{user}', 'RegUserController@show')->name('user');

  /***  Posts Routes ***/

  // Read
  Route::get('/post-card', 'PostController@indexCardAdmin')->name('post-card');
  Route::get('/posts', 'PostController@indexAdmin')->name('posts');
  Route::get('/post/{post}', 'PostController@showAdmin')->name('post');
  
  // create
  Route::get('/posts/create', 'PostController@createAdmin')->name('createPost');
  Route::post('/posts', 'PostController@storeAdmin')->name('storePost');
  
  // update
  Route::get('/posts/{post}/edit', 'PostController@editAdmin')->name('editPost');
  Route::put('/posts/{post}/', 'PostController@updateAdmin')->name('updatePost');
});