@php
$config = [
'appName' => config('app.name'),
'locale' => $locale = app()->getLocale(),
'locales' => config('app.locales'),
'githubAuth' => config('services.github.client_id'),
];
@endphp
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>{{ config('app.name') }}</title>
    <link defer rel="stylesheet" type="text/css" href="/Bootstrap/dist/css/bootstrap.css">
    <link defer rel="stylesheet" type="text/css" href="/css/main.css">
    <link rel="stylesheet" href="{{ mix('dist/css/app.css') }}">
</head>

<body>
    <div id="app"></div>

    {{-- Global configuration object --}}
    <script>
    window.config = @json($config);
    </script>

    {{-- Load the application scripts --}}
    <script defer src="{{ mix('dist/js/app.js') }}"></script>
    <script defer  src="/js/jquery-3.2.1.js"></script>
    <script defer  src="/js/jquery.appear.js"></script>
    <script defer  src="/js/jquery.mousewheel.js"></script>
    <script defer  src="/js/perfect-scrollbar.js"></script>
    <script defer  src="/js/jquery.matchHeight.js"></script>
    <script defer src="/js/velocity.js"></script>
    <script defer src="/js/ScrollMagic.js"></script>
    <script defer src="/js/popper.min.js"></script>
    <script defer src="/js/material.min.js"></script>
    <script defer src="/js/bootstrap-select.js"></script>
    <script defer src="/js/smooth-scroll.js"></script>
    <script defer src="/js/selectize.js"></script>

</body>

</html>
