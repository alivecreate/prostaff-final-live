<header class="main-header">
    
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
                
                <div class="top-right clearfix">
                    <!--social-icon-->
                    <div class="social-icon">
                        <ul class="clearfix">
                            @if(getSocialMedia()['facebook'])<li><a  target="_blank" href="{{getSocialMedia()['facebook']}}"><i class="fa fa-facebook-f"></i></a></li>@endif
                            @if(getSocialMedia()['instagram'])<li><a  target="_blank" href="{{getSocialMedia()['instagram']}}"><i class="fa fa-instagram"></i></a></li>@endif
                            @if(getSocialMedia()['twitter'])<li><a  target="_blank" href="{{getSocialMedia()['twitter']}}"><i class="fa fa-twitter"></i></a></li>@endif
                            @if(getSocialMedia()['youtube'])<li><a  target="_blank" href="{{getSocialMedia()['youtube']}}"><i class="fa fa-youtube"></i></a></li>@endif
                            @if(getSocialMedia()['vimeo'])<li><a  target="_blank" href="{{getSocialMedia()['vimeo']}}"><i class="fa fa-vimeo"></i></a></li>@endif
                            @if(getSocialMedia()['linkedin'])<li><a  target="_blank" href="{{getSocialMedia()['linkedin']}}"><i class="fa fa-linkedin"></i></a></li>@endif
                            @if(getSocialMedia()['pinterest'])<li><a  target="_blank" href="{{getSocialMedia()['pinterest']}}"><i class="fa fa-pinterest"></i></a></li>@endif
                            @if(getSocialMedia()['skype'])<li><a  target="_blank" href="{{getSocialMedia()['skype']}}"><i class="fa fa-skype"></i></a></li>@endif
                                        
                        </ul>
                    </div>
                </div>
                
            </div>
            
        </div>
    </div>
    
    <div class="main-box">
        <div class="auto-container">
            <div class="outer-container clearfix">
                <!--Logo Box-->
                <div class="logo-box">
                    
                    <div class="logo"><a href="{{route('index')}}">
                        <img src="{{asset('web/media/xs')}}/{{ isset(getWebsiteData()['main_logo']) ? getWebsiteData()['main_logo'] : null}}" width="300" alt=""></a></div>
                </div>
                
                <!--Nav Outer-->
                <div class="nav-outer clearfix">
                
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
                                <li class="current dropdown"><a href="#">Home</a>
                                    <ul>
                                        <li><a href="index.html">Home 01</a></li>
                                        <li><a href="index-2.html">Home 02</a></li>
                                        <li><a href="index-3.html">Home 03</a></li>
                                        <li><a href="index-4.html">Home 04</a></li>
                                        <li class="dropdown"><a href="#">Header Styles</a>
                                            <ul>
                                                <li><a href="index.html">Header Style One</a></li>
                                                <li><a href="index-2.html">Header Style Two</a></li>
                                                <li><a href="index-3.html">Header Style Three</a></li>
                                                <li><a href="index-4.html">Header Style Four</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">About Us</a>
                                    <ul>
                                        <li><a href="about.html">About Us</a></li>
                                        <li><a href="company-history.html">Company History</a></li>
                                        <li><a href="team.html">Team</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Services</a>
                                    <ul>
                                        <li><a href="services.html">All Services</a></li>
                                        <li><a href="mechanical-engineering.html">Mechanical Engineering</a></li>
                                        <li><a href="agricultural-processing.html">Agricultural Processing</a></li>
                                        <li><a href="petrolium.html">Petrolium & Gas</a></li>
                                        <li><a href="material-engineering.html">Material Engineering</a></li>
                                        <li><a href="chemical-engineering.html">Chemical Engineering</a></li>
                                        <li><a href="power-energy.html">Power & Energy</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Projects</a>
                                    <ul>
                                        <li><a href="project-classic.html">Project Classic</a></li>
                                        <li><a href="project-fullscreen.html">Project Full Width</a></li>
                                        <li><a href="project-detail.html">Project Details Page</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Pages</a>
                                    <ul>
                                        <li><a href="error-page.html">404 page</a></li>
                                        <li><a href="comming-soon.html">Comming Soon page</a></li>
                                        <li><a href="testimonial.html">Testimonial</a></li>
                                        <li><a href="faq.html">Faq</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Blog</a>
                                    <ul>
                                        <li><a href="blog.html">Blog 2 Column</a></li>
                                        <li><a href="blog-sidebar.html">Blog With Sidebar</a></li>
                                        <li><a href="blog-detail.html">Blog Details</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Shop</a>
                                    <ul>
                                        <li><a href="shop.html">Shop</a></li>
                                        <li><a href="shop-detail.html">Product Details</a></li>
                                        <li><a href="shoping-cart.html">Cart Page</a></li>
                                        <li><a href="checkout.html">Checkout Page</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html">Contact us</a></li>
                             </ul>
                        </div>
                    </nav>
                    <!-- Main Menu End-->
                    <div class="outer-box">
                        <!--Search Box-->
                        <div class="search-box-outer">
                            <div class="dropdown">
                                <button class="search-box-btn dropdown-toggle" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fa fa-search"></span></button>
                                <ul class="dropdown-menu pull-right search-panel" aria-labelledby="dropdownMenu3">
                                    <li class="panel-outer">
                                        <div class="form-container">
                                            <form method="post" action="blog.html">
                                                <div class="form-group">
                                                    <input type="search" name="field-name" value="" placeholder="Search Here" required>
                                                    <button type="submit" class="search-btn"><span class="fa fa-search"></span></button>
                                                </div>
                                            </form>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
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
                    <a href="index.html" class="img-responsive"><img src="{{asset('frontend')}}/images/logo-small.png" alt="" title=""></a>
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
                                <li class="current dropdown"><a href="#">Home</a>
                                    <ul>
                                        <li><a href="index.html">Home 01</a></li>
                                        <li><a href="index-2.html">Home 02</a></li>
                                        <li><a href="index-3.html">Home 03</a></li>
                                        <li><a href="index-4.html">Home 04</a></li>
                                        <li class="dropdown"><a href="#">Header Styles</a>
                                            <ul>
                                                <li><a href="index.html">Header Style One</a></li>
                                                <li><a href="index-2.html">Header Style Two</a></li>
                                                <li><a href="index-3.html">Header Style Three</a></li>
                                                <li><a href="index-4.html">Header Style Four</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">About Us</a>
                                    <ul>
                                        <li><a href="about.html">About Us</a></li>
                                        <li><a href="company-history.html">Company History</a></li>
                                        <li><a href="team.html">Team</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Services</a>
                                    <ul>
                                        <li><a href="services.html">All Services</a></li>
                                        <li><a href="mechanical-engineering.html">Mechanical Engineering</a></li>
                                        <li><a href="agricultural-processing.html">Agricultural Processing</a></li>
                                        <li><a href="petrolium.html">Petrolium & Gas</a></li>
                                        <li><a href="material-engineering.html">Material Engineering</a></li>
                                        <li><a href="chemical-engineering.html">Chemical Engineering</a></li>
                                        <li><a href="power-energy.html">Power & Energy</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Projects</a>
                                    <ul>
                                        <li><a href="project-classic.html">Project Classic</a></li>
                                        <li><a href="project-fullscreen.html">Project Full Width</a></li>
                                        <li><a href="project-detail.html">Project Details Page</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Pages</a>
                                    <ul>
                                        <li><a href="error-page.html">404 page</a></li>
                                        <li><a href="comming-soon.html">Comming Soon page</a></li>
                                        <li><a href="testimonial.html">Testimonial</a></li>
                                        <li><a href="faq.html">Faq</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Blog</a>
                                    <ul>
                                        <li><a href="blog.html">Blog 2 Column</a></li>
                                        <li><a href="blog-sidebar.html">Blog With Sidebar</a></li>
                                        <li><a href="blog-detail.html">Blog Details</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Shop</a>
                                    <ul>
                                        <li><a href="shop.html">Shop</a></li>
                                        <li><a href="shop-detail.html">Product Details</a></li>
                                        <li><a href="shoping-cart.html">Cart Page</a></li>
                                        <li><a href="checkout.html">Checkout Page</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html">Contact us</a></li>
                            </ul>
                        </div>
                    </nav>
                    <!-- Main Menu End-->
                    
                    <!--Outer Box-->
                    <div class="outer-box">
                        <!--Search Box-->
                        <div class="search-box-outer">
                            <div class="dropdown">
                                <button class="search-box-btn dropdown-toggle" type="button" id="dropdownMenu4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fa fa-search"></span></button>
                                <ul class="dropdown-menu pull-right search-panel" aria-labelledby="dropdownMenu4">
                                    <li class="panel-outer">
                                        <div class="form-container">
                                            <form method="post" action="blog.html">
                                                <div class="form-group">
                                                    <input type="search" name="field-name" value="" placeholder="Search Here" required>
                                                    <button type="submit" class="search-btn"><span class="fa fa-search"></span></button>
                                                </div>
                                            </form>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

</header>