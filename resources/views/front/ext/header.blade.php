<header class="header-with-topbar">

    <nav class="navbar navbar-expand-lg header-light bg-white responsive-sticky">
        <div class="container-fluid">
            <div class="col-auto col-lg-2 me-lg-0 me-auto">
                <a class="navbar-brand" href="{{ route('index') }}" 
                    style="display: flex; align-items: center; height: 80px; padding: 0; margin: 0;">
                        @if(isset(getWebsiteData()['light_logo']))
                           

                            <img src="{{ asset('web/media/sm/' . getWebsiteData()['light_logo']) }}" 
                                alt="{{ getWebsiteData()['name'] }}" 
                                style="height: 100%; width: auto; object-fit: contain; display: block;  border-radius: 10px;">

                        @endif

                        <!-- Prostaff Name closer to logo -->
                        <span style="color: navy; font-weight: bold; font-size: 1.5rem; margin-left: 10px ">
                            PROSTAFF
                        </span>
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

                        <li class="nav-item dropdown dropdown-with-icon-style02">
                            {{-- <a href="{{ route('services') }}" class="nav-link">Services</a> --}}
                            <i class="fa-solid fa-angle-down dropdown-toggle" data-bs-toggle="dropdown"></i>
                            {{-- <ul class="dropdown-menu">
                                <li><a href="#"><img src="{{ asset('assets/images/icon.svg') }}" alt="">Example</a></li>
                            </ul> --}}
                        </li>

                        {{-- <li class="nav-item">
                            <a href="{{ route('process') }}" class="nav-link">Foreign Employment Process</a>
                        </li> --}}
                        
                        
                        <li class="nav-item">
                            <a href="{{ route('permit') }}" class="nav-link">Job Seeker and Employer</a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('services-category')}}" class="nav-link">Our Service Sectors</a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('blog') }}" class="nav-link">Blog</a>
                        </li>

                        

                         <li class="nav-item"><a href="{{ route('contact') }}" class="nav-link">Contact</a></li>
                        {{-- <li class="nav-item"><a href="{{ route('contact') }}" class="nav-link">Contact</a></li> --}}
                    </ul>
                </div>
            </div>
            
        </div>
    </nav>
    <!-- end navigation -->
</header>
