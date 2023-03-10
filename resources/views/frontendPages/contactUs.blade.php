@extends('layouts.frontend.app')

@section('content')
    <!-- Hero Section -->
    <section id="main__contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="section--heading">
                        Contact Us
                    </h1>
                    <p class="w-75">
                    No matter where you are in the process, we’re with you at every step. Whether it’s questions about the platform and services, or even general inquiries, we are here to help. Feel free to reach out to us via chat or e-mail and we will respond in a timely manner. 
                    </p>
                </div>
                <div class="col-lg-12">
                    <ul class="links--new">
                        <li>
                            <span class="icon">
                                <i class="fa-regular fa-comment-dots"></i>
                            </span>
                            <span class="ms-2">
                                <a href="#">Chat with us</a>
                                <p class="small">Start a live chat</p>
                            </span>
                        </li>
                        <li>
                            <!-- According to video changing -->
                            <!-- <span class="icon">
                                <i class="fa-regular fa-building"></i>
                            </span>
                            <span class="ms-2">
                                <a href="#">Mail Us @</a>
                                <p class="small">110 Wall Street, New York,
                                    NY 10005</p>
                            </span> -->
                        </li>
                        <li>
                            <span class="icon">
                                <i class="fa-regular fa-envelope"></i>
                            </span>
                            <span class="ms-2">
                                <a href="#">Drop us an email</a>
                                <p class="small">support@baribuy.com</p>
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section -->

    <!-- Useful resources -->
    <section id="useful">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="section--heading">
                        Useful resources
                    </h1>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-lg-6">
                    <div class="box-inner">
                        <h1 class="section--heading font-blue">
                            Help & FAQs
                        </h1>
                        <p class="light--text">
                            Have you tried finding the answers you need in our comprehensive FAQs? We cover common questions
                            about our account type, platforms, pricing and more.
                        </p>
                    </div>
                    <a href="#" class="font-blue mt-3 ms-2 d-inline-block">
                        Go to FAQs <i class="fa-regular fa-circle-right"></i>
                    </a>
                </div>
                <div class="col-lg-6">
                    <div class="box-inner">
                        <h1 class="section--heading font-blue">
                            Learn
                        </h1>
                        <p class="light--text">
                            Have you tried finding the answers you need in our comprehensive FAQs? We cover common questions
                            about our account type, platforms, pricing and more.
                        </p>
                    </div>
                    <a href="#" class="font-blue mt-3 ms-2 d-inline-block">
                        Go to Learn <i class="fa-regular fa-circle-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Useful resources -->
@endsection
