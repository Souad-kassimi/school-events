@extends('layout.base')
@section('content')
    <section class="slick-slideshow">
        @if ($eventsday->isEmpty())
            <div class="slick-custom">
                <img src="{{ asset('images/ofppt.webp') }}"  class="img-fluid" alt="Default Photo">

                <div class="slick-bottom">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-10">
                                <h2 class="slick-title text-capitalize"><span>There is no event today</span></h2>

                                <p class="lead text-white mt-lg-3 mb-lg-5 ">
                                    Unfortunately, there are no events scheduled for today. Please check back later or
                                    contact us for more information.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @else
            @foreach ($eventsday as $eventDay)
                <div class="slick-custom">
                    <img src="{{ asset($eventDay->photo) }}" class="img-fluid" alt="">

                    <div class="slick-bottom">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 col-10">

                                    <h2 class="slick-title text-capitalize">Today event <span>{{ $eventDay->event }}</span>
                                    </h2>

                                    <p class="lead text-white mt-lg-3 mb-lg-5">Join us on a blissful journey of laughter and
                                        camaraderie as we gather <strong>at {{ $eventDay->time->format('H:i') }}</strong> .
                                        Get ready to immerse to create unforgettable memories together. ! </p>

                                    <a href="{{ route('event.detail', $eventDay->id) }}" class="btn custom-btn">Learn
                                        more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    </section>

    <section class="about section-padding" id="about-us">
        <div class="container">
            <div class="row">

                <div class="col-12 text-center">
                    <h2 class="mb-5">Discover <span>ISTA NTIC BM Events</span></h2>
                </div>

                <div class="col-lg-2 col-12 mt-auto mb-auto">
                    <ul class="nav nav-pills mb-5 mx-auto justify-content-center align-items-center" id="pills-tab"
                        role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                aria-selected="true">Introduction</button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-youtube-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-youtube" type="button" role="tab" aria-controls="pills-youtube"
                                aria-selected="true">How to volanturee?</button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-skill-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-skill" type="button" role="tab" aria-controls="pills-skill"
                                aria-selected="false">Events</button>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-10 col-12">
                    <div class="tab-content mt-2" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                            aria-labelledby="pills-home-tab">

                            <div class="row">
                                <div class="col-lg-7 col-12">
                                    <img src="images/pim-chu-z6NZ76_UTDI-unsplash.jpeg" class="img-fluid" alt="">
                                </div>

                                <div class="col-lg-5 col-12">
                                    <div class="d-flex flex-column h-100 ms-lg-4 mt-lg-0 mt-5">
                                        <h4 class="mb-3">Discover Little <span>Wonders</span> <br>Ideas for <span>ISTA
                                                NTIC BM Events</span> </h4>



                                        <p>At <a href="sign-in.html">ISTA NTIC</a>, At ISTA NTIC, our vibrant community is
                                            brimming with exciting events tailored for both students and teachers. From
                                            engaging workshops to thrilling competitions, there's always something happening
                                            to inspire, educate, and entertain. Join us in our journey of discovery and
                                            enrichment at ISTA NTIC!
                                        </p>

                                        <div class="mt-2 mt-lg-auto">
                                            <a href="https://www.ofppt.ma/fr/offres-d-emploi/directeur-de-lista-ntic-beni-mellal"
                                                class="custom-link mb-2">
                                                Learn more about us
                                                <i class="bi-arrow-right ms-2"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="pills-youtube" role="tabpanel" aria-labelledby="pills-youtube-tab">

                            <div class="row">
                                <div class="col-lg-7 col-12">
                                    <div class="ratio ratio-16x9">
                                        <iframe src="https://www.youtube-nocookie.com/embed/f_7JqPDWhfw?controls=0"
                                            title="YouTube video player" frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen></iframe>
                                    </div>
                                </div>

                                <div class="col-lg-5 col-12">
                                    <div class="d-flex flex-column h-100 ms-lg-4 mt-lg-0 mt-5">
                                        <h4 class="mb-3">Volanturee for Events</h4>

                                        <p>To volunteer for collaboration in this event, simply reach out to the event
                                            coordinator or responsible party. </p>

                                        <p>Your enthusiasm and support are greatly appreciated in making this event a
                                            success!</p>

                                        <div class="mt-2 mt-lg-auto">
                                            <a href="contact.html" class="custom-link mb-2">
                                                Contact Them
                                                <i class="bi-arrow-right ms-2"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="pills-skill" role="tabpanel" aria-labelledby="pills-skill-tab">
                            <div class="row">
                                <div class="col-lg-7 col-12">
                                    <img src="{{ asset('images/pexels-hillaryfox-1595391.jpg') }}" class="img-fluid"
                                        alt="">
                                </div>

                                <div class="col-lg-5 col-12">
                                    <div class="d-flex flex-column h-100 ms-lg-4 mt-lg-0 mt-5">
                                        <h4 class="mb-3">How event can help you?</h4>

                                        <p>Events are not just gatherings; they're platforms for skill development and
                                            growth. Through engaging activities and interactions, participants hone various
                                            abilities, from communication to problem-solving. </p>
                                        <p>
                                            Embracing events fosters a culture of learning and collaboration, crucial for
                                            personal and professional advancement.
                                        </p>



                                        <div class="mt-2 mt-lg-auto">
                                            <a href="#events" class="custom-link mb-2">
                                                Explore Events
                                                <i class="bi-arrow-right ms-2"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="featured-product section-padding" id="events">
        <div class="container">
            <div class="row">

                <div class="col-12 text-center">
                    <h2 class="mb-5">Our Events</h2>
                </div>
                @foreach ($events as $event)
                    <div class="col-lg-4 col-12 mb-3">
                        <div class="product-thumb">
                            <a href="{{ route('event.detail', $event->id) }}">

                                <img src="{{ asset($event->photo) }}"
                                    style="width: 26em; height: 25em; object-fit: cover; " class="img-fluid product-image"
                                    alt="">
                            </a>

                            <div class="product-top d-flex">
                                <span class="product-alert me-auto">{{ $event->event_day }}</span>

                                <a href="#" class="bi-heart-fill product-icon"></a>
                            </div>

                            <div class="product-info d-flex">
                                <div>
                                    <h5 class="product-title mb-0">
                                        <a href="{{ route('event.detail', $event->id) }}"
                                            class="product-title-link">{{ $event->event }}</a>
                                    </h5>

                                    <p class="product-p">{{ $event->responsable }}</p>
                                </div>

                                <small class="product-price text-muted ms-auto mt-auto mb-5">at
                                    {{ $event->time->format('H:i') }}</small>
                            </div>
                        </div>
                    </div>
                @endforeach



                <div class="col-12 text-center">
                    <a href="{{ route('events') }}" class="view-all">View All Products</a>
                </div>

            </div>
        </div>
    </section>

@endsection
