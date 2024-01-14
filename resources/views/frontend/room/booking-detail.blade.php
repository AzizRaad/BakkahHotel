@extends('frontend.main-master')
@section('main')
    <!-- Inner Banner -->
    <div class="inner-banner inner-bg7">
        <div class="container">
            <div class="inner-title">
                <ul>
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li><i class='bx bx-chevron-right'></i></li>
                    <li> Check Out</li>
                </ul>
                <h3> Check Out</h3>
            </div>
        </div>
    </div>
    <!-- Inner Banner End -->

    <!-- Checkout Area -->
    <section class="checkout-area pt-100 pb-70">
        <div class="container">
            <form action="/place-order/{{ $room->id }}" method="POST">
                @csrf
                <input type="hidden" name="room_id" value="{{ $room->id }}">
                <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                <input type="hidden" name="check_in" value="{{ \Carbon\Carbon::parse($request->check_in)->format('Y-m-d') }}">
                <input type="hidden" name="check_out" value="{{ \Carbon\Carbon::parse($request->check_out)->format('Y-m-d') }}">
                <div class="row">
                    <div class="col-lg-4">
                        <section class="checkout-area pb-70">
                            <div class="card-body">
                                <div class="billing-details">
                                    <h3 class="title">Booking Summary</h3>
                                    <hr>

                                    <div style="display: flex">
                                        <div style="padding-left: 10px;">
                                            <a href=" " style="font-size: 20px; color: #595959;font-weight: bold">
                                                {{ $room->roomType->name }} Room
                                            </a>
                                            <p><b>{{ $room->price }} / Night</b></p>
                                        </div>

                                    </div>

                                    <br>

                                    <table class="table" style="width: 100%">

                                        <tr>
                                            <td>
                                                <p>Total Night ({{ $reservation_days }})</p>
                                            </td>
                                            <td style="text-align: right">
                                                <p>{{ $room->roomType->name }} Room</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>Check in</p>
                                            </td>
                                            <td style="text-align: right">
                                                <p>{{ $request->check_in }}</p>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>Check out</p>
                                            </td>
                                            <td style="text-align: right">
                                                <p>{{ $request->check_out }}</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>Subtotal</p>
                                            </td>
                                            <td style="text-align: right">
                                                <p>{{ $reservation_days * $room->price }}</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>Season Tax</p>
                                            </td>
                                            <td style="text-align:right">
                                                <p>{{ $tax }} / per night</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>Total</p>
                                            </td>
                                            <td style="text-align:right">
                                                <p>{{ $reservation_days * $tax + $reservation_days * $room->price }}</p>
                                            </td>
                                        </tr>
                                    </table>
                                    <div class="col-lg-12 col-md-12">
                                        <button type="submit" class="default-btn btn-bg-three border-radius-5">
                                            Place Order
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- Checkout Area End -->
@endsection
