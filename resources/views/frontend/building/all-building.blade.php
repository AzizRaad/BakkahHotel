@extends('frontend.main-master')
@section('main')
    <!-- Inner Banner -->
    <div class="inner-banner inner-bg9">
        <div class="container">
            <div class="inner-title">
                <ul>
                    <li>
                        <a href="/">Home</a>
                    </li>
                    <li><i class='bx bx-chevron-right'></i></li>
                    <li>Buildings</li>
                </ul>
                <h3>Buildings</h3>
            </div>
        </div>
    </div>
    <!-- Inner Banner End -->

    <!-- Room Area -->
    <div class="room-area pt-100 pb-70">
        <div class="container">
            <div class="section-title text-center">
                <span class="sp-color">BUILDINGS</span>
                <h2>Our Buildings</h2>
            </div>
            <div class="row pt-45">
                @foreach ($buildings as $building)
                    <div class="col-lg-4 col-md-6">
                        <div class="room-card">
                            <a href="/buildings/{{ $building->id }}/rooms">
                                <img src="{{ asset('frontend/assets/img/building/building-img1.jpg') }}" alt="Images">
                            </a>
                            <div class="content">
                                <h3><a href="/">{{ $building->name }} Building</a></h3>
                                <ul>
                                    <li class="text-color">Luxury Set Of Rooms</li>
                                </ul>
                                <div class="rating text-color">
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star-half'></i>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Room Area End -->
@endsection
