<footer>

<!-- footer-area-start -->
<div class="it-footer-2-area p-relative" data-background="{{asset('frontend/img')}}/website/pump/pump5.jpg"
   style="background-image: url(&quot;{{asset('frontend/img')}}/website/header-banner.webp&quot;);background-size: 100% 100%;background-repeat: no-repeat;"
   >

   <div class="it-footer-2-bottom pt-110 pb-60">
      <div class="container">
         <div class="row">
            <div class="col-xl-3 col-lg-4 col-md-6 mb-50">
               <div class="it-footer-widget footer-2-col-1 wow itfadeUp" data-wow-duration=".9s" data-wow-delay=".5s">
                  <div class="it-footer-logo mb-30">
                        @if(isset(getWebsiteData()['light_logo']))
                           <a href="{{route('index')}}">
                              <img src="{{asset('web/media/sm')}}/{{getWebsiteData()['light_logo']}}" alt="{{getWebsiteData()['name']}}">
                           </a>
                        @endif
                  </div>
                  <div class="it-footer-content">
                     
                     @if(isset(getWebsiteData()['description']))
                        <p>{{getWebsiteData()['description']}}</p>
                     @endif

                     <div class="it-footer-social footer-social-2">
                        
                     @if(isset(getSocialMedia()['facebook']))
                        <a href="{{getSocialMedia()['facebook']}}"><i class="fa-brands fa-facebook"></i></a>
                     @endif
                     
                     
                     @if(isset(getSocialMedia()['twitter']))   
                     <a href="{{getSocialMedia()['twitter']}}"><i class="fa-brands flaticon-twitter-1"></i></a>
                     @endif

                     
                     @if(isset(getSocialMedia()['instagram']))   
                        <a href="{{getSocialMedia()['instagram']}}"><i class="fa-brands fa-instagram"></i></a>
                     @endif
   

                     @if(isset(getSocialMedia()['linkedin']))   
                     <a href="{{getSocialMedia()['linkedin']}}"><i class="fa-brands fa-linkedin"></i></a>
                     @endif

                     
                     @if(isset(getSocialMedia()['youtube']))   
                     <a href="{{getSocialMedia()['youtube']}}"><i class="fa-brands fa-youtube"></i></a>
                     @endif

                     </div>
                  </div>
               </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 mb-50">
               <div class="it-footer-widget footer-2-col-2 wow itfadeUp" data-wow-duration=".9s" data-wow-delay=".7s">
                  <h3 class="it-footer-widget-title mb-35">Useful Links</h3>
                  <div class="it-footer-list">
                     <ul>
                        <li><a href="{{route('about')}}">About Us</a></li>
                        <li><a href="{{route('products')}}">Products</a></li>
                        <!-- <li><a href="{{route('gallery')}}">Gallery</a></li> -->
                        <li><a href="{{route('blog')}}">Blog</a></li>
                        <li><a href="{{route('contact')}}">Contact</a></li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 mb-50">
               <div class="it-footer-widget footer-2-col-3 wow itfadeUp" data-wow-duration=".9s" data-wow-delay=".8s">
                  <h3 class="it-footer-widget-title mb-35">What We Do</h3>
                  <div class="it-footer-list">
                     <ul>
                        
                     <ul class="it-submenu submenu">
                        @foreach(getCategories() as $categoryArr)
                           <li>
                              <a class="{{ $categoryArr->slug }}{{ isset($category) && $categoryArr->slug == $category->slug ? ' active' : '' }}" 
                                 href="{{ route('category', $categoryArr->slug) }}">
                                 {{ $categoryArr->name }}
                                 <i class="fa-regular fa-angle-right"></i>
                              </a>
                           </li>
                        @endforeach
                     </ul> 



                     </ul>
                  </div>
               </div>
            </div> 
            <div class="col-xl-3 col-lg-4 col-md-6 mb-50">
               <div class="it-footer-widget footer-2-col-3 wow itfadeUp" data-wow-duration=".9s" data-wow-delay=".8s">
                  <h3 class="it-footer-widget-title mb-35">Contact Detail</h3>
                  <div class="it-copyright-content text-center text-lg-start wow itfadeUp" data-wow-duration=".9s" data-wow-delay=".5s">

                  
                  <p>Call Us on:</p>
                  <p><a href="tel:{{getWebsiteData()['primary_phone']}}">{{getWebsiteData()['primary_phone']}}</a></p>
                  <p><a href="tel:{{getWebsiteData()['secondary_phone']}}">{{getWebsiteData()['secondary_phone']}}</a></p>
                  <br>
                  
                  <p>Email:</p>
                  <p>{{getWebsiteData()['primary_mail']}}</p>
                  <p>{{getWebsiteData()['secondary_mail']}}</p>

                  <br>
                  
                  <p> <i class="flaticon-location"></i> <strong>Office:</strong></p>
                           <p>
                              {{getWebsiteData()['address']}}
                           </p>
                           <br>


               
               </div>
               </div>
            </div>
            
         </div>
      </div>
   </div>
   <!-- copyright area start -->
   <div class="it-copyright-2-area pt-20 pb-20">
      <div class="container">
         <div class="row align-items-center">
            <div class="col-xl-6 col-lg-7">
               <div class="it-copyright-content text-center text-lg-start wow itfadeUp" data-wow-duration=".9s" data-wow-delay=".5s">
                  <p>Copyright © 2024 <span>Design & Developed by </span> <a target="_blank" href="https://www.alivecreate.com">Alivecreate Web Solutions</a></span>
                  </p>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- copyright area end -->
</div>
<!-- footer-area-end -->


</footer>