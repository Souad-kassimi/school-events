<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
        <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
        <link href="{{asset('dashboard.css')}}" rel="stylesheet">


        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;300;400;700;900&display=swap" rel="stylesheet">

        <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('css/bootstrap-icons.css')}}" rel="stylesheet">

        <link rel="stylesheet" href="{{asset('css/slick.css')}}"/>

        {{-- <link href="{{asset('css/tooplate-little-fashion.css')}}" rel="stylesheet"> --}}
    @vite(["resources/sass/app.scss","resources/js/app.js"])

      </head>
      
      <body>
        @include('sidebar')
        @yield('dashboard')
       
        

        <script src="{{asset('js/jquery.min.js')}}"></script>
        <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset("js/Headroom.js")}}"></script>
      
        <script src="{{asset('js/slick.min.js')}}"></script>
        <script src="{{asset('js/custom.js')}}"></script>
      </body>
      
    
</html>