<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Basic-info</title>
    <script src="https://kit.fontawesome.com/85acf21687.js"></script>
    <!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/signup.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('frontend/assets/sass/style.css') }}">
</head>

<body>
    <div id="app" class="container-fluid">
        <!-- @guest
        @else
            <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        Users
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="/home">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/profile">Profile</a>
                            </li>
                        </ul>
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                    <i class="fa fa-user"></i> <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                                    <a class="dropdown-item" href="/profile/edit">Edit Profile</a>

                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        @endguest -->
        <main class="">
            <div class="display--flex mt-2 p-3">
                <div class="logo-div">
                    <img src="{{ asset('frontend/assets/img/logo/bariLogo.png') }}" class="img-fluid" alt="Baribuy Logo">
                </div>
                <div class="">
                    <a href="{{ url('login') }}" class="link-to-logout mt-0 p-3">Logout</a>
                </div>
            </div>
            <div class="text-center">
                <div class="basic-info-header-section">
                    <div>
                        <span class="img-circle">
                            <img src="{{ asset('img/beard.png')}}" class="img-fluid" />
                        </span>
                    </div>
                    <div class="basic-info-main-text">
                        <h1 class="mb-0">
                            Welcome Home!
                        </h1>
                        <h4>
                            Praesent imperdiet.
                        </h4>
                    </div>

                </div>
            </div>
            <div class="basic-info-body">

                <div class="form-div">
                    <form method="post" action="{{ route('page.storeBasicInfo') }}">
                        @csrf
                    
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <div>
                                        <label for="first_name" class="form-label">First Name</label>
                                        <input type="text" class="form-control input__field @error('first_name') is-invalid @enderror" name="first_name" value="{{old('first_name')}}" id="first_name" placeholder="">
                                    </div>
                                    @error('first_name')
                                        <span class="text-danger" >
                                            <strong>{{$message}}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <div>
                                        <label for="lname" class="form-label">Last Name</label>
                                        <input type="text" class="form-control input__field @error('last_name') is-invalid @enderror" name="last_name" value="{{old('last_name')}}" id="last_name" placeholder="">
                                    </div>
                                    @error('last_name')
                                        <span class="text-danger" >
                                            <strong>{{$message}}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <select class="form-control @error('investment_range_in_12_month') is-invalid @enderror"  aria-label="Default select example" name="investment_range_in_12_month" >
                                        <option value="" selected>Investment amount (in the next 12 months)</option>
                                        <option value="100$-2000$">100$-2000$</option>
                                        <option value="2000$-5000$">2000$-5000$</option>
                                        <option value="5000$-25000$">5000$-25000$</option>
                                        <option value="25000$-100,000$">25000$-100,000$</option>
                                        <option value="100,000$+">100,000$+</option>
                                    </select>
                                
                                    @error('investment_range_in_12_month')
                                    <span class="text-danger" >
                                        <strong>{{$message}}</strong>
                                    </span>
                                @enderror
                                </div>
                            </div>
                            <div class="col-lg-12 mt-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="hidden" name="term_Service_agreed_check"  value="0">
                                    <input class="form-check-input" type="checkbox" name="term_Service_agreed_check"  value="1" id="term_Service_agreed_check">
                                    <label class="form-check-label" for="term_Service_agreed_check">
                                    I have read and agree to the <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a>
                                    </label>
                                </div>
                                @error('term_Service_agreed_check')
                                    <span class="text-danger" >
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 mt-5">
                                <button type="submit" class="btn btn-primary btn-block btn-submit-custom">Let's Start In</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </main>
    </div>
    <!-- jQuery -->
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('dist/js/adminlte.min.js') }}"></script>

    <script src="{{ asset('bootstrap-wizard/jquery.bootstrap.wizard.min.js') }}"></script>
    <script src="{{ asset('bootstrap-wizard/global.js') }}"></script>


    <script>
        $(document).ready(function() {

            const lenght = $('ul.nav-tab li').length
            $(".progress-val").html(Math.ceil(100 / lenght )+ '%');
            $(".progress-bar").css("width", 100 / lenght + '%');
        });

        //
        function valueChanged() {
            if ($('.flexRadioDefault2').is(":checked"))

                $(".flexRadioDefault2-div").hide();

            else
                $(".flexRadioDefault2-div").show();
            $(".flexRadioDefault3-div").hide();
        }

        function valueChanged3() {
            if ($('.flexRadioDefault3').is(":checked"))

                $(".flexRadioDefault3-div").hide();

            else
                $(".flexRadioDefault3-div").show();
            $(".flexRadioDefault2-div").hide();

        }

        function valueChanged2() {

            $(".flexRadioDefault2-div").hide();
            $(".flexRadioDefault3-div").hide();

        }
    </script>
</body>

</html>
