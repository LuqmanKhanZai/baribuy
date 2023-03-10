@extends('layouts.frontend.app')

@section('content')
<section id="investment_section_requirment">
    <div class="container mt-3">
        <div class="row">

            <div class="col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title"><i class="fa-solid fa-sack-dollar text-warning"></i> Investment </h2>
                        <!-- <small class="text-muted">A verification email has been sent to abctest@gmail.com</small> -->
                        <small class="text-muted">A verification email has been sent to {{$user->email}}</small>

                    </div>
                </div>
            </div>
            <!-- First Four Widgets Start -->
            <div class="col-lg-9">
                <div class="row">
                    <div class="col">
                        <div class="inner-a-tag">
                            <a href="{{route('page.emailverify')}}">
                                <i class="fa-solid fa-circle-info"></i>
                                <br>
                                Verify your email address
                                <br>
                                <i class="fa-solid fa-arrow-right-long"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="inner-a-tag">
                            <a href="/basic-info">
                                <i class="fa-solid fa-circle-info"></i>
                                <br>
                                Create an investment account
                                <br>
                                <i class="fa-solid fa-arrow-right-long"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="inner-a-tag">
                            <a href="/register"><i class="fa-solid fa-circle-info"></i>
                                <br>
                                Identity verification
                                <br>
                                <i class="fa-solid fa-arrow-right-long"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="inner-a-tag">
                            <a href="/register"><i class="fa-solid fa-circle-info"></i>
                                <br>
                                Link and verify your bank account
                                <br>
                                <i class="fa-solid fa-arrow-right-long"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- First Four Widgets Ended -->

        </div>

    </div>
</section>
<section id="profile_header">

    <div class="d-flex">
        <div class="img--div position-relative">
            <span class="position-relative circular--landscape" id="profileImage">
                <img id="profile-picture" src="{{ $user->img == null ? asset('frontend/assets/img/profile_avatar.png') : '/images/userProfile/' . $user->img }}" class="img-fluid" alt="" />
                <i class="fas fa-camera"></i>
            </span>
        </div>
        <form id="profileImageUpload" style="display: none;" enctype="multipart/form-data" method="POST">

            @csrf

            <input type="file" accept="image/*" onchange="previewFile(this);" name="image" id="profilePhoto">

            <input type="submit" name="upload" id="uploadPhoto" class="btn btn-primary" value="Upload">

        </form>
        <div class="profile--text">
            <h1 class="main--title position-relative">
                <!-- {{$user->name}} -->
                {{ isset($user->customerInfo) == true ? $user->customerInfo->first_name.' '.$user->customerInfo->last_name : ''  }}
                <span class="edit edit-btn-sidebar">
                    <a href="#" onclick="openSidebar()">
                        <i class="fas fa-pencil"></i>
                    </a>
                </span>
            </h1>
            <span class="totle--fund">
                <!-- {{$user->name}} -->
                {{ isset($user->customerInfo) == true ? $user->customerInfo->first_name.' '.$user->customerInfo->last_name : ''  }}
            </span>
        </div>
    </div>
</section>

<!-- SideBar Alert Section Start -->
<section id="right--sidebar-section">
    <section id="rightSidebar">
        <div class="inner--rightsidebar">
            <div class="top--bar">

                <div class="text-center">
                    <div class="sidebar--img">
                        <img id="profile-picture" src="{{ $user->img == null ? asset('frontend/assets/img/profile_avatar.png') : '/images/userProfile/' . $user->img }}" class="img-fluid" alt="" />

                        <i class="fas fa-camera"></i>
                    </div>
                    <h5 class="title--center">{{ isset($user->customerInfo) == true ? $user->customerInfo->first_name.' '.$user->customerInfo->last_name : ''  }}</h5>
                    <h5 class="title--amount">{{$user->phone}}</h5>
                </div>
                <i class="fas fa-times close--sidebar--icon" onclick="closeSidebar()"></i>
                <hr class="section--hr">
            </div>
            <div class="custom--ul">
                <ul>
                    <li>
                        <a href="#">
                            <i class="fas fa-piggy-bank"></i> Investment
                            <span class="bg-primary p-1 rounded-1 text-light">125</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fas fa-heart"></i> Favourite
                        </a>
                    </li>
                    <hr>
                    <li>
                        <a href="#">
                            <i class="fa-solid fa-user"></i> Profile
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa-solid fa-wallet"></i> Wallet
                            <span class="bg-primary p-1 rounded-1 text-light">$ 555</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa-solid fa-folder"></i> Document
                        </a>
                    </li>
                    <hr>
                    <li>
                        <a href="#">
                            <i class="fa-solid fa-circle-info"></i> FAQs
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa-solid fa-book-open"></i> Learn
                        </a>
                    </li>
                    <hr>
                    <li>
                        <a href="#">
                            <i class="fa-solid fa-arrow-right-from-bracket"></i> Logout
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
</section>
<!-- SideBar Alert Section Ended -->


