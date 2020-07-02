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
// auth Routes
Auth::routes(); 

// payment response route
Route::get('/payment-response', function (Request $request) {
  // dd($request);
  return view('register.paymentStatus');
})->name('paymentStatus');

// User Side routes
Route::get('/', 'PostController@index')->name('homePosts');
Route::get('/category/{category:cat_code}', 'PostController@byCategory')->name('catPosts');
Route::get('/{post:slug}', 'PostController@show')->name('homePost');
Route::get('/register', 'RegUserController@register')->name('register');
Route::post('/transaction', 'TransactionController@store')->name('transaction');

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