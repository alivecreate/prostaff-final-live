<!-- slider-3-area-start -->
<div class="it-slider-3-area p-relative fix">
         <div class="it-slider-3-wrapp p-relative">
            
            <div class="swiper-container it-slider-3-active">
               <div class="swiper-wrapper">
                  
                  @foreach(getSliders() as $slider)
                  <div class="swiper-slide">
                     <div class="it-slider-3-wrapper it-slider-3-overlay it-slider-3-height p-relative z-index">
                        <div class="it-slider-3-shape-1 d-none d-xl-block">
                           <img src="" alt="">
                        </div>
                        <div class="it-slider-3-shape-2 d-none d-xl-block">
                           <img src="" alt="">
                        </div>
                        <div class="it-slider-3-bg" data-background="{{asset('web/media/lg')}}/{{$slider->image}}"></div>
                        <div class="container">
                           <div class="row">
                              <div class="col-xl-8 col-lg-9">
                                 <div class="it-slider-3-content-wrap z-index-5">
                                    <div class="it-slider-3-content-box ">
                                       <span class="it-hero-subtitle subtitle-yellow">{{$slider['title']}}
                                          </span>
                                       <h3 class="it-hero-title text-white">{{$slider['description']}}</h3>
                                       <div class="it-slider-3-dsc">
                                          <!-- <p>Our services cover the entire lifecycle of Solar systems. Chose wisely. Go Solar. Save Nature</p> -->
                                       </div>
                                    </div>
                                    <div class="it-slider-3 d-flex align-items-center">
                                       <a href="{{route('about')}}" class="it-btn-green white-bg mr-30">Discover More</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  @endforeach
               </div>
            </div>
            <div class="it-slider-3-arrow-box d-none d-md-block">
               <button class="slider-3-prev">
                  <i class="fa-solid fa-arrow-left"></i>
               </button>
               <button class="slider-3-next">
                  <i class="fa-solid fa-arrow-right"></i>
               </button>
            </div>
         </div>
      </div>

      <!-- slider-3-area-end -->