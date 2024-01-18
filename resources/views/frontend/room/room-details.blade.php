@extends('frontend.main-master')
@section('main')
    <!-- Inner Banner -->
    <div class="inner-banner inner-bg10">
        <div class="container">
            <div class="inner-title">
                <ul>
                    <li>
                        <a href="/">Home</a>
                    </li>
                    <li><i class='bx bx-chevron-right'></i></li>
                    <li>Room Details </li>
                </ul>
                <h3>Room Details</h3>
            </div>
        </div>
    </div>
    <!-- Inner Banner End -->

    <!-- Room Details Area End -->
    <div class="room-details-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="room-details-side">
                        <div class="side-bar-form">
                            <h3>Booking Sheet </h3>
                            <form action="/booking-detail/{{ $room->id }}" method="POST">
                                @csrf
                                <div class="row align-items-center">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Check in</label>
                                            <div class="input-group">
                                                <input type="date" class="form-control" value="{{ date('Y-m-d') }}"
                                                    min="{{ date('Y-m-d') }}" name="check_in">
                                                <span class="input-group-addon"></span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Check Out</label>
                                            <div class="input-group">
                                                <input type="date" class="form-control" value="{{ date('Y-m-d') }}"
                                                min="{{ date('Y-m-d') }}" name="check_out">
                                                <span class="input-group-addon"></span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Numbers of Persons</label>
                                            <select class="form-control">
                                                @for ($i = 1; $i <= $room->room_capacity; $i++)
                                                    <option>{{ $i }}</option>
                                                @endfor
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Room Number</label>
                                            <input class="form-control mb-3" type="text"
                                                placeholder="{{ $room->room_no }}" aria-label="Disabled input example"
                                                disabled="">
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <button type="submit" class="default-btn btn-bg-three border-radius-5">
                                            Book Now
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>


                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="room-details-article">
                        <div class="room-details-slider owl-carousel owl-theme">
                            <div class="room-details-item">
                                <img src="{{ asset('frontend/assets/img/room/room-details-img1.jpg') }}" alt="Images">
                            </div>
                            <div class="room-details-item">
                                <img src="{{ asset('frontend/assets/img/room/room-details-img2.jpg') }}" alt="Images">
                            </div>
                            <div class="room-details-item">
                                <img src="{{ asset('frontend/assets/img/room/room-details-img3.jpg') }}" alt="Images">
                            </div>
                        </div>

                        <div class="room-details-title">
                            <h2>Double Bed Suits With Royal Express and Super Duplex Feelings</h2>
                            <ul>
                                <li>
                                    <b> Building : {{ $room->building->name }} Hotel</b>
                                </li>
                            </ul>
                            <ul>
                                <li>
                                    <b> Basic : ${{ $room->price }}/Night/Room</b>
                                </li>
                            </ul>
                        </div>

                        <div class="room-details-content">
                            <p>
                                {{ $room->description }}
                            </p>

                            <div class="side-bar-plan">
                                <h3>Basic Plan Facilities</h3>
                                <ul>
                                    @foreach ($room->facility_rooms as $facility)
                                        <li>
                                            <b>
                                                {{ $facility->fac_name }}
                                            </b>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="services-bar-widget">
                                        <div class="side-bar-list">
                                            <ul>
                                                <li>
                                                    <a href="#"> <b>Capacity : </b> {{ $room->room_capacity }} Person
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#"> <b>Size : </b> {{ $room->size }} m2 </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="services-bar-widget">
                                        <div class="side-bar-list">
                                            <ul>
                                                <li>
                                                    <a href="#"> <b>View : </b> {{ $room->view }} </a>
                                                </li>
                                                <li>
                                                    <a href="#"> <b>Bad Style : </b> {{ $room->bed_style }} </a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Room Details Area End -->

    <!-- Room Details Other -->
    <div class="room-details-other pb-70">
        <div class="container">
            <div class="room-details-text">
                <h2>Our Related Offer</h2>
            </div>
            @php
                $rooms = App\Models\Room::where('id', '!=', $room->id)
                    ->where('building_id', $room->building_id)
                    ->orderBy('created_at')
                    ->limit(2)
                    ->get();
            @endphp
            <div class="row ">
                @foreach ($rooms as $singleroom)
                    <div class="col-lg-6">
                        <div class="room-card-two">
                            <div class="row align-items-center">
                                <div class="col-lg-5 col-md-4 p-0">
                                    <div class="room-card-img">
                                        <a href="/room-details/{{ $singleroom->id }}">
                                            <img src="{{ asset('frontend/assets/img/room/room-style-img1.jpg') }}"
                                                alt="Images">
                                        </a>
                                    </div>
                                </div>

                                <div class="col-lg-7 col-md-8 p-0">
                                    <div class="room-card-content">
                                        <h3>
                                            <a href="/room-details/{{ $singleroom->id }}">{{ $singleroom->roomType->name }}
                                                Room</a>
                                        </h3>
                                        <span>${{ $singleroom->price }} / Per Night </span>
                                        <div class="rating">
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                        </div>
                                        <pre>{{ $singleroom->description }}</pre>
                                        <ul>
                                            <li><i class='bx bx-user'></i> {{ $singleroom->room_capacity }} Person</li>
                                            <li><i class='bx bx-expand'></i> {{ $singleroom->size }}m2</li>
                                        </ul>

                                        <ul>
                                            <li><i class='bx bx-show-alt'></i> {{ $singleroom->view }} </li>
                                            <li><i class='bx bxs-hotel'></i> {{ $singleroom->bed_style }} </li>
                                        </ul>

                                        <a href="/room-details/{{ $singleroom->id }}" class="book-more-btn">
                                            Book Now
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Room Details Other End -->
@endsection
