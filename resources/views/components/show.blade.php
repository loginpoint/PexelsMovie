<div class="show">
    <img class="showImg w-100" src="http://image.tmdb.org/t/p/w780/{{$show['poster_path']}}">
    <h3 class="fs-12 fw-500 @if(!isset($color)) text-white @endif mt-2">@if(isset($show['title'])) {{$show['title']}} @else {{$show['name']}}@endif</h3>
    @foreach($show['genre_ids'] as $gen)
        <span class="gen fs-11 "><a href="#" class="@if(!isset($color)) color-sv @else color-ds fw-600 @endif link-success">
            @if(isset($genre[$gen])) 
               {{$genre[$gen]}}
            @elseif(isset($genreTv[$gen])) 
               {{$genreTv[$gen]}}
            @endif</a></span><span class="color-sv">@if(!$loop->last) , @endif</span>
    @endforeach
</div>