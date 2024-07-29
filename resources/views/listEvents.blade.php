@extends('layout.base')
@section('content')

<header class="site-header section-padding d-flex justify-content-center align-items-center">
    <div class="container">
        <div class="row">

            <div class="col-lg-10 col-12">
                <h1>
                    <span class="d-block text-primary">Discover ISTA NTIC BM</span>
                    <span class="d-block text-dark"> All Events</span>
                </h1>
            </div>
        </div>
    </div>
</header>
<section class="products section-padding">
    <div class="container">
        <div class="row">
            @foreach ($categories as $categorie)
            <div class="col-12">
                <h2 class="mb-5">{{ucfirst($categorie->categorie)}}</h2>
            </div>
            @php
                // Filtrer les événements pour la catégorie actuelle
                $categoryEvents = $events->where('categorie_id', $categorie->id);
            @endphp
 @if ($categoryEvents->isEmpty())
 <div class="col-12">
     <p>Aucun événement pour cette catégorie.</p>
 </div>
@else
            @foreach ($categoryEvents as $item)
            <div class="col-lg-4 col-12 mb-3">
                <div class="product-thumb">
                    <a href="{{route('event.detail',$item->id)}}">
                        <img src="{{asset($item->photo)}}" class="img-fluid product-image" alt="photo">
                    </a>

                    <div class="product-top d-flex">
                        <span class="product-alert me-auto">{{$item->event_day}}</span>

                        <a href="#" class="bi-heart-fill product-icon"></a>
                    </div>

                    <div class="product-info d-flex">
                        <div>
                            <h5 class="product-title mb-0">
                                <a href="{{route('event.detail',$item->id)}}" class="product-title-link">{{$item->event}}</a>
                            </h5>

                            <p class="product-p">{{$item->responsable}}</p>
                        </div>

                        <small class="product-price text-muted ms-auto">at {{$item->time->format('h:m')}}</small>
                    </div>
                </div>
            </div>
            @endforeach
            @endif
            @endforeach

            </div>

        </div>
    </div>
</section>
@endsection
