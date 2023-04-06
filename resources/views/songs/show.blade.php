<strong>Nome: </strong> {{ $song->title }} <br />
<strong>N°: </strong> {{ $song->album }} <br />
<strong>Tempo di cottura: </strong> {{ $song->author }} <br />
<strong>Tipo: </strong> {{ $song->editor }} <br />
<strong>Peso: </strong> {{ $song->length }} <br />
<div class="img-container">
    <img src="{{ $song->poster }}" alt="Poster">
</div>
<a class="text-black" href="{{ route('songs.index') }}"> Torna indietro </a>
