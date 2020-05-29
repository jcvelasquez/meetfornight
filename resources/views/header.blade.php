<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="img/favicon.ico">

    <title>Meet for Night - @yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="profesional-id" content="{{ optional(Auth::user())->id }}">
    <meta name="usuario-id" content="{{ optional(Auth::user())->id }}">
    <meta name="locale" content="{{ app()->getLocale() }}">

    <link href="https://fonts.googleapis.com/css?family=Fauna+One|Lato:300,400,700,900|Marck+Script|Merriweather:300,400,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Yellowtail" rel="stylesheet">
    

    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/meetfornight.css') }}" rel="stylesheet" type="text/css" />
    
</head>
