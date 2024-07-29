<nav class="navbar navbar-expand-lg">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <a class="navbar-brand" href="https://www.ofppt.ma/fr/offres-d-emploi/directeur-de-lista-ntic-beni-mellal">
            {{-- <strong><span>Little</span> OFPPT</strong> --}}
            <img src="{{asset("images/OFPPT.png")}}" alt="" style="width: 75px;height:65px">
        </a>

        

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="{{(Route::is('home'))?'nav-link active':''}}" href="{{route('home')}}" style="{{(Route::is('home'))?'color: #FF4400;' : ''}}">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{url('/#about-us')}}" style="{{ Request::is('/#about-us') ? 'color: #FF4400;' : '' }}">About us</a>
                </li>

                <li class="nav-item">
                    <a class="{{(Route::is('events'))?'nav-link active':''}}" href="{{route('events')}}" style="{{(Route::is('events'))?'color: #FF4400;' : ''}}">Events</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('#events')}}">Contact</a>
                </li>
                
            </ul>

           
        </div>
    </div>
</nav>