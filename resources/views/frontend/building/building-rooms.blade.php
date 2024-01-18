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
                    <li> <a href="/buildings">Buildings</a> </li>
                    <li><i class='bx bx-chevron-right'></i></li>
                    <li>{{ $building->name }} Rooms</li>
                </ul>
                <h3>Rooms</h3>
            </div>
        </div>
    </div>
    <!-- Inner Banner End -->

    <!-- Room Area -->
    <div class="room-area pt-100 pb-70">
        <div class="container">
            <div class="section-title text-center">
                <span class="sp-color">ROOMS</span>
                <h2>Our Rooms & Rates</h2>
            </div>
            <div class="row pt-45">
                @foreach ($rooms as $room)
                    <div class="col-lg-4 col-md-6">
                        <div class="room-card">
                            <a href="/room-details/{{ $room->id }}">
                                <img src="{{ asset('frontend/assets/img/room/room-img1.jpg') }}" alt="Images">
                            </a>
                            <div class="content">
                                <h3><a href="/room-details/{{ $room->id }}">{{ $room->roomType->name }} Room</a></h3>
                                <ul>
                                    <li class="text-color">{{ $room->price }}</li>
                                    <li class="text-color">Per Night</li>
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
