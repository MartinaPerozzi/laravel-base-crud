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

<body>

    <main>
        <section class="container mt-4">
            <h1>@yield('page_name')</h1>
            @yield('card_content')
        </section>
    </main>

</body>

</html>
