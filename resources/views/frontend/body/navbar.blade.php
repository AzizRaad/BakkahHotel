<div class="navbar-area">
    <!-- Menu For Mobile Device -->
    <div class="mobile-nav">
        <a href="/" class="">
            <img src="{{ asset('frontend/assets/img/logos/logo-1.png') }}"
            style="max-height: 10px; max-width: 10px;" alt="Logo">
            <img src="{{ asset('frontend/assets/img/logos/footer-logo1.png') }}" class="logo-two" alt="Logo">
        </a>
    </div>

    <!-- Menu For Desktop Device -->
    <div class="main-nav">
        <div class="container ">
            <nav class="navbar navbar-expand-md navbar-light ">
                <a class="navbar-brand" href="/">
                    <img src="{{ asset('frontend/assets/img/logos/logo-1.png') }}" style="height: 100px; width: 150px;" class="logo-one" alt="Logo">
                    <img src="{{ asset('frontend/assets/img/logos/footer-logo1.png') }}" class="logo-two"
                        alt="Logo">
                </a>

                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav m-auto">
                        <li class="nav-item">
                            <a href="/" class="nav-link active">
                                Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/about" class="nav-link">
                                About
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="/all-room" class="nav-link">
                                Rooms
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="/buildings" class="nav-link">
                                Buildings
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="/contact" class="nav-link">
                                Contact
                            </a>
                        </li>

                        <li class="nav-item-btn">
                            <a href="#" class="default-btn btn-bg-one border-radius-5">Book Now</a>
                        </li>
                    </ul>

                    <div class="nav-btn">
                        <a href="/all-room" class="default-btn btn-bg-one border-radius-5">Book Now</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
