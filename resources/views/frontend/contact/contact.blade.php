@extends('frontend.main-master')
@section('main')
    <!-- Inner Banner -->
    <div class="inner-banner inner-bg2">
        <div class="container">
            <div class="inner-title">
                <ul>
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li><i class='bx bx-chevron-right'></i></li>
                    <li>Contact</li>
                </ul>
                <h3>Contact</h3>
            </div>
        </div>
    </div>
    <!-- Inner Banner End -->


    <!-- contact Another -->
    <div class="contact-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact-another-content">
                        <div class="section-title">
                            <h2>Contacts Info</h2>
                            <p>
                                We are one of the best agency and we can easily make a contract
                                us anytime on the below details.
                            </p>
                        </div>

                        <div class="contact-item">
                            <ul>
                                <li>
                                    <i class='bx bx-home-alt'></i>
                                    <div class="content">
                                        <span>An Naseem, Makkah, KSA</span>
                                        <span>An Naseem, Makkah, KSA</span>
                                    </div>
                                </li>
                                <li>
                                    <i class='bx bx-phone-call'></i>
                                    <div class="content">
                                        <span><a href="">+966 59 272 4245</a></span>
                                        <span><a href="">+966 59 272 4245</a></span>
                                    </div>
                                </li>
                                <li>
                                    <i class='bx bx-envelope'></i>
                                    <div class="content">
                                        <span><a href="">me@azizraad.com</a></span>
                                        <span><a href="">me@azizraad.com</a></span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>


                <div class="col-lg-6">
                    <div class="contact-another-img">
                        <img src="{{asset('frontend/assets/img/contact/contact-img2.jpg')}}" alt="Images">
                    </div>
                </div>
            </div>
        </div>
</div>

    <!-- contact Another End -->

@endsection
