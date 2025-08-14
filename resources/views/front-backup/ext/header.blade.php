<header class="main-header header-style-two">
    
    <!-- Header Top -->
    <div class="header-top">
        <div class="auto-container">
            <div class="inner-container clearfix">
                
                <!--Top Left-->
                <div class="top-left">
                    <ul class="links clearfix">
                        @if(getWebsiteData()['primary_phone'])<li><a href="tel:+91{{getWebsiteData()['primary_phone']}}">+91 {{getWebsiteData()['primary_phone']}}</a></li>@endif
                        @if(getWebsiteData()['primary_mail']) <li><a href="#"><span class="icon flaticon-note-1"></span>{{getWebsiteData()['primary_mail']}}</a></li>@endif
                    
                    </ul>
                </div>
                
                <!--Top Right-->
                <div class="top-right clearfix">
                    <!--social-icon-->
                    <div class="social-icon">
                        <ul class="clearfix">

                            @if(getSocialMedia()['facebook'])<li><a target="_blank"
                                    href="{{getSocialMedia()['facebook']}}"><i class="fa fa-facebook-f"></i></a></li>
                            @endif
                            @if(getSocialMedia()['instagram'])<li><a target="_blank"
                                    href="{{getSocialMedia()['instagram']}}"><i class="fa fa-instagram"></i></a></li>
                            @endif
                            @if(getSocialMedia()['twitter'])<li><a target="_blank"
                                    href="{{getSocialMedia()['twitter']}}"><i class="fa fa-twitter"></i></a></li>@endif
                            @if(getSocialMedia()['youtube'])<li><a target="_blank"
                                    href="{{getSocialMedia()['youtube']}}"><i class="fa fa-youtube"></i></a></li>@endif
                            @if(getSocialMedia()['vimeo'])<li><a target="_blank" href="{{getSocialMedia()['vimeo']}}"><i
                                        class="fa fa-vimeo"></i></a></li>@endif
                            @if(getSocialMedia()['linkedin'])<li><a target="_blank"
                                    href="{{getSocialMedia()['linkedin']}}"><i class="fa fa-linkedin"></i></a></li>
                            @endif
                            @if(getSocialMedia()['pinterest'])<li><a target="_blank"
                                    href="{{getSocialMedia()['pinterest']}}"><i class="fa fa-pinterest"></i></a></li>
                            @endif
                            @if(getSocialMedia()['skype'])<li><a target="_blank" href="{{getSocialMedia()['skype']}}"><i
                                        class="fa fa-skype"></i></a></li>@endif

                        </ul>
                    </div>
                </div>
                
            </div>
            
        </div>
    </div>
    <!-- Header Top End -->
    
    <!-- Main Box -->
    <div class="main-box">
        <div class="auto-container">
            <div class="outer-container clearfix">
                <!--Logo Box-->
                <div class="logo-box"><div class="logo"><a href="{{route('index')}}">
                        <img src="{{asset('web/media/xs')}}/{{ isset(getWebsiteData()['main_logo']) ? getWebsiteData()['main_logo'] : null}}" width="260" alt=""></a></div>
                </div>
                
                <!--Nav Outer-->
                <div class="nav-outer clearfix">
                
                    <nav class="main-menu">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse"
                                data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">
                                <li class="home"><a href="{{route('index')}}">Home</a></li>
                                <li class="about"><a href="{{route('about')}}">About Us</a></li>

                                <li class="dropdown service"><a href="{{route('services')}}">Services</a>
                                    <ul>
                                        <li class="service"><a href="{{route('services')}}">All Services</a></li>

                                        @foreach(getServices() as $service)
                                        <li><a href="{{route('services')}}/{{$service->slug}}">{{$service->name}}</a>
                                        </li>
                                        @endforeach

                                    </ul>
                                </li>


                                <li class="project"><a href="{{route('projects')}}">Project Executed</a></li>

                                <li class="blog"><a href="{{route('blog')}}">Blog</a></li>
                                <li class="contact"><a href="{{route('contact')}}">Contact us</a></li>
                                <li><button class="theme-btn btn-style3"  data-toggle="modal" data-target="#inquiryModal">inquiry now</button></li>

                            </ul>
                        </div>
                    </nav>


                </div>
                <!--Nav Outer End-->
                
            </div>    
        </div>
    </div>

    <!--Sticky Header-->
    <div class="sticky-header">
        <div class="auto-container">
            <div class="sticky-inner-container clearfix">
                <!--Logo-->
                <div class="logo pull-left">
                    <a href="{{route('index')}}" class="img-responsive"><img
                            src="{{asset('web/media/xs')}}/{{ isset(getWebsiteData()['light_logo']) ? getWebsiteData()['light_logo'] : null}}"
                            width="160" title=""></a>
                </div>
                
                <!--Right Col-->
                <div class="right-col pull-right">
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <div class="navbar-header">
                            <!-- Toggle Button -->    	
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        
                        <div class="navbar-collapse collapse clearfix">
                            
                        <ul class="navigation clearfix">
                                <li class="home" class="dropdown"><a href="{{route('index')}}">Home</a></li>

                                <li class="about"><a href="{{route('about')}}">About Us</a></li>
                                <li class="dropdown service"><a href="{{route('services')}}">Services</a>
                                    <ul>
                                        <li class="service"><a href="{{route('services')}}">All Services</a></li>

                                        @foreach(getServices() as $service)
                                        <li class="service"><a
                                                href="{{route('services')}}/{{$service->slug}}">{{$service->name}}</a>
                                        </li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li class="project"><a href="{{route('projects')}}">Project Executed</a></li>
                                <li class="blog"><a href="{{route('blog')}}">Blog</a></li>
                                <li class="contact"><a href="{{route('contact')}}">Contact us</a></li>
                                <li><button class="theme-btn btn-style3"  data-toggle="modal" data-target="#inquiryModal">inquiry now</button></li>
                            </ul>
                            
                        </div>
                    </nav>
                    <!-- Main Menu End-->
                    
                    <!--Outer Box-->
                    <div class="outer-box">
                        <!--Search Box-->
                        <div class="search-box-outer">
                            <div class="dropdown">
                                 <ul class="dropdown-menu pull-right search-panel" aria-labelledby="dropdownMenu4">
                                    <li class="panel-outer">
                                    <button class="theme-btn btn-style3"  data-toggle="modal" data-target="#inquiryModal">inquiry now</button>
                                       
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!--End Sticky Header-->

</header>