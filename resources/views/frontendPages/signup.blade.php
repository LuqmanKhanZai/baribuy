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
                <p class="login-box-msg">Easily invest in rental homes.</p>
                <form method="POST" action="{{ route('page.store-user') }}">
                    @csrf

                    <div class="input-group mb-2">
                        <label class="input">
                            <input class="input__field @error('email') is-invalid @enderror" id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email" />
                            <span class="input__label">Email</span>
                        </label>

                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <p class="d-none text-danger" id="email_error">Please fill out this field</p>
                    </div>
                    <div class="input-group mb-2">
                        <label class="input">
                            <input id="password" type="password" class="input__field @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password" />
                            <span class="input__label">Password</span>
                        </label>
                        <!-- <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password"> -->
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <p class="d-none text-danger" id="password_error">Please fill out this field</p>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <button type="submit" class="btn btn-primary btn-block btn-submit-custom" id="sign-up-btn">Signup</button>
                        </div>
                        <div class="col-lg-12">
                        <small class="d-block text-center mt-3"> Already have a account? </small> 
                        <a class="btn btn-link btn-sign-up" href="{{ route('login')}}">Login</a>
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
    <script>
        let timer;

        document.addEventListener('input', e => {
            const el = e.target;
            if (el.matches('[data-color]')) {
                clearTimeout(timer);
                timer = setTimeout(() => {
                    document.documentElement.style.setProperty(`--color-${el.dataset.color}`, el.value);
                }, 100)
            }
        })
    </script>
    @yield("script")
</body>
</html>