<section id="mssage-box">
    <div class="d-flex">
        @if (session('msg_success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session('msg_success') }}</strong>
        </div>
        @endif
    </div>
</section>

<section id="tabs">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Profile</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Wallet</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Documet</button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <!-- Profile -->
                    <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                        
                        <h1 class="tab--heading">
                            <i class="fa-solid fa-piggy-bank me-2"></i> Investment Information
                            <span class="edit">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#investment">
                                    <i class="fas fa-pencil"></i>
                                </a>
                            </span>
                        </h1>

                        <div class="details--section">
                            <span class="title"> Address </span>
                            <span class="title--value"> {{ $user->address  }} </span>
                        </div>

                        <div class="details--section">
                            <span class="title">Email </span>
                            <span class="title--value"> {{ $user->email }} </span>
                        </div>

                        <div class="details--section">
                            <span class="title"> Phone </span>
                            <span class="title--value"> {{ $user->phone }} </span>
                        </div>

                        <h1 class="tab--heading">
                            <i class="fa-solid fa-file-invoice-dollar"></i> Accreditation & Tax Information
                            <span class="edit">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#information">
                                    <i class="fas fa-pencil"></i>
                                </a>
                            </span>
                        </h1>

                        <div class="details--section">
                            <span class="title"> U.S. Citizen or Resident </span>
                            <span class="title--value">
                                @if($user->customerInfo)
                                    {{ isset($user->customerInfo) == true ? (($user->customerInfo->citizen_ship == 'us_citizen' || $user->customerInfo->citizen_ship == 'us_resident') ? 'Yes' : '') : (($user->customerInfo->citizen_ship == 'non_us_citizen_or_resident') ? 'No' : '' )  }}
                                @endif
                            </span>
                        </div>

                        <div class="details--section">
                            <span class="title"> Backup Tax Withholding Exempt </span>
                            <span class="title--value"> {{ $user->backup_tax_withholding_exempt == 1 ? 'Yes' : 'No' }}</span>
                        </div>

                        <div class="details--section">
                            <span class="title"> Accredited Investor </span>
                            <span class="title--value"> {{ $user->accredited_investor == 1 ? 'Yes' : 'No' }} </span>
                        </div>

                        <div class="details--section">
                            <span class="title"> Annual Income </span>
                            <span class="title--value"> {{ $user->annual_income }}  </span>
                        </div>

                        <div class="details--section">
                            <span class="title"> Net Worth </span>
                            <span class="title--value"> {{ $user->net_worth }} </span>
                        </div>

                        <p>
                            You acknowledge that your income and net worth are accurate to the best of your
                            knowledge, and further understand that the platform will limit the total amount you can
                            invest in any series to a maximum of 10% of the greater of either your income or net
                            worth.
                        </p>

                        <p>
                            Based on what you entered, the maximum amount you can invest in any asset on the
                            platform is $346,646.60
                        </p>

                        <h1 class="tab--heading">
                            <i class="fa-solid fa-lock"></i> Security Settings
                            <span class="edit">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#password">
                                    <i class="fas fa-pencil"></i>
                                </a>
                            </span>
                        </h1>

                        <div class="details--section">
                            <span class="title"> Password  </span>
                            <span class="title--value">********</span>
                        </div>

                    </div>
                    <!-- Profile -->

                    <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">

                        <!-- If wallet is empty -->
                        <h1 class="tab--heading">
                            <i class="fa-solid fa-sack-dollar"></i> Fund
                            <span class="btn-add">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#addFundModal">
                                    <i class="fas fa-plus"></i>
                                    Add new
                                </a>
                            </span>
                        </h1>
                        <h1 class="fund--heading">
                            @isset($funds->fund)
                                {{ $funds->fund }}
                            @endisset
                        </h1>
                        <!-- If wallet is empty -->
                    </div>

                    <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
                        <h1 class="tab--heading">
                            <i class="fa-solid fa-folder"></i> Document
                            <span class="btn-add">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#document">
                                    <i class="fas fa-plus"></i>
                                    Add new
                                </a>
                            </span>
                        </h1>

                        <div class="details--section">
                            <span class="title">
                                Document
                            </span>
                        </div>
                        <div class="details--section">
                            <table class="table">
                                <tr>
                                    <th>Name</th>
                                    <th>Approved</th>
                                    <th>Action</th>
                                </tr>
                                @isset($docs)
                                    @foreach ($docs as $doc)
                                    <tr>
                                        <td>
                                            <a target="_blank" href="{{ asset($doc->file_name) }}">{{ $doc->name }}</a>
                                        </td>
                                        <td>{{ $doc->approved }}</td>
                                        <td><a href="{{ route('document.destroy', $doc->id) }}">Delete</a> </td>
                                    </tr>
                                    @endforeach
                                @endisset
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

@endsection

<script>
    function openSidebar() {
        var element = document.getElementById("rightSidebar");
        element.classList.add("mystyle");
    }

    function closeSidebar() {
        var element = document.getElementById("rightSidebar");
        element.classList.remove("mystyle");
    }
</script>