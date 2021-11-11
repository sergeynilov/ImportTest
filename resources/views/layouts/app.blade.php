
<!doctype html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title id="app_title">{{ config('app.name', 'Laravel') }}</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <script src="{{ asset('/js/app.js') }}"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>



</head>

{{--openSearchForm()  initDate(), openTodoListingForm()  --}}
<body >
<header>
    header
</header>

<main>

    @yield('content')
    @yield('scripts')
</main>

<footer class="bg-green" style="height: 60px !important;">
    footer
</footer>

</body>

</html>
