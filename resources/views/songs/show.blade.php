@include('partials.head')

<div class="container mt-4">
    <div class="container-show">
        <strong>Title: </strong> {{ $song->title }} <br />
        <strong>Album:</strong> {{ $song->album }} <br />
        <strong>Author: </strong> {{ $song->author }} <br />
        <strong>Editor: </strong> {{ $song->editor }} <br />
        <strong>Length: </strong> {{ $song->length }} <br />
        <div class="img-container">
            <strong>Poster: </strong>
            <img src="{{ $song->poster }}" alt="Poster">
        </div>
    </div>

    <a href="{{ route('songs.index') }}" role="button" class="btn btn-primary mt-3"> Torna alla home </a>
    <a href="{{ route('songs.edit', $song) }}" role="button" class="btn btn-primary mt-3"> Modifica </a>
</div>
