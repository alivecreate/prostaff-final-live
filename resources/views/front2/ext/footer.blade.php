
    <footer class="footer-light footer-expand pb-0">
        <div class="section-t-space section-b-space light-layout">
            <div class="container">
                <div class="row footer-theme partition-f">
                    <div class="col-lg-4 col-md-6">
                        <div class="footer-title footer-mobile-title">
                            <h4>about</h4>
                        </div>
                        <div class="footer-contant">
                            <div class="footer-logo">
                                <img src="{{asset('frontend')}}/images/icon/logo/agriness-logo-name2.png" style="width: 250px;" alt="Agriness Logo"></div>
                                <p>We started our company in 2022 as a fruit and vegetable supply chain, Angriness Trading Pvt. Ltd. The app is going to be one platform that aims to bridge the gap between farmers and B2B consumers. </p>
                                
                        </div>
                    </div>
                    <div class="col pl-0">
                        <div class="sub-title">
                            <div class="footer-title">
                                <h4>Our Services</h4>
                            </div>
                            <div class="footer-contant">
                                <ul>
                                    <li><a href="{{route('services')}}/#farmingService">Farming Services</a></li>
                                    <li><a href="{{route('services')}}/#wasteManagement">Waste Management</a></li>
                                    <li><a href="{{route('services')}}/#dripIrrigation">Drip Irrigation</a></li>
                                    <li><a href="{{route('services')}}/#solarSystem">Solar System</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col pl-0">
                        <div class="sub-title">
                            <div class="footer-title">
                                <h4>Quick Links</h4>
                            </div>
                            <div class="footer-contant">
                                <ul>
                                    <li><a href="{{route('index')}}">Home</a></li>
                                    <li><a href="{{route('products')}}">Products</a></li>
                                    <li><a href="{{route('services')}}">Services</a></li>
                                    <li><a href="{{route('about')}}">About Us</a></li>
                                    <li><a href="{{route('blog')}}">Blog</a></li>
                                    <li><a href="{{route('contact')}}">contact Us</a></li>
                                    <li><a href="{{route('privacyPolicy')}}">Privacy Policies</a></li>
                                    <li><a href="{{route('termAndCondition')}}">Term & Conditions</a></li>
                                    <li><a href="{{route('qrCode')}}">OR Code</a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col pl-0">
                        <div class="sub-title">
                            <div class="footer-title">
                                <h4>Contact information</h4>
                            </div>
                            <div class="footer-contant">
                                <ul class="contact-list">

                                    @if(getWebsiteData()['address'])<li><i class="fa fa-map-marker"></i>{{getWebsiteData()['address']}}</li>@endif
                                    @if(getWebsiteData()['primary_phone'])<li><i class="fa fa-phone"></i>Call Us: <a href="tel:+91{{getWebsiteData()['primary_phone']}}">+91 {{getWebsiteData()['primary_phone']}}</a></li>@endif
                                    @if(getWebsiteData()['primary_mail'])<li><i class="fa fa-envelope"></i><a href="mailto:{{getWebsiteData()['primary_mail']}}">{{getWebsiteData()['primary_mail']}}</a></li>@endif
                                </ul>
                            </div>
                            
							@if(getSocialMedia())
                                <div class="footer-social">
                                    <ul>
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
                            @endif
                        </div>
                    </div>
                </div>
                
                </div>
            </div>
        </div>
        <div class="sub-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 footer-copyright text-start">
                        <p class="mb-0">Copyright 2024 © Agriness Trading All rights reserved.</p>
                    </div>
                    <div class="col-md-6 pull-right text-end">
                        <p class=" mb-0">Design & Developed by <a target="_blank" href="https://www.alivecreate.com">Alivecreate Web Solutions</a><i class="fa fa-heart"></i></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    