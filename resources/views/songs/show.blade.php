@include('partials.head')

<div class="container">
    <strong>Title: </strong> {{ $song->title }} <br />
    <strong>Album:</strong> {{ $song->album }} <br />
    <strong>Author: </strong> {{ $song->author }} <br />
    <strong>Editor: </strong> {{ $song->editor }} <br />
    <strong>Length: </strong> {{ $song->length }} <br />
    <div class="img-container">
        <strong>Poster: </strong>
        <img src="{{ $song->poster }}" alt="Poster">
    </div>
    <a href="{{ route('songs.create') }}" role="button" class="btn btn-primary mt-3"> Torna indietro </a>
    <a href="{{ route('songs.index') }}" role="button" class="btn btn-primary mt-3"> Torna alla home </a>
</div>
