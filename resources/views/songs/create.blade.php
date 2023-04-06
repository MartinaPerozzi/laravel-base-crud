<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- TITLE -->
    <title>{{ env('APP_NAME') }} @yield('page_name')</title>
    {{-- Includo il file con tutti i file compilati da Vite --}}
    @vite ('resources/js/app.js')

</head>

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
        <input type="text" class="form-control" id="weight" name="length" />

        <label for="img" class="form-label">Poster</label>
        <input type="text" class="form-control" id="img" name="img" />

        <button type="submit" class="btn btn-primary mt-3">Salva</button>
    </form>
</div>
