<?php

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

 Route::get('/', 'PageController@getIndex')->name('index');


 Route::get('movie_list','PageController@getMovieList')->name('movie_list');

 Route::get('/movie_detail/{id}', 'PageController@getMovieDetail')->name('movie_detail');

 Route::get('/series_detail/{id}', 'PageController@getSeriesDetail')->name('series_detail');

 Route::get('celeb_list','PageController@getCelebList')->name('celeb_list'); 
 Route::get('celeb_detail','PageController@getCelebDetail')->name('celeb_detail');

 Route::get('blog_list','PageController@getBlogList')->name('blog_list');
 Route::get('blog_detail','PageController@getBlogDetail')->name('blog_detail');

 Route::get('user_profile','PageController@getUserProfile')->name('user_profile');
 Route::get('user_fav','PageController@getUserFav')->name('user_fav');