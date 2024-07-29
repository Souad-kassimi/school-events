<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   @include('layout.style')
    <title>School Events</title>
</head>

<body>
    {{-- <section class="preloader">
        <div class="spinner">
            <span class="sk-inner-circle"></span>
        </div>
    </section> --}}
    @include('navbar')
    <main>
        @yield('content')
    </main>
    @include('footer')

    @include('layout.script')
</body>

</html>
