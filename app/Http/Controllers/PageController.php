<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PageController extends Controller
{
    //
    public function getIndex(){
    	$popular = Http::withToken(config('services.tmdb.token'))->get('https://api.themoviedb.org/3/movie/popular')->json()['results'];
    	$coming = Http::withToken(config('services.tmdb.token'))->get('https://api.themoviedb.org/3/movie/upcoming')->json()['results'];
    	$toprated = Http::withToken(config('services.tmdb.token'))->get('https://api.themoviedb.org/3/movie/top_rated')->json()['results'];
    	$now = Http::withToken(config('services.tmdb.token'))->get('https://api.themoviedb.org/3/movie/now_playing')->json()['results'];



    	$popularTV = Http::withToken(config('services.tmdb.token'))->get('https://api.themoviedb.org/3/tv/popular')->json()['results'];
    	$comingTV = Http::withToken(config('services.tmdb.token'))->get('https://api.themoviedb.org/3/tv/airing_today')->json()['results'];
    	$topratedTV = Http::withToken(config('services.tmdb.token'))->get('https://api.themoviedb.org/3/tv/top_rated')->json()['results'];
    	$onair = Http::withToken(config('services.tmdb.token'))->get('https://api.themoviedb.org/3/tv/on_the_air')->json()['results'];

    	
    	return view('layouts.index', compact('popular','coming','toprated','now','popularTV','comingTV','topratedTV','onair'));
    }

    public function getMovieList(){
    	return view('layouts.movie_list');
    }
    public function getMovieDetail($id){
    	$movie_detail = Http::withToken(config('services.tmdb.token'))
    	->get('https://api.themoviedb.org/3/movie/'.$id.'?append_to_response=credits,videos,images,reviews,similar')
    	->json();
    	dump($movie_detail);
    	
    	return view('layouts.movie_detail',compact('movie_detail'));
    }

    public function getSeriesDetail($id){

    	return view('layouts.series_detail');
    }

    public function getCelebList(){
    	return view('layouts.celeb_list');
    }
    public function getCelebDetail(){
    	return view('layouts.celeb_detail');
    }
    public function getBlogList(){
    	return view('layouts.blog_list');
    }
    public function getBlogDetail(){
    	return view('layouts.blog_detail');
    }



    public function getUserProfile(){
    	return view('layouts.user_profile');
    }

    public function getUserFav(){
    	return view('layouts.user_fav');
    }




}
