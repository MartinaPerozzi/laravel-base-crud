@include('partials.head')

<div class="container">


    @if ($errors->any())
        <div class="alert alert-danger mt-3">
            <h4>Correggi i seguenti errori per proseguire: </h4>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('songs.update', $song) }}" method="POST">
        @method('PUT') @csrf

        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"
            value="{{ $song->title }}" />
        @error('title')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror

        <label for="album" class="form-label">Album</label>
        <input type="text" class="form-control @error('album') is-invalid @enderror" id="album" name="album"
            value="{{ $song->album }}" />
        @error('album')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror

        <label for="author" class="form-label">Author</label>
        <input type="text" class="form-control @error('author') is-invalid @enderror" id="author" name="author"
            value="{{ $song->author }}" />
        @error('author')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror

        <label for="editor" class="form-label">Editor</label>
        <input type="text" class="form-control @error('editor') is-invalid @enderror" id="editor" name="editor"
            value="{{ $song->editor }}" />
        @error('editor')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror

        <label for="length" class="form-label">Length</label>
        <input type="text" class="form-control @error('length') is-invalid @enderror" id="length" name="length"
            value="{{ $song->length }}" />
        @error('length')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror

        <label for="img" class="form-label">img</label>
        <input type="text" class="form-control @error('img') is-invalid @enderror" id="img" name="img"
            value="{{ $song->poster }}" />
        @error('img')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror

        <button type="submit" class="btn btn-primary mt-4">Salva</button>
    </form>
</div>
