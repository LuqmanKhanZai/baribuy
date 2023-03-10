 <header>
     <div class="container">
         <div class="row">
             <div class="col-lg-6 col-12 d-flex align-items-center">
                 <a href="{{ route('properties') }}" class="link-to-home">
                     <img src="{{ asset('frontend/assets/img/logo/bariLogo.png') }}" class="img-fluid" alt="Baribuy Logo">
                 </a>
             </div>
             <div class="col-lg-6 col-12 text-end">
                 <nav class="navbar navbar-expand-lg navbar-light">
                     <div class="container-fluid">
                         <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                             data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03"
                             aria-expanded="false" aria-label="Toggle navigation">
                             <span class="navbar-toggler-icon"></span>
                         </button>
                         <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                             <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                                 <li class="nav-item">
                                     <a class="nav-link active" aria-current="page" href="{{ route('properties') }}">Home</a>
                                 </li>
                                 <li class="nav-item dropdown">
                                     <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown"
                                         role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                         Resources
                                     </a>
                                     <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                                         <li><a class="dropdown-item" href="{{ route('page.about') }}">About us</a></li>
                                         <li><a class="dropdown-item" href="{{ route('page.learn') }}">Community</a></li>
                                         <!-- <li><hr class="dropdown-divider"></li> -->
                                         <li><a class="dropdown-item" href="#">Help & FAQs</a></li>
                                         <li><a class="dropdown-item" href="{{ route('page.contact-us') }}">Contact Us</a>
                                         </li>
                                     </ul>
                                 </li>
                                 <li class="nav-item">
                                     <a class="nav-link" href="{{ route('page.learn') }}">Learn </a>
                                 </li>
                                 @guest
                                     <li class="nav-item nav-item-btn">
                                         <a class="nav-link" href="{{ route('login') }}">Login</a>
                                     </li>
                                 @else
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown"
                                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        {{ Auth::user()->name }}
                                        <i class="fa fa-user"></i>
                                         </a>
                                         <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                                            <li>
                                                <a class="nav-link" href="{{ route('profile.show') }}">Profile</a>
                                            </li>
                                            <li>
                                                <a class="nav-link" href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                                    {{ __('Logout') }}
                                                </a>
                                                <form id="logout-form" action="{{ url('logout') }}" method="POST"
                                                    style="display: none;">
                                                    @csrf
                                                </form>
                                            </li>
                                         </ul>
                                    </li>
                                @endguest
                                
                                @guest
                                    <li class="nav-item nav-item-btn bg-btn">
                                        <a class="nav-link" href="{{ route('listings') }}">Start Here</a>
                                    </li>
                                @else
                                    <li class="nav-item nav-item-btn bg-btn">
                                        <a class="nav-link" href="{{ route('home') }}">Dashboard</a>
                                    </li>
                                @endguest
                             </ul>
                         </div>
                     </div>
                 </nav>
             </div>
         </div>
     </div>
 </header>
