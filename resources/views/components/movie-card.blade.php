<div>
    <div class="mt-8"> <!-- start one grid -->
        <a href="{{ route('movies.show', $movie['id']) }}">
            <img src="{{ 'https://image.tmdb.org/t/p/w500'.$movie['poster_path'] }}" alt="Poster" srcset="" class="hover:opacity-75 transition ease-in-out duration-150">
        </a>
        <div class="mt-2">
            <a href="{{ route('movies.show', $movie['id']) }}" class="text-lg mt-2 hover:text-gray-400">
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
</div>