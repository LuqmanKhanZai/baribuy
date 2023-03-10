@extends('layouts.frontend.app')

@section('content')
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
    <!-- Mailing Box -->
    <section id="mailing--box">
        <!-- Button trigger modal -->
        <span type="button" class="" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            Join Our Mailing List <i class="fa-solid fa-angle-down"></i>
        </span>

        <!-- Modal -->
        <div class="modal fade template--modal" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title m-auto" id="staticBackdropLabel">Join Our Mailing List </h5>
                        <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                    </div>
                    <div class="modal-body">
                        <p>
                            Don't miss out
                        </p>
                        <p>
                            Sign up to get the latest second home listings, buying tips
                            and top vacation destinations.
                        </p>
                        <form>
                            <div class="mb-3">
                                <!-- <label for="exampleInputEmail1" class="form-label">Email address</label> -->
                                <input type="email" class="form-control" placeholder="Email" id="exampleInputEmail1"
                                    aria-describedby="emailHelp">
                                <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                            </div>
                            <div class="d-flex justify-content-between">
                                <button type="submit" class="btn btn-primary">SUBSCRIBE</button>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">DISMISS</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Mailing Box -->

    <!-- Invest Now Section -->
    <section id="investNow">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section--heading">
                    Fractional Real Estate Investing Simplified
                    </div>
                    <p class="sub--heading text-center">
                    Invest in homes and earn rental income. We take care of the sourcing, financing, and management of the property. You benefit from a seamless investment experience for as little as $100 and earn monthly rental income based on your investment. 
                    </p>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-4">
                    <div class="col--heading">
                    Sourcing 
                    </div>
                    <p class="text-center col--para">
                    Baribuy will focus on homes that have high potential for both appreciation and rental income. We strive to be transparent in each of the homes we offer so you know exactly what you are investing in. 

                    </p>
                </div>
                <div class="col-lg-4">
                    <div class="col--heading">
                    Management 
                    </div>
                    <p class="text-center col--para">
                    Baribuy will manage the properties, disburse the rental income monthly to all the fractional owners and upon sale of the property distribute the principal and appreciation amount to the investors.  

                    </p>
                </div>
                <div class="col-lg-4">
                    <div class="col--heading">
                    Social Impact
                    </div>
                    <p class="text-center col--para">
                        Baribuy is passionate about giving back to the community. It is our pledge that for every twenty homes we offer, Baribuy will purchase a home and offer it as an affordable housing option to a family in need

                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- Invest Now Section -->

    <!-- Carousel -->
    <section id="carousel">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="2000">
                                <img src="{{ asset('frontend/assets/img/houses/10.jpg') }}" class="d-block w-100"
                                    alt="...">
                            </div>
                            <div class="carousel-item" data-bs-interval="2000">
                                <img src="{{ asset('frontend/assets/img/houses/4.jpg') }}" class="d-block w-100"
                                    alt="...">
                            </div>
                            <div class="carousel-item" data-bs-interval="2000">
                                <img src="{{ asset('frontend/assets/img/houses/6.jpg') }}" class="d-block w-100"
                                    alt="...">
                            </div>
                        </div>
                        <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                                                                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                                                      <span class="visually-hidden">Previous</span>
                                                                                    </button>
                                                                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                                                                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                                                      <span class="visually-hidden">Next</span>
                                                                                    </button> -->
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="heading--main">
                        Fox Hill
                    </div>
                    <span class="subheading">
                        $1,528,000  20% shares available
                        <!-- <i class="bi bi-info-circle" type="button" data-bs-toggle="tooltip" data-bs-html="true"
                            title="<em>Tooltip</em> <u>with</u> <b>HTML</b>"></i> -->

                    </span>
                    <p class="available--now mt-1">
                        Available Now
                    </p>
                    <p class="para--text">
                        The great room, which opens to the deck, offers glowing wood ceilings, a grand stone fireplace
                        and a
                        window wall to frame the view. The gourmet kitchen with bar seating has an adjoining dining room
                        flanked by windows
                    </p>
                    <div class="d-flex mt-5">
                        <a href="#" class="bg--btn">
                            Read More
                        </a>
                        <a href="#" class="no-bg--btn ms-4">
                            Invest Now
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Carousel -->

    <!-- blue bg section -->
    <section id="bluebg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading--bluebg">
                    Our Mission & Values
                    </div>
                </div>
            </div>
            <div class="row details">
                <div class="col-lg-4 border--bottom--white">
                    <h4 class="col--heading">
                    <strong class="text-light">Learn</strong> 
                    </h4>
                    <p>
                    Baribuy is with you on this investing journey every step of the way. We provide thoughtful content to help understand the real estate market better and access a community of like-minded investors to learn more.
                    </p>
                </div>
                <div class="col-lg-4 bg--white border--bottom--black">
                    <h4 class="col--heading">
                        <strong> Simplified approach  </strong>
                    </h4>
                    <p>
                    We are focused on simplicity without sacrificing the experience. By leveraging the latest technology stack, we have created a seamless real estate investing platform for you. 
                    </p>
                </div>
                <div class="col-lg-4 border--bottom--white">
                    <h4 class="col--heading">
                    <strong class="text-light">Smart Investments </strong>
                    </h4>
                    <p>
                    Baribuy analyzes data across various amounts of data points before any investment is made. We aim to maximize returns for our investors and be transparent about why we are making the investment. After purchase, we will provide a monthly market assessment of each of the properties owned for our investors to always be updated on their investment. 

                    </p>
                </div>

                <div class="col-lg-4">
                    <h4 class="col--heading">
                    <strong class="text-light">    Security </strong>

                    </h4>
                    <p>
                    Security is our priority. Baribuy knows the importance of the security of your data and funds. All information is encrypted using the latest technology available. 

                    </p>
                </div>

                <div class="col-lg-4 bg--white">
                    <h4 class="col--heading">
                    <strong>Transparency </strong> 
                    </h4>
                    <p>
                    Total transparency in everything we do. We openly disclose all related fees, risk and investment overview related to each offering on our listing page. We want to build a long-term relationship with each of our investors and hope to gain your trust with our transparency.
                    </p>
                </div>
                <div class="col-lg-4">
                    <h4 class="col--heading">
                    <strong class="text-light"> Social Impact  </strong>
                    </h4>
                    <p>
                    Baribuy is passionate about giving back to the community. The more we succeed as a company the higher the potential impact we can have in the communities Baribuy has invested in. It is our pledge that for every twenty homes we offer, Baribuy will purchase a home and offer it as an affordable housing option to a family in need.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- blue bg section -->

    <!-- invester link section -->

    <section id="investerlink">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h1>Get insights from like minded investors</h1>
                    <p>Discover new investment opportunities and gain exposure to valuable ideas from an active
                        investing <br> community</p>
                </div>
                <div>
                    <a href="#" class="bg--btn">
                        Community
                    </a>
                </div>
            </div>
        </div>
    </section>
    
@endsection
