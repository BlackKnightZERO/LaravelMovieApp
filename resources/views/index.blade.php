@extends('layouts.main')

@section('content')
    <div class="container mx-auto px-4 pt-16">
        <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">
        Popular Movies
        </h2>
        <div class="grid grid-cols-1 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-10">
            @foreach($popularMovies as $movie)
            <x-movie-card :movie="$movie" :genres="$genres"/>
            @endforeach
            
        </div>
    </div><!--end popular movies -->
    <br>
    <hr style="border-top: 1px solid grey; margin:0px 1%;">
    <div class="container mx-auto px-4 pt-16">
        <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">
        Now Playing
        </h2>
        <div class="grid grid-cols-1 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-10">
            @foreach($nowPlayingMovies as $movie)
                <x-movie-card :movie="$movie" :genres="$genres"/>
            @endforeach
        </div>
    </div>
    <!--end Now Playing -->
    <br>
    <hr style="border-top: 1px solid grey; margin:0px 1%;">
    <div class="container mx-auto px-4 pt-16">
        <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">
        Top Rated Movies
        </h2>
        <div class="grid grid-cols-1 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-10">
            @foreach($topRatedMovies as $movie)
                <x-movie-card :movie="$movie" :genres="$genres"/>
            @endforeach
        </div>
    </div><!--end New Release -->

@endsection