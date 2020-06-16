<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="img/favicon.ico">

    <title>Meet for Night - @yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="pid" content="{{ optional(Auth::user())->id }}">    
    <meta name="uid" content="{{ optional(Auth::user())->id }}">
    <meta name="role" content="{{ optional(Auth::user())->idrol }}">

    <meta name="locale" content="{{ app()->getLocale() }}">

    <!-- Required meta tags -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />

 <!--    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
     -->

    <!-- Material Kit CSS -->
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet" />
    

<!--     <script src="{{ asset('js/admin.js') }}"></script>
 -->
    

<!--     <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
 --> 
    
</head>
