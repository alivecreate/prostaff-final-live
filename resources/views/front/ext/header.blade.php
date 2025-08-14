<header class="header-with-topbar">
    <!-- start header top bar -->
    <div class="header-top-bar top-bar-dark bg-very-light-gray">
        <div class="container-fluid">
            <div class="row h-45px xs-h-auto align-items-center m-0 xs-pt-5px xs-pb-5px">
                <div class="col-lg-6 col-md-7 text-center text-md-start xs-px-0">
                    <div class="fs-15 text-dark-gray fw-500">
                        Talk to Our Recruitment Experts Today!
                        <a href="{{ route('contact') }}" class="text-dark-gray text-decoration-line-bottom fw-600">Contact now</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-5 text-end d-none d-md-flex">
                    <div class="widget fs-15 fw-500 me-35px lg-me-25px md-me-0 text-dark-gray">
                        <a href="tel:{{ getWebsiteData()['primary_phone'] }}"><i class="feather icon-feather-phone-call"></i>{{ getWebsiteData()['primary_phone'] }}</a>
                    </div>
                    <div class="widget fs-15 fw-500 text-dark-gray d-none d-lg-inline-block">
                        <i class="feather icon-feather-map-pin"></i>Singapore 757516
                    </div> 
                </div>
            </div>
        </div>
    </div>
    <!-- end header top bar -->

    <!-- start navigation -->
    <nav class="navbar navbar-expand-lg header-light bg-white responsive-sticky">
        <div class="container-fluid">
            <div class="col-auto col-lg-2 me-lg-0 me-auto">
                <a class="navbar-brand" href="{{ route('index') }}">
    @if(isset(getWebsiteData()['light_logo']))
        <img src="{{ asset('web/media/sm/' . getWebsiteData()['light_logo']) }}" 
             alt="{{ getWebsiteData()['name'] }}" 
             class="default-logo">
        <img src="{{ asset('web/media/sm/' . getWebsiteData()['light_logo']) }}" 
             alt="{{ getWebsiteData()['name'] }}" 
             class="alt-logo">
        <img src="{{ asset('web/media/sm/' . getWebsiteData()['light_logo']) }}" 
             alt="{{ getWebsiteData()['name'] }}" 
             class="mobile-logo">
    @endif
</a>

            </div>
            <div class="col-auto menu-order position-static">
                <button class="navbar-toggler float-start" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-line"></span>
                    <span class="navbar-toggler-line"></span>
                    <span class="navbar-toggler-line"></span>
                    <span class="navbar-toggler-line"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav"> 
                    <ul class="navbar-nav fw-600">
                        <li class="nav-item"><a href="{{ route('index') }}" class="nav-link">Home</a></li> 
                        <li class="nav-item"><a href="{{ route('about') }}" class="nav-link">About us</a></li>

                        <li class="nav-item"><a href="{{route('services-category')}}" class="nav-link">Services</a></li> <!-- You can define route if needed -->
                        <li class="nav-item dropdown dropdown-with-icon-style02">
                            {{-- <a href="{{ route('services') }}" class="nav-link">Services</a> --}}
                            <i class="fa-solid fa-angle-down dropdown-toggle" data-bs-toggle="dropdown"></i>
                            {{-- <ul class="dropdown-menu">
                                <li><a href="#"><img src="{{ asset('assets/images/icon.svg') }}" alt="">Example</a></li>
                            </ul> --}}
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('process') }}" class="nav-link">Foreign Employment Process</a>
                        </li>
                        
                        
                        <li class="nav-item">
                            <a href="{{ route('permit') }}" class="nav-link">Work Permit Application</a>
                        </li>


                        <li class="nav-item">
                            <a href="{{ route('blog') }}" class="nav-link">Blog</a>
                        </li>

                        

                         <li class="nav-item"><a href="{{ route('contact') }}" class="nav-link">Contact</a></li>
                        {{-- <li class="nav-item"><a href="{{ route('contact') }}" class="nav-link">Contact</a></li> --}}
                    </ul>
                </div>
            </div>
            <div class="col-auto col-lg-2 d-none d-sm-flex">
                <div class="header-icon"> 
                    <div class="header-button">
                        <a href="{{ route('contact') }}" class="btn btn-small btn-rounded btn-black btn-box-shadow">Let's discuss</a>
                    </div>
                </div>  
            </div>
        </div>
    </nav>
    <!-- end navigation -->
</header>
