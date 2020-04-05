@extends('layouts.main')

@section('content')
    <div class="movie-info border-b border-gray-800">
        <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row">
            <img src="/img/rep.jpg" alt="" srcset="" class="w-64 md:w-96">
            <div class="md:ml-24 text-md font-semibold">
                <h2 class="text-4xl font-semibold">
                    Replica
                </h2>
                <div class="flex flex-wrap items-center text-gray-400 text-sm mt-1">
                    <span class="ml-1">
                    <img src="/img/star.svg" alt="Replica" srcset="" class="w-3 h-3">
                    </span>
                    <span class="ml-2">85%</span> 
                    <span class="mx-2">|</span>
                    <span>Feb 28,2020</span>
                    <span class="mx-2">|</span>
                    <span>Action, Thriller, Commedy</span>
                </div>

                <!-- <div class="text-gray-400 text-sm">
                    Action, Thriller, Commedy
                </div> -->
                <p class="text-gray-300 mt-4">
                William Foster is a brilliant neuroscientist who loses his wife, son and two daughters in a tragic car accident. Utilising cutting-edge technology, William comes up with a daring and unprecedented plan to download their memories and clone their bodies. As the experiment begins to spiral out of control, Foster soon finds himself at odds with his dubious boss, a reluctant accomplice, a police task force and the physical laws of science.
                </p>

                <div class="mt-12">
                    <h4 class="text-white font-semibold">
                        Featured Cast
                        <div class="flex mt-4">
                            <div>
                                <div>
                                    Bong Booo
                                </div>
                                <div class="text-sm text-gray-400">
                                    Scrrenplay, Director, Story
                                </div>
                            </div>
                            <div class="ml-8">
                                <div>
                                    Hai Hoo
                                </div>
                                <div class="text-sm text-gray-400">
                                    Screenplay
                                </div>
                            </div>
                        </div>
                    </h4>
                </div>
                <div class="mt-12">
                    <button class="flex inline-flex items-center bg-orange-500 text-gray-900 rounded font-semibold px-5 py-4 hover:bg-orange-600 transition ease-in-out duration-150">
                        <svg class="w-6 fill-current" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M10 16.5l6-4.5-6-4.5v9zM12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"/></svg>
                        <span class="ml-2">Play Trailer</span>
                    </button>
                </div>
            </div>
        </div>
    </div><!-- end movie-info -->

    <div class="movie-cast border-b border-gray-80">
        <div class="container mx-auto px-4 py-16">
            <h2 class="text-4xl font-semibold">Cast</h2>
            <div class="grid grid-cols-1 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-12">

            <div class="mt-8"> <!-- start one grid -->
                <a href="#">
                    <img src="/img/rep.jpg" alt="Replica" srcset="" class="hover:opacity-75 transition ease-in-out duration-150 w-64 md:w-96">
                </a>

                <div class="mt-2">
                    <a href="#" class="text-lg mt-2 hover:text-gray-400">
                        Replica
                    </a>
                </div>    
            </div><!--end one grid -->
            <div class="mt-8"> <!-- start one grid -->
                <a href="#">
                    <img src="/img/rep.jpg" alt="Replica" srcset="" class="hover:opacity-75 transition ease-in-out duration-150 w-64 md:w-96">
                </a>

                <div class="mt-2">
                    <a href="#" class="text-lg mt-2 hover:text-gray-400">
                        Replica
                    </a>
                </div>    
            </div><!--end one grid -->
            <div class="mt-8"> <!-- start one grid -->
                <a href="#">
                    <img src="/img/rep.jpg" alt="Replica" srcset="" class="hover:opacity-75 transition ease-in-out duration-150 w-64 md:w-96">
                </a>

                <div class="mt-2">
                    <a href="#" class="text-lg mt-2 hover:text-gray-400">
                        Replica
                    </a>
                </div>    
            </div><!--end one grid -->
            <div class="mt-8"> <!-- start one grid -->
                <a href="#">
                    <img src="/img/rep.jpg" alt="Replica" srcset="" class="hover:opacity-75 transition ease-in-out duration-150 w-64 md:w-96">
                </a>

                <div class="mt-2">
                    <a href="#" class="text-lg mt-2 hover:text-gray-400">
                        Replica
                    </a>
                </div>    
            </div><!--end one grid -->
            <div class="mt-8"> <!-- start one grid -->
                <a href="#">
                    <img src="/img/rep.jpg" alt="Replica" srcset="" class="hover:opacity-75 transition ease-in-out duration-150 w-64 md:w-96">
                </a>

                <div class="mt-2">
                    <a href="#" class="text-lg mt-2 hover:text-gray-400">
                        Replica
                    </a>
                </div>    
            </div><!--end one grid -->
        </div>
        
    </div>

    <div class="movie-cast border-b border-gray-80">
        <div class="container mx-auto px-4 py-16">
            <h2 class="text-4xl font-semibold">Images</h2>
            <div class="grid grid-cols-1 sm:grid-cols-3 md:grid-cols-3 lg:grid-cols-3 gap-8">

            <div class="mt-8"> <!-- start one grid -->
                <a href="#">
                    <img src="/img/lie.jpg" alt="Replica" srcset="" class="hover:opacity-75 transition ease-in-out duration-150 w-64 md:w-96">
                </a> 
            </div><!--end one grid -->
            <div class="mt-8"> <!-- start one grid -->
                <a href="#">
                    <img src="/img/lie.jpg" alt="Replica" srcset="" class="hover:opacity-75 transition ease-in-out duration-150 w-64 md:w-96">
                </a>   
            </div><!--end one grid -->
            <div class="mt-8"> <!-- start one grid -->
                <a href="#">
                    <img src="/img/lie.jpg" alt="Replica" srcset="" class="hover:opacity-75 transition ease-in-out duration-150 w-64 md:w-96">
                </a>
            </div><!--end one grid -->
        </div>
        
    </div>
    
@endsection