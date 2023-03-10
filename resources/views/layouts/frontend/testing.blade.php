    <!-- @if (\Request::route()->getName() == 'home')
        <div class="bg--hero">
            @include('layouts.frontend.header')
            <section id="hero">
                <div class="container">
                    <div class="d-flex justify-content-between align-items-center my-5 py-5">
                        <div class="left--text">
                            <h1 class="heading--main">
                                Invest in Your Future.
                            </h1>
                            <p class="subheading--main">
                                Fractional real estate investing for all.
                                Invest for as little as $100
                            </p>
                            <a href="{{ url('listings') }}" class="primary--btn mb-2 d-inline-block mt-3">
                                Start Here
                            </a>
                        </div>
                        <div class="right--video">
                            <video height="340" poster="{{ asset('frontend/assets/img/houses/101.jpg') }}" id="vidd" loop autoplay muted >
                                <source src="{{ asset('frontend/assets/video/home.mov') }}" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    @else
        @include('layouts.frontend.header')
    @endif -->