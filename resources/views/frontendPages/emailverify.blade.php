<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ env('APP_NAME') }} | Admin</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
    <!-- Auth Style -->
    <link rel="stylesheet" href="{{ asset('dist/css/authstyle.css')}}">
    <link rel="icon" type="image/x-icon" href="{{ asset('img/favicon.png')}}">
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <!-- <a href="{{ url('/') }}">{{ env('APP_NAME') }}</a> -->
            <!-- <a href="{{ url('/') }}">  <img src="{{ asset('frontend/assets/img/logo/bariLogo.png') }}" class="img-fluid" alt="Baribuy Logo"></a> -->
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <div class="text-center">
                    <a href="{{ url('/') }}" class="login-logo"> <img src="{{ asset('frontend/assets/img/logo/bariLogo.png') }}" class="img-fluid" alt="Baribuy Logo"></a>
                </div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="list-unstyled">
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <p class="login-box-msg">OTP has been Send To your Email Pleas enter OTP and verify your account</p>
                <form method="POST" action="">
                    @csrf
                    <div class="input-group mb-2">
                        <label class="input">
                            <input class="input__field"  type="text" name="otp"  placeholder="Enter OTP" />
                            <span class="input__label">OTP</span>
                        </label>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-phone"></span>
                            </div>
                        </div>
                    </div>
                   
                    <div class="row">
                        <div class="col-12">
                            <p class="mb-1 text-center">
                                <a class="btn btn-link font-small" href="#"> Resend OTP</a>
                            </p>
                        </div>
                        <div class="col-lg-12">
                            <button type="submit" class="btn btn-primary btn-block btn-submit-custom">Verify</button>
                        </div>
                    </div>
                    
                </form>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('dist/js/adminlte.min.js') }}"></script>
   
</body>

</html>