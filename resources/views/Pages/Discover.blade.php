@extends('Layer.mainFrame')
@section('content')
<!-- Set up your HTML -->
<section class="d-flex w-100 side-title-sec d-flex flex-direction-column justify-content-center align-items-center">
   <div class="container-fluid d-flex pt-5">
        <div class="side-title d-flex flex-column justify-content-center pt-5">
            <h2 class="text-white title"> Popular Movie To Watch</h2>
            <p class="color-sv tagsec">Most watched movie by days</p>
        </div>
        <div class="owl-carousel auto">
            @foreach($discover as $show) 
               @include('components.show')
            @endforeach
        </div>
    </div>
</section>
<!-- Toggler Section -->
<section class="toggler mt-5">

    <div class="tb-container-pd-ed">
        <div class="d-flex align-items-center m-2">
        <h2 class="fs-13 fw-600 color-wh ">You Also May Like</h2>
        <a href="#" class="ml-auto link"> <span class="color-sv fs-12 ">View All >></span></a>
        </div>
        <div class="show-box-container  d-flex justify-content-center">
            @for($i = 0; $i < 8 ; $i++) 
                <div class="sm-show-box m-2">
                    <img src="http://image.tmdb.org/t/p/w780/{{$populartv[$i]['poster_path']}}" alt="img">
                     <div class="sm-show-box-info">
                          <h2 class="fs-12 color-wh pt-2">                         
                         @if(isset($populartv[$i]['name']))
                           {{$populartv[$i]['name']}}
                         @else 
                           {{$populartv[$i]['title']}}
                         @endif</h2>
                         <span class="fs-12 color-sv">@if($populartv[$i]['first_air_date'] !== null){{  date('Y',strtotime($populartv[$i]['first_air_date'])) }} @elseif ($populartv[$i]['release_date'] !== null) @endif</span>
                     </div>
                </div>
            @endfor
        </div>
    </div>

</section>

<div class="container-fluid mt-5">
</div>
@endsection