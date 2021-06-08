@extends('Layer.mainFrame')
@section('content')
<div class="sort-nav bg-dark pt-2 pb-2">
   <div class="container-fluid d-flex">
   <p class="p-2 m-0 fs-13 color-sv">Sort by:</p>
    @if($type == 'movie')
    <ul class="navbar-nav flex-row mb-0">
        <li class="nav-item p-2 m-auto"><a href="{{route('display',['type'=>'movie','sort'=>'popular','page'=>1])}}" class="fs-12 text-white">Popular</a></li>
        <li class="nav-item p-2 m-auto"><a href="{{route('display',['type'=>'movie','sort'=>'top_rated','page'=>1])}}" class="fs-12 text-white">Top rated</a></li>
        <li class="nav-item p-2 m-auto"><a href="{{route('display',['type'=>'movie','sort'=>'top_rated','page'=>1])}}" class="fs-12 text-white">Now Playing</a></li>
        <li class="nav-item p-2 m-auto"><a href="#" class="fs-12 text-white">Comming Soon</a></li>
    </ul>
    @endif
   </div>
</div>
<section class="d-flex w-100  d-flex flex-direction-column justify-content-center align-items-center">
    <div class="container-fluid mt-3">
        <div class="d-grid grid-1-1-1-1-1 sort-container grid-md-1-1-1-1 grid-sm-1-1-1 grid-xs-1-1">
            @foreach($display as $show)
            <div class="show-lg w-100 p-2">
               <div class="inner-shell w-100 h-100 position-relative">
                    <img src="http://image.tmdb.org/t/p/w780/{{$show['poster_path']}}" class="w-100 h-100">
                    <div class="layer w-100 h-100 position-absolute top-0 start-0 p-2 d-flex flex-column justify-content-end">
                        <h2 class="fs-15 text-white mb-0">@if(isset($show['name'])) {{$show['name']}} @else {{$show['title']}} @endif <h2>
                        @foreach($show['genre_ids'] as $gen)
                            <span class="gen fs-11 "><a href="#" class="@if(!isset($color)) color-sv @else color-ds fw-600 @endif link-success">
                                @if(isset($genre[$gen])) 
                                {{$genre[$gen]}}
                                @elseif(isset($genreTv[$gen])) 
                                {{$genreTv[$gen]}}
                                @endif</a></span><span class="color-sv fs-12">@if(!$loop->last),@endif</span>
                        @endforeach
                    </div>
               </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<div class="pager">
   <div class="container-fluid">
        <ul class="menu navbar-nav w-100 d-flex justify-content-center flex-row mt-3">
            @php
            if($page > 1) {
                $prev  = $page - 1;
            } 
            if($page < $max) {
                $next = $page + 1;
            } 
            @endphp
            @if($page > 1) <li class="nav-item"><a href="{{route('display',['type'=>$type,'sort'=>$sort,'page'=>$prev])}}">Prev</a></li> @endif
            @if($page < $max)  <li class="nav-item"><a href="{{route('display',['type'=>$type,'sort'=>$sort,'page'=>$next])}}">Next</a></next> @endif 
        </ul>
   </div>
</div>
@endsection