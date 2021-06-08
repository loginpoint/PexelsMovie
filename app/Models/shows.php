<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Http;
use Collection;

class shows extends Model
{
    use HasFactory;
    /*
     Get genre of movies,tv
     $type => Movie | tv
    */
    public static function genre($type) {
        $key = env('TMDB');
        $genres = Http::get("https://api.themoviedb.org/3/genre/$type/list?api_key=$key&language=en-US")->json()['genres'];
        $collection =  Collect($genres)->mapWithKeys(function($item){
           return [$item['id'] => $item['name']];
        });
        return $collection;
   }
    /* 

    Get the shows Movies

    FOR MORE DOCUMINTAION RETURN TO TMDB API

    sort => Return the movie by according to specific order
    type => Movie | Tv
    page => choose the page that you want to return 

    */
    public static function get($sort,$type,$page) 
    {
       $key = env('TMDB');
       if($sort == 'discover'){
          $request = Http::get("https://api.themoviedb.org/3/discover/$type?api_key=$key&language=en-US&sort_by=popularity.desc&include_adult=false&include_video=false&page=$page&with_watch_monetization_types=flatrate")->json();
       } else {
          $request = Http::get("https://api.themoviedb.org/3/$type/$sort?api_key=$key&language=en-US&page=$page")->json();
       }
       if(isset($request['success'])) {
            $request = null;
       } else {
            $request = $request['results'];
       }
       return $request;
    }
    /*
     Return movie , tv with specific genre
    */
    public static function searchWithGenre($genre) {
       $key    = env('TMDB');
       $type   = (!empty(self::genre('tv')[$genre])) ? 'tv' : 'movie';
       $search = Http::get("https://api.themoviedb.org/3/discover/$type?api_key=$key&&with_genres=$genre")->json()['results'];
       return $search;
    }
    /*
      
     Return movie , tv , people with specific word

    */
    public static function searchWithKey($type,$word) {
      $key    = env('TMDB');
      $search = Http::get("https://api.themoviedb.org/3/search/$type?api_key=$key&language=en-US&page=1&include_adult=false&query=$word")->json();
      return $search;
    }
    /*
    
     Return a specific show 

     Display => Movie | Tv id
     Type    => Movie | Tv

    */
    public static function hook($diplay,$type) 
    {
        $key    = env('TMDB');
        $show = Http::get("https://api.themoviedb.org/3/$type/$diplay?api_key=$key&language=en-US");
    }
    public static function page_num($type,$cat) {
      $key    = env('TMDB');
      $request = Http::get("https://api.themoviedb.org/3/$type/$cat?api_key=$key&language=en-US")->json()['total_pages'];
      return $request;
    } 
}
