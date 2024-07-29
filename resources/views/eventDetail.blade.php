@extends('layout.base')
@section('content')
<header class="site-header section-padding d-flex justify-content-center align-items-center">
    <div class="container">
        <div class="row">

            <div class="col-lg-10 col-12">
                <h1>
                    <span class="d-block text-primary text-capitalize">{{$event->event}}</span>
                    <span class="d-block text-dark">We provide you  details </span>
                </h1>
            </div>
        </div>
    </div>
</header>

<section class="product-detail section-padding">
    <div class="container">
        <div class="row">

            <div class="col-lg-6 col-12">
                <div class="product-thumb">
                    <img src="{{asset($event->photo)}}" class="img-fluid product-image" alt="">
                </div>
            </div>

            <div class="col-lg-6 col-12">
                <div class="product-info d-flex">
                    <div>
                        <h2 class="product-title mb-0">{{$event->event}}</h2>

                        <p class="product-p">{{$event->responsable}}</p>
                    </div>


                </div>

                <div class="product-description">

                    <strong class="d-block mt-1 mb-2">Description</strong>

                    <p class="lead mb-5">This event <small class="product-price text-muted ms-auto mt-auto mb-5">on {{$event->event_day}} start at {{$event->time->format("h:m")}} for {{$event->guests}}</small> {{$event->message}}</p>
                </div>

                <div class="product-cart-thumb row">


                    <div class="col-lg-6 col-12 mt-4 mt-lg-0">
                        <button type="submit" class="btn custom-btn cart-btn" data-bs-toggle="modal" data-bs-target="#cart-modal">Contact responsable</button>
                    </div>


                </div>

            </div>

        </div>
    </div>
</section>
@endsection
