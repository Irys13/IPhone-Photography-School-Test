<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script>window.Laravel = {csrfToken: '{{ csrf_token() }}'}</script>
        <title>10 Best Photo Apps For Incredible iPhone Photography (2020 Edition)</title>
        <link rel="stylesheet" type="text/css" href="css/app.css">
        <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    </head>
    <body>
    <div id="app">
        <div class="BlogContainer">

            <blogPost></blogPost><sideBar></sideBar>
        </div>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
