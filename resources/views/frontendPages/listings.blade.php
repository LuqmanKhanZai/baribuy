@extends('layouts.frontend.app')

@section('content')
<style>
    .animals {
      margin-top: 30px;
    }
    .animal {
      padding: 15px 20px;
      width: 100%;
      font-weight: 700;
      background: rgba(0,0,0,0.1);
      margin-bottom: 5px;
    }
</style>

    <section id="listing--section">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="sidebar">
                        <!-- <div class="filters">
                            <a href="#">
                                <span class="add-button">
                                    <i class="fa-solid fa-square-plus"></i>
                                    <small> Add New Filters</small>
                                </span>
                            </a>
                            <ul class="added-filters">
                                <li>
                                    <svg width="11" height="17" viewBox="0 0 11 17" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M10.4312 8.41046C10.1204 6.98249 9.85199 5.74926 10.3835 4.64011C10.4268 4.54973 10.4157 4.44265 10.3547 4.36307C10.2937 4.28351 10.1932 4.245 10.0946 4.26342C10.0306 4.27538 8.60299 4.56441 7.6893 6.5818C7.44181 6.27434 7.06581 5.7488 6.74135 5.0516C6.02443 3.51097 5.90065 1.92659 6.37343 0.342301C6.40258 0.24475 6.37346 0.139065 6.29846 0.0702013C6.22348 0.00130477 6.11584 -0.0188163 6.02098 0.0184708C5.98914 0.0309884 5.23313 0.333834 4.51518 1.11537C3.85457 1.83448 3.10149 3.11207 3.26545 5.11465C3.35258 6.17878 3.34315 6.92422 3.30204 7.43256C3.09197 6.7249 2.74426 6.18446 2.43464 5.81046C1.91013 5.17681 1.38436 4.87406 1.36222 4.86151C1.2722 4.81038 1.16071 4.81602 1.07634 4.87605C0.992 4.93605 0.950098 5.03955 0.968958 5.14138C1.29262 6.88976 0.97188 7.88283 0.632278 8.93421C0.38196 9.70917 0.123108 10.5106 0.123108 11.6232C0.123174 14.588 2.53522 17 5.49999 17C8.46476 17 10.8768 14.588 10.8768 11.6232C10.8768 10.4575 10.6401 9.37 10.4312 8.41046ZM7.48321 16.0428C7.82972 15.6089 8.03757 15.0597 8.03757 14.4624C8.03757 12.6505 7.48188 11.1588 7.01571 10.2265C6.5094 9.21381 6.00544 8.63289 5.98426 8.60868C5.88744 8.49802 5.7193 8.4868 5.60866 8.58362C5.49803 8.68044 5.48681 8.84858 5.58359 8.95921C5.60279 8.98119 7.50519 11.1931 7.50519 14.4624C7.50519 15.5681 6.60565 16.4677 5.49996 16.4677C4.35229 16.4677 3.49475 15.409 3.49475 14.4624C3.49475 13.9932 3.59679 13.6749 3.69663 13.4254C3.75125 13.2889 3.68484 13.134 3.54834 13.0794C3.41181 13.0248 3.25692 13.0912 3.20233 13.2276C3.09064 13.5069 2.96237 13.8996 2.96237 14.4624C2.96237 15.0274 3.18503 15.6035 3.57753 16.0695C1.85996 15.324 0.655487 13.6118 0.655487 11.6232C0.655487 10.5945 0.890299 9.86748 1.13889 9.09783C1.4419 8.15965 1.75401 7.19347 1.58952 5.69777C2.14159 6.19521 2.96237 7.20104 2.96237 8.78396C2.96237 8.89005 3.02536 8.986 3.12271 9.02817C3.22 9.07037 3.33309 9.05072 3.41055 8.9782C3.51995 8.8757 4.05273 8.2056 3.79607 5.07122C3.6778 3.62715 4.04629 2.42331 4.89114 1.49315C5.17666 1.17882 5.47187 0.949719 5.71093 0.792535C5.32255 2.66323 5.7777 4.2427 6.25865 5.27625C6.83343 6.51141 7.55274 7.23832 7.58309 7.26867C7.64704 7.33265 7.73917 7.35975 7.82766 7.34062C7.91611 7.32146 7.98876 7.25868 8.02054 7.17394C8.50859 5.87238 9.2118 5.27001 9.68494 4.99831C9.38459 6.10527 9.64138 7.28544 9.91096 8.52378C10.1241 9.50265 10.3444 10.5149 10.3444 11.6233C10.3445 13.5883 9.1684 15.2837 7.48321 16.0428Z"
                                            fill="#FF7D05" />
                                        <path
                                            d="M5.78706 10.5117C5.64372 10.4795 5.50125 10.5697 5.46908 10.7131C5.39457 11.045 5.29237 11.2874 5.20511 11.4509C4.65613 10.8102 4.14411 10.7891 4.08039 10.7891C3.9334 10.7891 3.8142 10.9083 3.8142 11.0553C3.8142 11.4496 3.76778 11.7859 3.66811 12.1136C3.62534 12.2543 3.7047 12.403 3.84534 12.4457C3.87118 12.4536 3.89724 12.4574 3.92291 12.4574C4.03699 12.4574 4.14251 12.3834 4.17744 12.2685C4.26005 11.9969 4.31188 11.7132 4.33406 11.409C4.33934 11.4117 4.34472 11.4146 4.35013 11.4175C4.50735 11.5031 4.74681 11.683 4.99464 12.0547C5.03886 12.1211 5.11052 12.1641 5.18987 12.172C5.26939 12.1799 5.34795 12.1517 5.4043 12.0953C5.44391 12.0557 5.79686 11.6836 5.98851 10.8296C6.02071 10.6862 5.93053 10.5438 5.78706 10.5117Z"
                                            fill="#FF7D05" />
                                    </svg>
                                    <span>Trending</span>
                                    <i class="fa-solid fa-xmark"></i>
                                </li>
                                <li>
                                    <span>For Sale</span>
                                    <i class="fa-solid fa-xmark"></i>
                                </li>
                            </ul>
                        </div> -->
                        <div class="items--list--panel" id="items--list--panel">
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <div class="nav flex-column nav-pills mt-1 me-3" id="v-pills-tab" role="tablist"
                                        aria-orientation="vertical">

                                        @foreach ($properties as $key => $property)

                                        <div class="nav-link {{$key == 0 ? 'active' : ''}}" id="v-pills-some-{{$property->id}}" data-bs-toggle="pill"
                                            data-bs-target="#v-pills-{{$property->id}}" type="button" role="tab"
                                            aria-controls="v-pills-{{$property->id}}" aria-selected="true">
                                            <div class="item--list">

                                                <div class="thumbnail--box">
                                                    <img src="{{asset($property->thumbnail_url)}}" alt="">
                                                    <span class="trending--tag"> Trending </span>
                                                </div>
                                                <div class="text--box">
                                                    <span class="heading">{{$property->title}}</span>
                                                    <span class="subheading">
                                                        $ {{$property->purchase_price}} . 20% shares available
                                                        <i class="bi bi-info-circle"></i>

                                                    </span>
                                                    <p class="description--text">
                                                        {{$property->description}}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        @endforeach
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="tab-content" id="nav-tabContent">

                        @foreach ($properties as $key => $property)
                            <!-- Tab Content Start -->
                            <div class="tab-pane fade {{$key == 0 ? 'show active' : ''}}" id="v-pills-{{$property->id}}" role="tabpanel"
                                aria-labelledby="v-pills-home-tab">
                                <div class="d-flex  justify-content-between">
                                    <h1 class="list--detail--heading">
                                        {{$property->title}}
                                    </h1>
                                    <a href="#" class="btn--invest--now">Invest Now</a>
                                </div>
                                <h2 class="list--detail--subHeading">
                                    $ {{$property->purchase_price}} <strong>.</strong> 20% shares available 
                                    <i class="bi bi-info-circle"></i>
                                </h2>

                                <div class="d-flex  justify-content-between">
                                    <p class="available--now">
                                        Available Now
                                    </p>
                                    <div class="right--icon">
                                        <a href="#">
                                            <i class="fa-regular fa-heart"></i> Favorite
                                        </a>
                                        <a href="#">
                                            <i class="bi bi-share"></i> Share
                                        </a>
                                    </div>
                                </div>

                                <!-- Slider Start -->
                                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        @foreach( $property->images as $key2 => $image) 
                                            <div class="carousel-item {{$key2 == 0 ? 'active' : ''}}">
                                                <img src="{{asset($image->url)}}" class="d-block w-100" alt="...">
                                            </div>
                                        @endforeach
                                        <!-- <div class="carousel-item">
                                            <img src="{{asset('assets/img/houses/11.jpg')}}" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="{{asset('assets/img/houses/9.jpg')}}" class="d-block w-100" alt="...">
                                        </div> -->
                                    </div>

                                    <button class="carousel-control-prev" type="button"
                                        data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button"
                                        data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>

                                </div>
                                <div class="num">1/3</div>
                                <!-- Slider Start -->

                                <div class="after--carousel">
                                    <div class="row">
                                        <div class="col-lg-7">
                                            <div class="d-flex justify-content-between">
                                                <div>
                                                    <h4 class="small--heading">ATTRIBUTES</h4>
                                                    <span class="no--beds">{{$property->bed}} Beds</span>
                                                    <span class="no--baths">{{$property->bath}} Baths</span>
                                                    <span class="no--area">3,263{{$property->square_feet}} sq ft</span>
                                                </div>
                                                <div>
                                                    <h4 class="small--heading"> BUILD </h4>
                                                    <span class="year--build">{{$property->year_build}}</span>
                                                </div>
                                            </div>
                                            <div class="mt-3">
                                                <h4 class="small--heading"> LOCATION </h4>
                                                <!-- Button trigger modal -->
                                                <a type="button" class="modal--tag" data-bs-toggle="modal"
                                                    data-bs-target="#staticBackdrop">
                                                    {{$property->location}}
                                                </a>

                                                <!-- Modal -->
                                                <!-- Location Map Start -->
                                                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static"
                                                    data-bs-keyboard="false" tabindex="-1"
                                                    aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h1 class="modal-title fs-5" id="staticBackdropLabel">House
                                                                    Map</h1>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <iframe
                                                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3591.1708489422344!2d-80.13147568502514!3d25.830914983605442!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88d9b311a5db175b%3A0x32bef21eb8e1526d!2s5288%20Alton%20Rd%2C%20Miami%20Beach%2C%20FL%2033140%2C%20USA!5e0!3m2!1sen!2s!4v1665416917905!5m2!1sen!2s"
                                                                    width="100%" height="450" style="border:0;"
                                                                    allowfullscreen="" loading="lazy"
                                                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Location Map Ended -->



                                            </div>
                                            <div class="mt-3">
                                                <h4 class="small--heading"> ABOUT THIS HOME</h4>
                                                <p class="small--para">
                                                    Cool and contemporary, this new construction home on a beautifully
                                                    landscaped corner lot offers
                                                    elegance and privacy. The backyard features an inviting pool and spa,
                                                    plus a covered outdoor kitchen
                                                    and lounge
                                                </p>
                                                <p class="small--para">
                                                    The open plan main floor includes a wall of built-in cabinetry, a sleek
                                                    dining space and a gourmet kitchen with a six-burner Viking cooktop,
                                                    Sub-Zero double refrigerator and double freezer, a wine fridge and a
                                                    glass-enclosed 80-bottle wine rack.

                                                </p>
                                            </div>
                                            <div class="mt-3">
                                                <h4 class="small--heading">
                                                    BARIBUY HOME SCORE <i class="bi bi-info-circle" type="button"
                                                        data-bs-toggle="tooltip" data-bs-html="true"
                                                        title="<em>Tooltip</em> <u>with</u> <b>HTML</b>"></i>
                                                </h4>
                                                <p class="stars--para"><i class="bi bi-star-fill"></i><i
                                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                        class="bi bi-star-fill"></i><i class="bi bi-star"></i> </p>
                                            </div>
                                            <div class="mt-3">
                                                <h4 class="small--heading">
                                                    Numbers Breakdown <i class="bi bi-info-circle" ></i>
                                                </h4>
                                                <div class="d-flex justify-content-between custom--lines">
                                                    <p class="text-muted">Property Purchase Price</p>
                                                    <p class="text-muted">$ {{$property->purchase_price}}</p>
                                                </div>
                                                <div class="d-flex justify-content-between custom--lines">
                                                    <p class="text-muted">Renovations & Repair Reserves</p>
                                                    <p class="text-muted">$ {{$property->repair_price}}</p>
                                                </div>
                                                <div class="d-flex justify-content-between custom--lines">
                                                    <p class="text-muted">Offering & Closing Cost</p>
                                                    <p class="text-muted">$ {{$property->closing_cost}}</p>
                                                </div>
                                                <div class="d-flex justify-content-between custom--lines">
                                                    <p class="text-muted">BariBuy Fee</p>
                                                    <p class="text-muted">$ {{$property->baribuy_fee}}</p>
                                                </div>
                                                <div class="d-flex justify-content-between custom--lines total--payment">
                                                    <p class="">TOTAL PROPERTY AMOUNT</p>
                                                    <p class="">$ {{$property->total_amount}}</p>
                                                </div>
                                                <div class="d-flex justify-content-between custom--lines mt-4">
                                                    <p class="text-muted">IPO Price Per Share</p>
                                                    <p class="text-muted">$ {{$property->per_share}}</p>
                                                </div>
                                                <div class="d-flex justify-content-between custom--lines">
                                                    <p class="text-muted">Total Shares</p>
                                                    <p class="text-muted">{{$property->total_share}}</p>
                                                </div>
                                                <div class="d-flex justify-content-between custom--lines">
                                                    <p class="text-muted">Hold Period</p>
                                                    <p class="text-muted">{{$property->hold_period}}</p>
                                                </div>
                                                <div class="light--bg mt-3">
                                                    <div class="d-flex justify-content-between custom--lines">
                                                        <p class="">Asset Management Fee (Quarterly)</p>
                                                        <p class="">$ {{$property->management_fee}}</p>
                                                    </div>
                                                    <p class="text-muted">Deducted from rental income</p>
                                                </div>
                                                <div class="light--bg mt-3">
                                                    <div class="d-flex justify-content-between custom--lines">
                                                        <p class="">Monthly Property Taxes</p>
                                                        <p class="">$ {{$property->monthly_tax}}</p>
                                                    </div>
                                                    <p class="text-muted">Deducted from rental income</p>
                                                </div>
                                                <div class="light--bg mt-3">
                                                    <div class="d-flex justify-content-between custom--lines">
                                                        <p class="">Monthly Home Insurance</p>
                                                        <p class="">$ {{$property->monthly_insurance}}</p>
                                                    </div>
                                                    <p class="text-muted">Deducted from rental income</p>
                                                </div>
                                                <div class="light--bg mt-3">
                                                    <div class="d-flex justify-content-between custom--lines">
                                                        <p class="">Monthly Rent</p>
                                                        <p class="">$ {{$property->monthly_rent}}</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-3">
                                                <h4 class="small--heading">
                                                    Documents
                                                </h4>
                                                <div class="document--link d-flex justify-content-between">
                                                    <a href="#">Offering Circular <i
                                                            class="fa-solid fa-share-from-square"></i></a>
                                                    <a href="#">Risk Details <i
                                                            class="fa-solid fa-share-from-square"></i></a>
                                                </div>
                                                <div class="document--link d-flex justify-content-between">
                                                    <a href="#">Offering Overview <i
                                                            class="fa-solid fa-share-from-square"></i></a>
                                                    <a href="#">Proceeds Overview <i
                                                            class="fa-solid fa-share-from-square"></i></a>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Calculator Start -->
                                        <div class="col-lg-5">
                                            <div class="calculator--box">
                                                <span class="title--span"> ESTIMATE FOR YOUR INVESTMENT</span>

                                                <div class="range--slider">
                                                    <label for="customRange3" class="form-label">Investment Total <i
                                                            class="bi bi-info-circle" ></i></label>
                                                    <div class="range-slider">
                                                        <input class="range-slider__range" type="range" value="1528000"
                                                            min="0" max="2500000">
                                                        <span class="range-slider__value">1,528,000</span>
                                                    </div>

                                                    <label for="customRange4" class="form-label mt-3 years">Hold Period <i
                                                            class="bi bi-info-circle"></i></label>
                                                    <div class="range-slider">
                                                        <input class="range-slider__range" type="range" value="5" min="1"
                                                            max="20">
                                                        <span class="range-slider__value years__value">5</span>
                                                    </div>

                                                    <label for="customRange5" class="form-label mt-3">Appreciation % <i
                                                            class="bi bi-info-circle" type="button" ></i></label>
                                                    <div class="range-slider">
                                                        <input class="range-slider__range" type="range" value="5" min="1"
                                                            max="100">
                                                        <span class="range-slider__value per__value">5</span>
                                                    </div>

                                                    <label for="customRange5" class="form-label mt-3">Rental Dividend Rate
                                                        <i class="bi bi-info-circle" type="button"></i></label>
                                                    <div class="range-slider">
                                                        <input class="range-slider__range" type="range" value="4" min="1"
                                                            max="20">
                                                        <span class="range-slider__value per__value">4</span>
                                                    </div>
                                                </div>
                                                
                                                <div class="value--display">
                                                    <div class="d-flex justify-content-between">
                                                        <p>Total Return <i class="bi bi-info-circle"></i></p>
                                                        <p>$582,000</p>
                                                    </div>
                                                    <div class="d-flex justify-content-between">
                                                        <p>Total dividend <i class="bi bi-info-circle" ></i></p>
                                                        <p>$142,000</p>
                                                    </div>
                                                    <div class="d-flex justify-content-between">
                                                        <p>Annual Return<i class="bi bi-info-circle"></i></p>
                                                        <p>10%</p>
                                                    </div>
                                                </div>

                                            </div>

                                            <ul class="link--sidebar">
                                                <a href="#">
                                                    <li>Learn</li>
                                                </a>
                                                <a href="#">
                                                    <li>Contact us </li>
                                                </a>
                                                <a href="#">
                                                    <li>FAQ</li>
                                                </a>
                                            </ul>

                                        </div>
                                        <!-- Calculator Ended -->

                                    </div>
                                </div>
                            </div>
                        <!-- Tab Content End-->
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
