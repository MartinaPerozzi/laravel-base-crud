@include('partials.head')

<div class="form-add container mt-5">
    <form action="{{ route('songs.store') }}" method="POST">
        @csrf

        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control" id="name" name="title" />

        <label for="album" class="form-label">Album</label>
        <input type="text" class="form-control" id="number" name="album" />

        <label for="author" class="form-label">Author</label>
        <input type="text" class="form-control" id="number" name="author" />


        <label for="editor" class="form-label">Editor</label>
        <input type="text" class="form-control" id="cooking_time" name="editor" />

        <label for="length" class="form-label">Length</label>
        <input type="number" class="form-control" id="weight" name="length" />

        <label for="img" class="form-label">Poster</label>
        <input type="text" class="form-control" id="img" name="img" />

        <button type="submit" class="btn btn-primary mt-3">Salva</button>
    </form>
</div>
