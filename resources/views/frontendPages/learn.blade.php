@extends('layouts.frontend.app')

@section('content')
    <section id="banner" class="learn--banner">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-lg-12">
                    <h1 class="super--heading">
                        Learn
                    </h1>
                    <p class="super--subheading learn--super--subheading">
                    Baribuy is with you on this investing journey every step of the way. We provide thoughtful content to help understand the real estate market better and access a community of like-minded investors to learn more.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- related content section -->
    <section id="relatedcontent">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="section--heading">
                        Related content
                    </h1>
                    <p class="small">
                        99 Articles
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="links--new">
                        <li>
                            <span class="icon">
                                <i class="fa-brands fa-readme"></i>
                            </span>
                            <span class="ms-2">
                                <a href="#">What is an order?</a>
                                <p class="small">3 minutes reading</p>
                            </span>
                        </li>
                        <li>
                            <span class="icon">
                                <i class="fa-brands fa-readme"></i>
                            </span>
                            <span class="ms-2">
                                <a href="#">What is an order?</a>
                                <p class="small">3 minutes reading</p>
                            </span>
                        </li>
                        <li>
                            <span class="icon">
                                <i class="fa-brands fa-readme"></i>
                            </span>
                            <span class="ms-2">
                                <a href="#">What are pips and lots?</a>
                                <p class="small">6 minutes reading</p>
                            </span>
                        </li>
                        <li>
                            <span class="icon">
                                <i class="fa-brands fa-readme"></i>
                            </span>
                            <span class="ms-2">
                                <a href="#">What are pips and lots?</a>
                                <p class="small">8 minutes reading</p>
                            </span>
                        </li>
                        <li>
                            <span class="icon">
                                <i class="fa-brands fa-readme"></i>
                            </span>
                            <span class="ms-2">
                                <a href="#">What is risk Management?</a>
                                <p class="small">4 minutes reading</p>
                            </span>
                        </li>
                        <li>
                            <span class="icon">
                                <i class="fa-brands fa-readme"></i>
                            </span>
                            <span class="ms-2">
                                <a href="#">What is risk Management?</a>
                                <p class="small">2 minutes reading</p>
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <a href="#" class="text--blue">View all <i class="fa-regular fa-circle-right"></i></a>
                </div>
            </div>
        </div>
    </section>
    <!-- related content section -->

    <!-- Calculator Section -->
    <!-- Note : Calculator section is hide according to video instruction -->
    <!-- <section id="calculator">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="section--heading">
                        Calculators
                    </h1>
                    <p>Work out the values you need to trade, without complex manual calculations.</p>
                    <p class="text--blue text-uppercase">
                        Select a Calculator
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="calculator--inner">
                        <div class="header">
                            <h1>
                                All-in-One
                            </h1>
                            <div class="dropdown">
                                <span class="dropdown-toggle" type="button" id="dropdownMenuButton1"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa-solid fa-angle-down"></i>
                                </span>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="body">
                            <p class="mb-0">Account Currency</p>
                            <h1 class="section--heading">
                                USD
                            </h1>

                            <form>
                                <div class="mb-3">
                                    <input type="text" class="form-control" id="instrument" placeholder="Instrument"
                                        aria-describedby="Instrument">
                                </div>
                                <div class="mb-3">
                                    <input type="text" class="form-control" id="amount" placeholder="Amount"
                                        aria-describedby="Amount">
                                </div>
                                <button type="submit" class="bg--btn w-100 mt-3">Calculate</button>
                            </form>
                            <div class="text-center my-3">
                                <a href="#" class="text--blue">RESET</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="calculator--inner">
                        <div class="header">
                            <h1>
                                Currency Converter
                            </h1>
                            <div class="dropdown">
                                <span class="dropdown-toggle" type="button" id="dropdownMenuButton1"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa-solid fa-angle-down"></i>
                                </span>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="body">
                            <form>
                                <div class="mb-3">
                                    <label for="From" class="form-label">From</label>
                                    <input type="text" id="from" class="form-control" aria-describedby="from">
                                </div>
                                <div class="mb-3">
                                    <label for="To" class="form-label">To</label>
                                    <input type="text" id="to" class="form-control" aria-describedby="to">
                                </div>
                                <button type="submit" class="bg--btn w-100 mt-3">Calculate</button>
                            </form>
                            <div class="text-center my-3">
                                <a href="#" class="text--blue">RESET</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- Calculator Section -->
@endsection
