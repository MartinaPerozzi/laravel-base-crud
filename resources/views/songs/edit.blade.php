@include('partials.head')

<div class="container">


    <form action="{{ route('songs.update', $song) }}" method="POST">
        @method('PUT') @csrf

        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control" id="name" name="title" value="{{ $song->title }}" />

        <label for="album" class="form-label">Album</label>
        <input type="text" class="form-control" id="number" name="album" value="{{ $song->album }}" />

        <label for="author" class="form-label">Author</label>
        <input type="text" class="form-control" id="number" name="author" value="{{ $song->author }}" />

        <label for="editor" class="form-label">Editor</label>
        <input type="text" class="form-control" id="weight" name="editor" value="{{ $song->editor }}" />

        <label for="length" class="form-label">Length</label>
        <input type="number" class="form-control" id="cooking_time" name="length" value="{{ $song->length }}" />

        <label for="img" class="form-label">img</label>
        <input type="text" class="form-control" id="img" name="img" value="{{ $song->poster }}" />

        <button type="submit" class="btn btn-primary mt-4">Salva</button>
    </form>
</div>
