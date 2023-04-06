@extends('layouts.app')
@section('page_name', 'SONGS')

@section('card_content')
    <div class="row row-cols-4">
        @forelse ($songs as $song)
            <div class="col">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="card-text">
                            <h5 class="card-title">{{ $song->title }}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">{{ $song->album }}</h6>
                            <span class="card-text">{{ $song->author }}</span>
                            <span>{{ $song->editor }}</span>
                            <span>{{ $song->length }}</span>
                            <br>
                            <a class="text-black" href="{{ route('songs.show', $song) }}"> Dettaglio </a>
                        </div>
                        <div class="img-container">
                            <img src="{{ $song->poster }}" alt="Poster">
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <h3>No movies found</h3>
        @endforelse
    </div>
@endsection
