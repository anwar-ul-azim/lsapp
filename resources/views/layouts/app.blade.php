<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Lsapp') }}</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" ></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
            @include('inc.navbar')
        <div class="container">
            @include('inc.messages')

            @yield('content')
        </div>
        <main class="py-4">
        </main>
    </div>
    <script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.replace( 'summary-ckeditor' , {
            // toolbarGroups: [
            //     { name: 'document',	   groups: [ 'mode', 'document' ] },			
            //     { name: 'clipboard',   groups: [ 'clipboard', 'undo' ] },			
            //     '/',																
            //     { name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
            //     { name: 'links' }
            // ]
        });
    </script>
</body>
</html>
