<header class="section-header">
  <!--   <section class="header-main">
        
    </section> -->
   
<div style="position: fixed;
  top: 0;
  left: 0;
  z-index: 999;
  width: 100%;
  ">
    <nav class="navbar navbar-expand-lg navbar-dark bg-blue">

        <div class="brand-wrap">
            <a href="{{ url('/') }}">
                <img class="logo" src="{{ asset('frontend/images/logos/logo.jpg') }}" alt="logo">
                <!-- <h3>ABC Accomodation Service</h3> -->
            </a>
        </div>
        <button class="navbar-toggler bg-green" type="button" data-toggle="collapse" data-target="#main_nav"
                aria-controls="main_nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="container">        
            <div class="collapse navbar-collapse" id="main_nav">
                
                <div class="col-lg-12 col-sm-12">
                   <div class="widgets-wrap d-flex justify-content-end"> 
                    <ul class="navbar-nav">

                        <!-- <li class="nav-item">
                            <a class="nav-link" href="{{ url('/') }}">Home</a>
                        </li> -->
                        <li class="nav-item dropdown">
                            <a class="dropdown-item dropdown-toggle" href="#" id="dropdown07" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> ABOUT US </a>
                            <div class="dropdown-menu" aria-labelledby="dropdown07">
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ url('/about') }}">Who are we</a>
                                <div class="dropdown-divider"></div>
                                <!-- <a class="dropdown-item" href="{{ url('/partners') }}">Our key Partners</a> -->
                                <div class="dropdown-divider"></div>
                                
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="dropdown-item dropdown-toggle" href="#" id="dropdown07" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">SUPPORT</a>
                            <div class="dropdown-menu" aria-labelledby="dropdown07">
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ url('/support') }}"> Technical Support  </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ url('/faqs') }}">  FAQs   </a>
                                <div class="dropdown-divider"></div>
                            </div>
                        </li>
                       
                        <li class="nav-item">
                            <a class="dropdown-item" href="#footers">CONTACT US</a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link" href="{{ url('/blog') }}">BLOG</a>
                        </li> -->                      
                    

                    <div class="widget-header">
                            <a href="{{ route('checkout.cart') }}" class="ml-3 icontext">
                                <div class="icon-wrap icon-xs bg2 round text-secondary">
                                    <i class="fa fa-shopping-cart"></i>
                                </div>
                                <div class="text-wrap">
                                    <small>{{ $cartCount }} Booking</small>
                                </div>
                            </a>
                        </div>
                        
                        @guest
                        <div class="widget-header">
                           <a href="{{ route('login') }}" class="ml-3 icontext">
                                <div class="icon-wrap icon-xs bg-primary round text-white">
                                    <i class="fa fa-user"></i>
                                </div>
                                <div class="text-wrap">
                                    <span>Login</span>
                                </div>
                            </a>
                        </div>
                        <div class="widget-header">
                               
                        </div>
                        @else
                                                
                    </ul>
                        
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="dropdown-item dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->full_name }} <span class="caret"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('account.orders') }}">Profile</a>
                                    <a class="dropdown-item" href="{{ url('/refer') }}">Referral</a>
                                    <a class="dropdown-item" href="{{ route('account.orders') }}">Booking</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                    </form>
                                </div>
                            </li>
                        </ul>
                        @endguest
                    </div>
              






















        </div>
    </div>

</nav>
</div>
   @include('site.partials.nav') 
   
</header>

