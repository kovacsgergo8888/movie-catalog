<x-layout.app>
    My movies
    @foreach ($movies as $movie)
    <div>
        {{$movie?->title}}
    </div>
    @endforeach
</x-layout.app>
