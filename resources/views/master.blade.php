<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel - ToDoApp</title>
    
        <!-- Styles -->
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/main.css') }}" rel="stylesheet">
        
    </head>
    <body>
        <div class="flex-center position-ref full-height">

            <div class="container">
                @yield('content')
            </div>

        </div>
        
        <!-- JavaScripts -->
        <script src="{{ asset('js/jquery.js') }}"></script>
        <!-- script src="{{-- asset('js/app.js') --}}"></script-->
    </body>
</html>
