<header id="sticky-header" class="style-light header-compact">
    <div class="top-header top-header-theme">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    
                <div class="header-contact">
                    <ul>
                        <li>Welcome to Agriness Trading</li>
                        <li><i class="fa fa-phone" aria-hidden="true"></i>Call Us: <a class="text-light" href="tel:+918585964069">+91 85859 64069</a></li>
                    </ul>
                </div>

                </div>
                <div class="col-lg-6 text-end">
                    <ul class="header-dropdown">
                        @if(getSocialMedia()['facebook'])<li class="px-2"><a target="_blank" href="{{getSocialMedia()['facebook']}}"><i class="fa fa-facebook-f"></i></a></li>@endif
                        @if(getSocialMedia()['instagram'])<li class="px-2"><a target="_blank" href="{{getSocialMedia()['instagram']}}"><i class="fa fa-instagram"></i></a></li>@endif
                        @if(getSocialMedia()['twitter'])<li class="px-2"><a target="_blank" href="{{getSocialMedia()['twitter']}}"><i class="fa fa-twitter"></i></a></li>@endif
                        @if(getSocialMedia()['youtube'])<li class="px-2"><a target="_blank" href="{{getSocialMedia()['youtube']}}"><i class="fa fa-youtube"></i></a></li>@endif
                        @if(getSocialMedia()['vimeo'])<li class="px-2"><a target="_blank" href="{{getSocialMedia()['vimeo']}}"><i class="fa fa-vimeo"></i></a></li>@endif
                        @if(getSocialMedia()['linkedin'])<li class="px-2"><a target="_blank" href="{{getSocialMedia()['linkedin']}}"><i class="fa fa-linkedin"></i></a></li>@endif
                        @if(getSocialMedia()['pinterest'])<li class="px-2"><a target="_blank" href="{{getSocialMedia()['pinterest']}}"><i class="fa fa-pinterest"></i></a></li>@endif
                        @if(getSocialMedia()['skype'])<li class="px-2"><a target="_blank" href="{{getSocialMedia()['skype']}}"><i class="fa fa-skype"></i></a></li>@endif
                    
                        
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
    
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="main-menu">
                    <div class="menu-left">
                        <div class="brand-logo"><a href="{{route('index')}}">
                            <img src="{{asset('web/media/sm')}}/{{ isset(getWebsiteData()['main_logo']) ? getWebsiteData()['main_logo'] : null}}"
                                class="img-fluid blur-up lazyload" alt=""></a></div>
                    </div>
                    <div class="menu-right pull-right">
                        <div>
                            <nav id="main-nav">
                                <div class="toggle-nav"><i class="fa fa-bars sidebar-bar"></i></div>
                                <ul id="main-menu" class="sm pixelstrap sm-horizontal">
                                    <li>
                                        <div class="mobile-back text-end">Back<i class="fa fa-angle-right ps-2"
                                                aria-hidden="true"></i></div>
                                    </li>
                                    <li class="index"><a href="{{route('index')}}">Home</a></li>
                                    <li class="about"><a href="{{route('about')}}">About Us</a></li>
                                    <li class="services"><a href="{{route('services')}}">Our Services</a></li>
                                    <li class="products"><a href="{{route('products')}}">Our Products</a></li>
                                    <li class="blog"><a href="{{route('blog')}}">Blog</a></li>
                                    <li class="contact"><a href="{{route('contact')}}">Contact Us</a></li>
                                
                                    
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>