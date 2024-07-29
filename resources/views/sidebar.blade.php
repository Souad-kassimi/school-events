<div>
    <input type="checkbox" id="check">
        <label for="check">
          <i class="fas fa-bars" id="btn"></i>
          <i class="fas fa-times" id="cancel"></i>
        </label>
        <div class="sidebar">
          <header>Menu</header>
          <a href="{{route("event")}}"  style="{{(Route::is('event'))?'background: #c1b1f7;':''}}">
            <i class="fas fa-qrcode"></i>
            <span>Dashboard</span>
          </a>
          <a href="{{route("event.create")}}" style="{{(Route::is('event.create'))?'background: #c1b1f7;':''}}">
            <i class="fas fa-link"></i>
            <span>Add Event</span>
          </a>
          <a href="{{route("home")}}"  style="{{(Route::is('home'))?'background: #c1b1f7;':''}}">
            <i class="fas fa-home"></i>
            <span>Overview</span>
          </a>
          {{-- <a href="#">
            <i class="fas fa-calendar"></i>
            <span>Events</span>
          </a> --}}
          <a href="#">
            <i class="fas fa-stream"></i>
            <span>Logout</span>
          </a>
          {{-- <a href="#">
            <i class="far fa-question-circle"></i>
            <span>About</span>
          </a>
          <a href="#">
            <i class="fas fa-sliders-h"></i>
            <span>Services</span>
          </a>
          <a href="#">
            <i class="far fa-envelope"></i>
            <span>Contact</span>
          </a> --}}
        </div>
</div>