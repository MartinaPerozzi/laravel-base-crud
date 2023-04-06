@include('partials.head')

@extends('layouts.app')
@section('page_name', 'SONG BACKOFFICE')


@section('card_content')
    <a href="{{ route('songs.create') }}" role="button" class="btn btn-primary mb-4"> Add Song</a>
    <div class="row row-cols-4">
        @forelse ($songs as $song)
            <div class="col">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="card-text">
                            <h5 class="card-title">{{ $song->title }}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">{{ $song->album }}</h6>
                            <span class="card-text">{{ $song->author }}</span>
                            <br>
                            <span>{{ $song->editor }}</span>
                            <br>
                            <span>{{ $song->length }}</span>
                        </div>
                        <div class="buttons mt-3 mb-1">
                            <a class="me-1 btn btn-primary" href="{{ route('songs.show', $song) }}"> Dettaglio
                            </a>
                            <a class="btn btn-primary" href="{{ route('songs.edit', $song) }}">Modifica</a>
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                data-bs-target="#delete-modal-{{ $song->id }}">
                                <i class="fa-solid fa-trash-can"></i>
                            </button>
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


    @foreach ($songs as $song)
        <!-- Modal -->
        <div class="modal fade" id="delete-modal-{{ $song->id }}" tabindex="-1"
            aria-labelledby="delete-modal-{{ $song->id }}-label" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="delete-modal-{{ $song->id }}-label">Conferma eliminazione</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-start">
                        Sei sicuro di voler eliminare la canzone <strong>{{ $song->title }}</strong> con ID
                        <strong> {{ $song->id }}</strong>? <br>
                        L'operazione non è reversibile!
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>

                        <form action="{{ route('songs.destroy', $song) }}" method="POST" class="">
                            @method('DELETE')
                            @csrf

                            <button type="submit" class="btn btn-danger">Elimina</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
