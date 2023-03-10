<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#4285f4" />
    <meta name="description" content="website about investment in property">
    <meta name="keywords" content="Baribuy, Property, Investment">
    <link rel="icon" type="image/x-icon" href="{{ asset('frontend/assets/img/favicon/favicon.png') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    <link rel="stylesheet" href="{{ asset('frontend/assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/sass/style.css') }}">
    <title>Baribuy | Investment in Property</title>
    <script src="{{ asset('frontend/assets/font-awesome/js/all.min.js') }}" crossorigin="anonymous"
        referrerpolicy="no-referrer"></script>
</head>

<body>
    @include('sweetalert::alert')
    @include('layouts.frontend.header')
    <!-- {{ \Route::currentRouteName() }}

    @if (\Route::currentRouteName() == 'home')

    @endif -->

    @yield('content')
    <!-- invester link section -->
    <footer>
        <div class="container">
            <div class="row pt-5">
                <div class="col-lg-4">
                    <img src="{{ asset('frontend/assets/img/logo/white-png 1.png') }}"
                        poster="{{ asset('frontend/assets/img/logo/white-png 1.png') }}" alt="">
                    <p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus id magna vitae
                        lacus tincidunt
                        tincidunt eu eu velit. Aenean varius facilisis orci, eu consectetur velit mollis congue.</p>
                </div>
                <div class="col-lg-2">
                    <h3 class="footer--heading">
                        Helpful Links
                    </h3>
                    <ul class="footer--ul">
                        <a href="#">
                            <li><i class="fa-solid fa-angle-right"></i> Learn</li>
                        </a>
                        <a href="#">
                            <li><i class="fa-solid fa-angle-right"></i> Help and FAQ</li>
                        </a><a href="#">
                            <li>
                                <i class="fa-solid fa-angle-right"></i> About Us
                            </li>
                        </a><a href="#">
                            <li></li>
                            <i class="fa-solid fa-angle-right"></i> Contact Us</li>
                        </a>
                    </ul>
                </div>
                <div class="col-lg-2">
                    <h3 class="footer--heading">
                        Legal
                    </h3>
                    <ul class="footer--ul">
                        <a href="#">
                            <li><i class="fa-solid fa-angle-right"></i> Terms of Service</li>
                        </a>
                        <a href="#">
                            <li><i class="fa-solid fa-angle-right"></i> Privacy Policy</li>
                        </a><a href="#">
                            <li>
                                <i class="fa-solid fa-angle-right"></i> Disclosures
                            </li>
                        </a>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <h3 class="footer--heading">
                        Follow Us
                    </h3>
                    <ul class="footer--social--icons">
                        <a href="#">
                            <li><i class="fa-brands fa-facebook-f"></i></li>
                        </a>
                        <a href="#">
                            <li><i class="fa-brands fa-twitter"></i></li>
                        </a>
                        <a href="#">
                            <li>
                                <i class="fa-brands fa-youtube"></i>
                            </li>
                        </a>
                        <a href="#">
                            <li>
                                <i class="fa-brands fa-instagram"></i>
                            </li>
                        </a>
                    </ul>
                </div>
            </div>
        </div>

    </footer>
    
    @include('frontendPages.modals.modal')
    <div class="bottom--footer">
        © Baribuy, <span id="year"></span> . All Rights Reserved
    </div>

    <script src="{{ asset('frontend/assets/js/jquery-3.6.1.min.js') }}" crossorigin="anonymous"></script>
    <script src="{{ asset('frontend/assets/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/script.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/custom.js') }}"></script>
    <!-- <script>
    document.getElementById('vidd').play();
        
    </script> -->
</body>

</html>
