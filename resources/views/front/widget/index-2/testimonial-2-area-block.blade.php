 <!-- testimonial-2 area start  -->
 <div class="it-testimonial-2-area theme-bg pt-115 pb-120"
         data-background="{{asset('frontend/img')}}/testimonial/testimonial-2-bg.png">
         <div class="container">
            <div class="row align-items-end">
               <div class="col-xl-6 col-lg-6">
                  <div class="it-testimonial-2-content">
                     <div class="it-testimonial-2-title-box">
                        <span class="it-subtitle subtitle-yellow">client review </span>
                        <h3 class="it-section-title text-white mb-20">
                           Read our success story to find the <span>happiness</span>
                        </h3>
                        <p>Discover our journey through the eyes of satisfied clients, where success meets happiness.</p>
                     </div>
                     <div class="row">
                        <div class="col-xl-6 col-md-6 mb-20">
                           <div class="it-testimonial-2-review-box d-flex align-items-center">
                              <div class="it-testimonial-2-review-icon">
                                 <span>
                                    <i class="flaticon-like"></i>
                                 </span>
                              </div>
                              <div class="it-testimonial-2-review-content">
                                 <span>Avg rating 4.9k</span>
                                 <div class="it-testimonial-2-ratting">
                                    <span><i class="fa-sharp fa-solid fa-star"></i></span>
                                    <span><i class="fa-sharp fa-solid fa-star"></i></span>
                                    <span><i class="fa-sharp fa-solid fa-star"></i></span>
                                    <span><i class="fa-sharp fa-solid fa-star"></i></span>
                                    <span><i class="fa-sharp fa-solid fa-star"></i></span>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-xl-6 col-md-6 mb-20">
                           <div class="it-testimonial-2-review-box d-flex align-items-center">
                              <div class="it-testimonial-2-review-icon">
                                 <span>
                                    <img src="frontend/img/testimonial/google-icon.png" alt="">
                                 </span>
                              </div>
                              <div class="it-testimonial-2-review-content">
                                 <span>Google Review</span>
                                 <div class="it-testimonial-2-ratting">
                                    <span><i class="fa-sharp fa-solid fa-star"></i></span>
                                    <span><i class="fa-sharp fa-solid fa-star"></i></span>
                                    <span><i class="fa-sharp fa-solid fa-star"></i></span>
                                    <span><i class="fa-sharp fa-solid fa-star"></i></span>
                                    <span><i class="fa-sharp fa-solid fa-star"></i></span>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-6 col-lg-6">
                  <div class="it-testimonial-2-wrapper">
                     <div class="swiper-container it-testimonial-2-active  p-relative">
                        <div class="swiper-wrapper">
                           @foreach(getTestimonials() as $testimonial)
                           <div class="swiper-slide">
                              <div class="it-testimonial-2-item p-relative">
                                 <div class="it-testimonial-2-item-shape">
                                    <span><i class="fa-solid fa-quote-right"></i></span>
                                 </div>
                                 <p>{{$testimonial['description']}}</p>

                                 <div class="it-testimonial-2-author d-flex align-items-center justify-content-between">
                                    <div class="it-testimonial-2-avater-box d-flex align-items-center">
                                       <div class="it-testimonial-2-avater">
                                          <img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcR5x5A3it2t2NMe2yzEGH_f3ridLEqY8odn_7WAWkKdcLVOXcd5" alt="">
                                       </div>
                                       <div class="it-testimonial-2-avater-info">
                                          <h3 class="it-testimonial-2-avater-title">{{$testimonial['name']}}</h3>
                                          <span>{{$testimonial['title']}}</span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           @endforeach
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
 </div>
      <!-- testimonial-2 area end  -->