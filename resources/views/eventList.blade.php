@extends('dashboard')
@section('dashboard')
<div class="frame">
<section class="team section-padding">
    <div class="container">
        <div class="row">

            <div class="col-12">
                <h2 class="mb-5">List of <span>Events</span></h2>
            </div>
                @if (session('success'))
                <div class="col-12 alert alert-success">
                        {{session()->get('success')}}
                </div>
                    
                @endif
            
                @foreach ($events as $event)
                <div class="col-lg-4 mb-4 col-12">
                <div class="team-thumb d-flex align-items-center">
                    <img src="{{asset("$event->photo")}}" class="img-fluid custom-circle-image team-image me-4" alt="">

                    <div class="team-info">
                        <h5 class="mb-0">{{$event->event}}</h5>
                        <strong class="text-muted">{{$event->responsable}}</strong>

                        <!-- Button trigger modal -->
                        <button type="button" class="btn custom-modal-btn"  data-bs-toggle="modal" data-bs-target="#{{$event->id}}">
                          <i class="bi-plus-circle-fill"  ></i>
                        </button>
                        <form action="{{route('event.destroy',$event->id)}}" method="POST">
                            @csrf
                            @method("delete")
                            <button type="submit" class="destroy-btn" >
                                <i class="bi bi-dash-circle-fill"></i>
    
                              </button>
                              
                        </form>
                       
                    </div>
                    </div>
            </div>

                @endforeach
                
                

           

        </div>
    </div>
</section>

        @foreach ($events as $event)
        <div class="modal fade" id="{{$event->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content border-0">
                    <div class="modal-header flex-column">
                        <h3 class="modal-title  text-capitalize" id="exampleModalLabel">{{$event->event}}</h3>
        
                        <h6 class="text-muted">Responsable: {{$event->responsable}}</h6>
        
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
        
                    <div class="modal-body">
                        <h5 class="mb-4">This Event on {{$event->event_day}} at {{$event->time->format("h:m")}}</h5>
        
                        <div class="row mb-4">
                            <div class="col-lg-6 col-12">
                                <p>{{$event->message}}</p>
                            </div>
        
                            <div class="col-lg-6 col-12">
                                <p>We warmly invite our esteemed {{$event->guests}} to join us for a memorable event at our school, celebrating learning and community.  </p>
                            </div>
                        </div>
        
                        <ul class="social-icon">
                            <li class="me-3"><strong>Where to reach with responsable?</strong></li>
        
                            <li>At ISTA NTIC BM</li>
        
                            <li><a href="#">Contact him on The web site</a></li>
        
                           
                        </ul>
                    </div>
                </div>
        
            </div>
        </div>
        </div>
        @endforeach
    
@endsection