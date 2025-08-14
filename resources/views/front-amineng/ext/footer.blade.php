    <!--Main Footer-->
    <footer class="main-footer">
		<div class="auto-container">
        	<!--Widgets Section-->
            <div class="widgets-section">
            	<div class="row clearfix">
                	
                    <!--big column-->
                    <div class="big-column col-md-6 col-sm-12 col-xs-12">
                        <div class="row clearfix">
                        
                            <!--Footer Column-->
                            <div class="footer-column col-md-7 col-sm-6 col-xs-12">
                                <div class="footer-widget logo-widget">
									<div class="logo">
                                    	<a href="{{route('index')}}"><img src="{{asset('web/media/xs')}}/{{ isset(getWebsiteData()['light_logo']) ? getWebsiteData()['light_logo'] : null}}" alt="" /></a>
                                    </div>
                                    <div class="text">DEC Engineering Pvt. Ltd. specializes in delivering comprehensive solutions for Design & Engineering, Procurement, Project Management, Construction, and Plant Retrofitting.</div>
                                </div>
                            </div>
                            
                            <!--Footer Column-->
                            <div class="footer-column col-md-5 col-sm-6 col-xs-12">
                                <div class="footer-widget links-widget">
                                	<h2>Quick Links</h2>
                                    <div class="widget-content">
										<ul class="list">
                                            
                                    <li><a href="{{route('index')}}">Home</a></li>
                                    <li><a href="{{route('about')}}">About Us</a></li>
                                    <li><a href="{{route('services')}}">Services</a></li>
                                    <li><a href="{{route('services')}}">Gallery</a></li>
                                    <li><a href="{{route('blog')}}">Blog</a></li>
                                    <li><a href="{{route('contact')}}">contact Us</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    
                    <!--big column-->
                    <div class="big-column col-md-6 col-sm-12 col-xs-12">
                        <div class="row clearfix">
                        
                            <!--Footer Column-->
                            <div class="footer-column col-md-6 col-sm-6 col-xs-12">
                                <div class="footer-widget links-widget">
                                	<h2>Services</h2>
                                    <div class="widget-content">
										<ul class="list">
                                            
                                        @foreach(getServices() as $service)
                                            <li><a href="{{route('services')}}/{{$service->slug}}">{{$service->name}}</a></li>
                                        @endforeach
                                        
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="footer-column col-md-6 col-sm-6 col-xs-12">
                                <div class="footer-widget info-widget">
                                	<h2>Get In Touch</h2>
                                    <div class="widget-content">
                                        
                                        @if(getWebsiteData()['primary_phone'])<div class="number"><a href="tel:+91{{getWebsiteData()['primary_phone']}}">+91 {{getWebsiteData()['primary_phone']}}</a></div>@endif
                                        @if(getWebsiteData()['address'])<div class="text">{{getWebsiteData()['address']}}</div>@endif
                                        @if(getWebsiteData()['primary_mail'])<div class="text">{{getWebsiteData()['primary_mail']}}</div>@endif

                                        
                                        @if(getSocialMedia())
                                        <ul class="social-icon-one">
                                       
                                        @if(getSocialMedia()['facebook'])<li><a  target="_blank" href="{{getSocialMedia()['facebook']}}"><i class="fa fa-facebook-f"></i></a></li>@endif
                                        @if(getSocialMedia()['instagram'])<li><a  target="_blank" href="{{getSocialMedia()['instagram']}}"><i class="fa fa-instagram"></i></a></li>@endif
                                        @if(getSocialMedia()['twitter'])<li><a  target="_blank" href="{{getSocialMedia()['twitter']}}"><i class="fa fa-twitter"></i></a></li>@endif
                                        @if(getSocialMedia()['youtube'])<li><a  target="_blank" href="{{getSocialMedia()['youtube']}}"><i class="fa fa-youtube"></i></a></li>@endif
                                        @if(getSocialMedia()['vimeo'])<li><a  target="_blank" href="{{getSocialMedia()['vimeo']}}"><i class="fa fa-vimeo"></i></a></li>@endif
                                        @if(getSocialMedia()['linkedin'])<li><a  target="_blank" href="{{getSocialMedia()['linkedin']}}"><i class="fa fa-linkedin"></i></a></li>@endif
                                        @if(getSocialMedia()['pinterest'])<li><a  target="_blank" href="{{getSocialMedia()['pinterest']}}"><i class="fa fa-pinterest"></i></a></li>@endif
                                        @if(getSocialMedia()['skype'])<li><a  target="_blank" href="{{getSocialMedia()['skype']}}"><i class="fa fa-skype"></i></a></li>@endif
                                        </ul>

                                    @endif
                            
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    
                </div>
            </div>
            
            <div class="footer-bottom">
                <div class="clearfix">
                    <div class="pull-left">

                        <div class="copyright">&copy; Copyright 2024 © DEC Engineering pvt.ltd, All rights reserved.</div>
                    </div>
                    <div class="pull-right">
                        <div class="created"><p class=" mb-0">Design & Developed by <a target="_blank" href="https://www.alivecreate.com">Alivecreate Web Solutions</a><i class="fa fa-heart"></i></p></div>
                    </div>
                </div>
            </div>
            
        </div>
        
    </footer>