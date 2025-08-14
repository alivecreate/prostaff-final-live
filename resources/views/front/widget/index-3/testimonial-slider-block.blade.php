  <!-- it-testimonial-4 start  -->
  <div class="it-testimonial-3-area pt-120 pb-120">
         <div class="container">
            <div class="it-testimonial-3-wrapper p-relative">
               <div class="row">
                  <div class="col-xl-4 col-lg-4">
                     <div class="it-testimonial-3-thumb-box text-center p-relative">
                        <div class="it-testimonial-3-shape d-none d-lg-block">
                           <img src="frontend/img/testimonial/shape-3.png" alt="">
                        </div>
                        <div class="it-testimonial-3-thumb">
                           <img src="frontend/img/testimonial/test-thum3-1.png" alt="">
                        </div>
                     </div>
                  </div>

                  <div class="col-xl-7 col-lg-7">
                     <div class="it-testimonial-3-content grey-bg">
                        <div class="swiper-container it-testimonial-3-active">
                           <!-- <div class="swiper-wrapper">
                              <div class="swiper-slide">
                                 <div class="it-testimonial-3-item">
                                    <div class="it-testimonial-3-dsc mb-15">
                                       <i>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                          consequat. Duis aute irure dolor in reprehenderit in voluptate velit
                                          esse.”</i>
                                    </div>
                                    <div
                                       class="it-testimonial-3-avater-content d-flex align-items-center justify-content-between">
                                       <div class="it-testimonial-3-avater-info">
                                          <h3 class="it-testimonial-3-avater-title mb-10">Mattie Warner</h3>
                                          <span>Founder & CEO</span>
                                       </div>
                                       <div class="it-testimonial-3-avater-quote">
                                          <i class="fa-solid fa-quote-right"></i>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="swiper-slide">
                                 <div class="it-testimonial-3-item">
                                    <div class="it-testimonial-3-dsc mb-15">
                                       <i>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                          consequat. Duis aute irure dolor in reprehenderit in voluptate velit
                                          esse.”</i>
                                    </div>
                                    <div
                                       class="it-testimonial-3-avater-content d-flex align-items-center justify-content-between">
                                       <div class="it-testimonial-3-avater-info">
                                          <h3 class="it-testimonial-3-avater-title mb-10">Mattie Warner</h3>
                                          <span>Founder & CEO</span>
                                       </div>
                                       <div class="it-testimonial-3-avater-quote">
                                          <i class="fa-solid fa-quote-right"></i>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="swiper-slide">
                                 <div class="it-testimonial-3-item">
                                    <div class="it-testimonial-3-dsc mb-15">
                                       <i>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                          consequat. Duis aute irure dolor in reprehenderit in voluptate velit
                                          esse.”</i>
                                    </div>
                                    <div
                                       class="it-testimonial-3-avater-content d-flex align-items-center justify-content-between">
                                       <div class="it-testimonial-3-avater-info">
                                          <h3 class="it-testimonial-3-avater-title mb-10">Mattie Warner</h3>
                                          <span>Founder & CEO</span>
                                       </div>
                                       <div class="it-testimonial-3-avater-quote">
                                          <i class="fa-solid fa-quote-right"></i>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div> -->
                           <div class="swiper-wrapper">
                              @foreach(getTestimonials() as $testimonial)
                              <div class="swiper-slide">
                                 <div class="it-testimonial-3-item">
                                       <div class="it-testimonial-3-dsc mb-15">
                                          <i>{{$testimonial['description']}}</i>
                                       </div>
                                       <div class="it-testimonial-3-avater-content d-flex align-items-center justify-content-between">
                                          <div class="it-testimonial-3-avater-info">
                                             <h3 class="it-testimonial-3-avater-title mb-10">{{$testimonial['name']}}</h3>
                                             <span>{{$testimonial['title']}}</span>
                                          </div>
                                          <div class="it-testimonial-3-avater-quote">
                                             <i class="fa-solid fa-quote-right"></i>
                                          </div>
                                       </div>
                                 </div>
                              </div>
                              @endforeach
                           </div>
                        </div>
                     </div>
                  </div>

                  <div class="col-xl-1 col-lg-1 d-none d-lg-block">
                     <div class="it-project-arrow-box it-testi-3-arrow">
                        <button class="testi-prev">
                           <i class="fa-solid fa-arrow-left"></i>
                        </button>
                        <button class="testi-next">
                           <i class="fa-solid fa-arrow-right"></i>
                        </button>
                     </div>
                  </div>
               </div>
            </div>

         </div>
  </div>
  