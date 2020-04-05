@extends('layouts.main')

@section('content')
    <div class="container mx-auto px-4 pt-16">
        <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">
        Popular Movies
        </h2>
        <div class="grid grid-cols-1 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-10">
            @foreach($popularMovies as $movie)
            <div class="mt-8"> <!-- start one grid -->
                <a href="#">
                    <img src="{{ 'https://image.tmdb.org/t/p/w500'.$movie['poster_path'] }}" alt="Poster" srcset="" class="hover:opacity-75 transition ease-in-out duration-150">
                </a>
                <div class="mt-2">
                    <a href="#" class="text-lg mt-2 hover:text-gray-400">
                        {{ $movie['title'] }}
                    </a>
                </div>    
                <div class="flex items-center text-gray-400 text-sm mt-1">
                    <span class="ml-1">
                    <img src="/img/star.svg" alt="Replica" srcset="" class="w-3 h-3">
                    </span>
                    <span class="ml-2">{{ $movie['vote_average'] *10 .'%' }}</span> 
                    <span class="mx-2">|</span>
                    <span>{{ \Carbon\Carbon::parse($movie['release_date'])->format('M d, Y') }}</span>
                </div>
                <div class="text-gray-400 text-sm">
                    @foreach ( $movie['genre_ids'] as $genre )
                    {{ $genres->get($genre) }}
                    @if(!$loop->last),@endif
                    @endforeach
                </div>
            </div><!--end one grid -->
            @endforeach
            
        </div>
    </div><!--end popular movies -->

    <div class="container mx-auto px-4 pt-16">
        <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">
        Now Playing
        </h2>
        <div class="grid grid-cols-1 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-10">

            <div class="mt-8"> <!-- start one grid -->
                <a href="#">
                    <img src="/img/rep.jpg" alt="Replica" srcset="" class="hover:opacity-75 transition ease-in-out duration-150">
                </a>

                <div class="mt-2">
                    <a href="#" class="text-lg mt-2 hover:text-gray-400">
                        Replica
                    </a>
                </div>    
                <div class="flex items-center text-gray-400 text-sm mt-1">
                    <span class="ml-1">
                    <img src="/img/star.svg" alt="Replica" srcset="" class="w-3 h-3">
                    </span>
                    <span class="ml-2">85%</span> 
                    <span class="mx-2">|</span>
                    <span>Feb 28,2020</span>
                </div>

                <div class="text-gray-400 text-sm">
                    Action, Thriller, Commedy
                </div>

            </div><!--end one grid -->

            <div class="mt-8"> <!-- start one grid -->
                <a href="#">
                    <img src="/img/rep.jpg" alt="Replica" srcset="" class="hover:opacity-75 transition ease-in-out duration-150">
                </a>

                <div class="mt-2">
                    <a href="#" class="text-lg mt-2 hover:text-gray-400">
                        Replica
                    </a>
                </div>    
                <div class="flex items-center text-gray-400 text-sm mt-1">
                    <span class="ml-1">
                    <img src="/img/star.svg" alt="Replica" srcset="" class="w-3 h-3">
                    </span>
                    <span class="ml-2">85%</span> 
                    <span class="mx-2">|</span>
                    <span>Feb 28,2020</span>
                </div>

                <div class="text-gray-400 text-sm">
                    Action, Thriller, Commedy
                </div>

            </div><!--end one grid -->

            <div class="mt-8"> <!-- start one grid -->
                <a href="#">
                    <img src="/img/rep.jpg" alt="Replica" srcset="" class="hover:opacity-75 transition ease-in-out duration-150">
                </a>

                <div class="mt-2">
                    <a href="#" class="text-lg mt-2 hover:text-gray-400">
                        Replica
                    </a>
                </div>    
                <div class="flex items-center text-gray-400 text-sm mt-1">
                    <span class="ml-1">
                    <img src="/img/star.svg" alt="Replica" srcset="" class="w-3 h-3">
                    </span>
                    <span class="ml-2">85%</span> 
                    <span class="mx-2">|</span>
                    <span>Feb 28,2020</span>
                </div>

                <div class="text-gray-400 text-sm">
                    Action, Thriller, Commedy
                </div>

            </div><!--end one grid -->

            <div class="mt-8"> <!-- start one grid -->
                <a href="#">
                    <img src="/img/rep.jpg" alt="Replica" srcset="" class="hover:opacity-75 transition ease-in-out duration-150">
                </a>

                <div class="mt-2">
                    <a href="#" class="text-lg mt-2 hover:text-gray-400">
                        Replica
                    </a>
                </div>    
                <div class="flex items-center text-gray-400 text-sm mt-1">
                    <span class="ml-1">
                    <img src="/img/star.svg" alt="Replica" srcset="" class="w-3 h-3">
                    </span>
                    <span class="ml-2">85%</span> 
                    <span class="mx-2">|</span>
                    <span>Feb 28,2020</span>
                </div>

                <div class="text-gray-400 text-sm">
                    Action, Thriller, Commedy
                </div>

            </div><!--end one grid -->

            <div class="mt-8"> <!-- start one grid -->
                <a href="#">
                    <img src="/img/rep.jpg" alt="Replica" srcset="" class="hover:opacity-75 transition ease-in-out duration-150">
                </a>

                <div class="mt-2">
                    <a href="#" class="text-lg mt-2 hover:text-gray-400">
                        Replica
                    </a>
                </div>    
                <div class="flex items-center text-gray-400 text-sm mt-1">
                    <span class="ml-1">
                    <img src="/img/star.svg" alt="Replica" srcset="" class="w-3 h-3">
                    </span>
                    <span class="ml-2">85%</span> 
                    <span class="mx-2">|</span>
                    <span>Feb 28,2020</span>
                </div>

                <div class="text-gray-400 text-sm">
                    Action, Thriller, Commedy
                </div>

            </div><!--end one grid -->

            <div class="mt-8"> <!-- start one grid -->
                <a href="#">
                    <img src="/img/rep.jpg" alt="Replica" srcset="" class="hover:opacity-75 transition ease-in-out duration-150">
                </a>

                <div class="mt-2">
                    <a href="#" class="text-lg mt-2 hover:text-gray-400">
                        Replica
                    </a>
                </div>    
                <div class="flex items-center text-gray-400 text-sm mt-1">
                    <span class="ml-1">
                    <img src="/img/star.svg" alt="Replica" srcset="" class="w-3 h-3">
                    </span>
                    <span class="ml-2">85%</span> 
                    <span class="mx-2">|</span>
                    <span>Feb 28,2020</span>
                </div>

                <div class="text-gray-400 text-sm">
                    Action, Thriller, Commedy
                </div>

            </div><!--end one grid -->

            <div class="mt-8"> <!-- start one grid -->
                <a href="#">
                    <img src="/img/rep.jpg" alt="Replica" srcset="" class="hover:opacity-75 transition ease-in-out duration-150">
                </a>

                <div class="mt-2">
                    <a href="#" class="text-lg mt-2 hover:text-gray-400">
                        Replica
                    </a>
                </div>    
                <div class="flex items-center text-gray-400 text-sm mt-1">
                    <span class="ml-1">
                    <img src="/img/star.svg" alt="Replica" srcset="" class="w-3 h-3">
                    </span>
                    <span class="ml-2">85%</span> 
                    <span class="mx-2">|</span>
                    <span>Feb 28,2020</span>
                </div>

                <div class="text-gray-400 text-sm">
                    Action, Thriller, Commedy
                </div>

            </div><!--end one grid -->

            <div class="mt-8"> <!-- start one grid -->
                <a href="#">
                    <img src="/img/rep.jpg" alt="Replica" srcset="" class="hover:opacity-75 transition ease-in-out duration-150">
                </a>

                <div class="mt-2">
                    <a href="#" class="text-lg mt-2 hover:text-gray-400">
                        Replica
                    </a>
                </div>    
                <div class="flex items-center text-gray-400 text-sm mt-1">
                    <span class="ml-1">
                    <img src="/img/star.svg" alt="Replica" srcset="" class="w-3 h-3">
                    </span>
                    <span class="ml-2">85%</span> 
                    <span class="mx-2">|</span>
                    <span>Feb 28,2020</span>
                </div>

                <div class="text-gray-400 text-sm">
                    Action, Thriller, Commedy
                </div>

            </div><!--end one grid -->

            <div class="mt-8"> <!-- start one grid -->
                <a href="#">
                    <img src="/img/rep.jpg" alt="Replica" srcset="" class="hover:opacity-75 transition ease-in-out duration-150">
                </a>

                <div class="mt-2">
                    <a href="#" class="text-lg mt-2 hover:text-gray-400">
                        Replica
                    </a>
                </div>    
                <div class="flex items-center text-gray-400 text-sm mt-1">
                    <span class="ml-1">
                    <img src="/img/star.svg" alt="Replica" srcset="" class="w-3 h-3">
                    </span>
                    <span class="ml-2">85%</span> 
                    <span class="mx-2">|</span>
                    <span>Feb 28,2020</span>
                </div>

                <div class="text-gray-400 text-sm">
                    Action, Thriller, Commedy
                </div>

            </div><!--end one grid -->

            <div class="mt-8"> <!-- start one grid -->
                <a href="#">
                    <img src="/img/rep.jpg" alt="Replica" srcset="" class="hover:opacity-75 transition ease-in-out duration-150">
                </a>

                <div class="mt-2">
                    <a href="#" class="text-lg mt-2 hover:text-gray-400">
                        Replica
                    </a>
                </div>    
                <div class="flex items-center text-gray-400 text-sm mt-1">
                    <span class="ml-1">
                    <img src="/img/star.svg" alt="Replica" srcset="" class="w-3 h-3">
                    </span>
                    <span class="ml-2">85%</span> 
                    <span class="mx-2">|</span>
                    <span>Feb 28,2020</span>
                </div>

                <div class="text-gray-400 text-sm">
                    Action, Thriller, Commedy
                </div>

            </div><!--end one grid -->
            
            
            
        </div>
    </div>
    <!--end Now Playing -->

    <div class="container mx-auto px-4 pt-16">
        <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">
        New Release
        </h2>
        <div class="grid grid-cols-1 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-10">

            <div class="mt-8"> <!-- start one grid -->
                <a href="#">
                    <img src="/img/rep.jpg" alt="Replica" srcset="" class="hover:opacity-75 transition ease-in-out duration-150">
                </a>

                <div class="mt-2">
                    <a href="#" class="text-lg mt-2 hover:text-gray-400">
                        Replica
                    </a>
                </div>    
                <div class="flex items-center text-gray-400 text-sm mt-1">
                    <span class="ml-1">
                    <img src="/img/star.svg" alt="Replica" srcset="" class="w-3 h-3">
                    </span>
                    <span class="ml-2">85%</span> 
                    <span class="mx-2">|</span>
                    <span>Feb 28,2020</span>
                </div>

                <div class="text-gray-400 text-sm">
                    Action, Thriller, Commedy
                </div>

            </div><!--end one grid -->

            <div class="mt-8"> <!-- start one grid -->
                <a href="#">
                    <img src="/img/rep.jpg" alt="Replica" srcset="" class="hover:opacity-75 transition ease-in-out duration-150">
                </a>

                <div class="mt-2">
                    <a href="#" class="text-lg mt-2 hover:text-gray-400">
                        Replica
                    </a>
                </div>    
                <div class="flex items-center text-gray-400 text-sm mt-1">
                    <span class="ml-1">
                    <img src="/img/star.svg" alt="Replica" srcset="" class="w-3 h-3">
                    </span>
                    <span class="ml-2">85%</span> 
                    <span class="mx-2">|</span>
                    <span>Feb 28,2020</span>
                </div>

                <div class="text-gray-400 text-sm">
                    Action, Thriller, Commedy
                </div>

            </div><!--end one grid -->

            <div class="mt-8"> <!-- start one grid -->
                <a href="#">
                    <img src="/img/rep.jpg" alt="Replica" srcset="" class="hover:opacity-75 transition ease-in-out duration-150">
                </a>

                <div class="mt-2">
                    <a href="#" class="text-lg mt-2 hover:text-gray-400">
                        Replica
                    </a>
                </div>    
                <div class="flex items-center text-gray-400 text-sm mt-1">
                    <span class="ml-1">
                    <img src="/img/star.svg" alt="Replica" srcset="" class="w-3 h-3">
                    </span>
                    <span class="ml-2">85%</span> 
                    <span class="mx-2">|</span>
                    <span>Feb 28,2020</span>
                </div>

                <div class="text-gray-400 text-sm">
                    Action, Thriller, Commedy
                </div>

            </div><!--end one grid -->

            <div class="mt-8"> <!-- start one grid -->
                <a href="#">
                    <img src="/img/rep.jpg" alt="Replica" srcset="" class="hover:opacity-75 transition ease-in-out duration-150">
                </a>

                <div class="mt-2">
                    <a href="#" class="text-lg mt-2 hover:text-gray-400">
                        Replica
                    </a>
                </div>    
                <div class="flex items-center text-gray-400 text-sm mt-1">
                    <span class="ml-1">
                    <img src="/img/star.svg" alt="Replica" srcset="" class="w-3 h-3">
                    </span>
                    <span class="ml-2">85%</span> 
                    <span class="mx-2">|</span>
                    <span>Feb 28,2020</span>
                </div>

                <div class="text-gray-400 text-sm">
                    Action, Thriller, Commedy
                </div>

            </div><!--end one grid -->

            <div class="mt-8"> <!-- start one grid -->
                <a href="#">
                    <img src="/img/rep.jpg" alt="Replica" srcset="" class="hover:opacity-75 transition ease-in-out duration-150">
                </a>

                <div class="mt-2">
                    <a href="#" class="text-lg mt-2 hover:text-gray-400">
                        Replica
                    </a>
                </div>    
                <div class="flex items-center text-gray-400 text-sm mt-1">
                    <span class="ml-1">
                    <img src="/img/star.svg" alt="Replica" srcset="" class="w-3 h-3">
                    </span>
                    <span class="ml-2">85%</span> 
                    <span class="mx-2">|</span>
                    <span>Feb 28,2020</span>
                </div>

                <div class="text-gray-400 text-sm">
                    Action, Thriller, Commedy
                </div>

            </div><!--end one grid -->

            <div class="mt-8"> <!-- start one grid -->
                <a href="#">
                    <img src="/img/rep.jpg" alt="Replica" srcset="" class="hover:opacity-75 transition ease-in-out duration-150">
                </a>

                <div class="mt-2">
                    <a href="#" class="text-lg mt-2 hover:text-gray-400">
                        Replica
                    </a>
                </div>    
                <div class="flex items-center text-gray-400 text-sm mt-1">
                    <span class="ml-1">
                    <img src="/img/star.svg" alt="Replica" srcset="" class="w-3 h-3">
                    </span>
                    <span class="ml-2">85%</span> 
                    <span class="mx-2">|</span>
                    <span>Feb 28,2020</span>
                </div>

                <div class="text-gray-400 text-sm">
                    Action, Thriller, Commedy
                </div>

            </div><!--end one grid -->

            <div class="mt-8"> <!-- start one grid -->
                <a href="#">
                    <img src="/img/rep.jpg" alt="Replica" srcset="" class="hover:opacity-75 transition ease-in-out duration-150">
                </a>

                <div class="mt-2">
                    <a href="#" class="text-lg mt-2 hover:text-gray-400">
                        Replica
                    </a>
                </div>    
                <div class="flex items-center text-gray-400 text-sm mt-1">
                    <span class="ml-1">
                    <img src="/img/star.svg" alt="Replica" srcset="" class="w-3 h-3">
                    </span>
                    <span class="ml-2">85%</span> 
                    <span class="mx-2">|</span>
                    <span>Feb 28,2020</span>
                </div>

                <div class="text-gray-400 text-sm">
                    Action, Thriller, Commedy
                </div>

            </div><!--end one grid -->

            <div class="mt-8"> <!-- start one grid -->
                <a href="#">
                    <img src="/img/rep.jpg" alt="Replica" srcset="" class="hover:opacity-75 transition ease-in-out duration-150">
                </a>

                <div class="mt-2">
                    <a href="#" class="text-lg mt-2 hover:text-gray-400">
                        Replica
                    </a>
                </div>    
                <div class="flex items-center text-gray-400 text-sm mt-1">
                    <span class="ml-1">
                    <img src="/img/star.svg" alt="Replica" srcset="" class="w-3 h-3">
                    </span>
                    <span class="ml-2">85%</span> 
                    <span class="mx-2">|</span>
                    <span>Feb 28,2020</span>
                </div>

                <div class="text-gray-400 text-sm">
                    Action, Thriller, Commedy
                </div>

            </div><!--end one grid -->

            <div class="mt-8"> <!-- start one grid -->
                <a href="#">
                    <img src="/img/rep.jpg" alt="Replica" srcset="" class="hover:opacity-75 transition ease-in-out duration-150">
                </a>

                <div class="mt-2">
                    <a href="#" class="text-lg mt-2 hover:text-gray-400">
                        Replica
                    </a>
                </div>    
                <div class="flex items-center text-gray-400 text-sm mt-1">
                    <span class="ml-1">
                    <img src="/img/star.svg" alt="Replica" srcset="" class="w-3 h-3">
                    </span>
                    <span class="ml-2">85%</span> 
                    <span class="mx-2">|</span>
                    <span>Feb 28,2020</span>
                </div>

                <div class="text-gray-400 text-sm">
                    Action, Thriller, Commedy
                </div>

            </div><!--end one grid -->

            <div class="mt-8"> <!-- start one grid -->
                <a href="#">
                    <img src="/img/rep.jpg" alt="Replica" srcset="" class="hover:opacity-75 transition ease-in-out duration-150">
                </a>

                <div class="mt-2">
                    <a href="#" class="text-lg mt-2 hover:text-gray-400">
                        Replica
                    </a>
                </div>    
                <div class="flex items-center text-gray-400 text-sm mt-1">
                    <span class="ml-1">
                    <img src="/img/star.svg" alt="Replica" srcset="" class="w-3 h-3">
                    </span>
                    <span class="ml-2">85%</span> 
                    <span class="mx-2">|</span>
                    <span>Feb 28,2020</span>
                </div>

                <div class="text-gray-400 text-sm">
                    Action, Thriller, Commedy
                </div>

            </div><!--end one grid -->
            
            
            
        </div>
    </div><!--end New Release -->

@endsection