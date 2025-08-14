<!-- about area start  -->
<div class="it-about-area it-about-style-3 it-about-style-4 p-relative pt-130">
         
         <div class="container pb-4">
            <div class="row">
               <div class="col-xl-6 col-lg-6">
                  <div class="it-about-2-thumb-box pr-20 p-relative wow itfadeLeft" data-wow-duration=".9s"
                     data-wow-delay=".5s">
                     <div class="row">
                        <div class="col-xl-8 col-lg-8 col-md-8">
                           <div class="it-about-2-thumb-box-left p-relative">
                              <div class="it-about-2-thumb-shape">
                                 <img src="{{asset('frontend/img')}}/pump/Fully Automatic.png" alt="">
                              </div>
                              <div class="it-about-2-thumb-item text-end mb-20">
                                 <img src="{{asset('frontend/img')}}/website/pump/pump4.png" alt="Fully automatic">
                              </div>
                              <div class="it-about-2-thumb-item">
                                 <img class="w-100" src="{{asset('frontend/img')}}/website/pump/pump2.jpg" alt="semi automatic">
                              </div>
                           </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4">
                           <div class="it-about-2-thumb-box-right mt-95">
                              <div class="it-about-2-thumb-item mb-30">
                                 <img src="{{asset('frontend/img')}}/website/pump/pump1.jpg" alt="">
                              </div>
                              <div class="it-about-2-exp theme-bg p-relative">
                                 <span class="it-about-2-exp-number">20 +</span>
                                 <div class="it-about-2-exp-icon">
                                    <a href="{{route('about')}}"><i class="flaticon-up-right-arrow"></i></a>
                                 </div>
                                 <div class="it-about-2-exp-title">
                                    <i>years of experience.</i>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-6 col-lg-6">
                  <div class="it-about-content-wrapp wow itfadeRight" data-wow-duration=".9s" data-wow-delay=".9s">
                     <div class="it-about-title-box mb-20">
                        <span class="it-subtitle">about us</span>
                        <h3 class="it-section-title">TransPumpServ Global: Driving Excellence in Pump & Valve Solutions</h3>
                     </div>
                     <div class="it-about-dsc mb-30">
                        <p>At TransPumpServ Global, we pride ourselves on delivering innovative, high-quality, and customer-focused solutions tailored to the evolving needs of critical industries. As a trusted provider of metallic valves and comprehensive pump services, we serve key sectors including:</p>
                     </div>
                     <div class="it-about-2-item mb-15">
                        <div class="row">
                           <div class="col-xl-6">
                              <div class="it-about-item-text">
                                 <h3 class="it-section-title-sm mb-5">OUR MISSION:</h3>
                                 <div class="it-about-2-dsc">
                                    <p>To deliver reliable, innovative, and cost-effective pump and valve solutions that maximize operational efficiency and client satisfaction across industries.</p>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-6">
                              <div class="it-about-item-text">
                                 <h3 class="it-section-title-sm mb-5">OUR VISSION:</h3>
                                 <div class="it-about-item-2-dsc">
                                    <p>To be a global leader in fluid management services, recognized for engineering excellence, sustainability, and customer-centric solutions.</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="it-about-info d-flex align-items-center">
                        <!-- <div class="it-about-btn mr-25">
                           <a href="{{route('about')}}" class="it-btn-green yellow-bg text-white text-light">Read More</a>
                        </div> -->
                        <div class="it-about-info-content d-flex align-items-center">
                           <div class="it-about-info__icon mr-10">
                              <i class="flaticon-message"></i>
                           </div>
                           <div class="it-about-info__text">
                              <span class="it-about-info__title">Call Us Now</span>
                              @if(getWebsiteData()['primary_phone'])
                                 <a href="tel:{{getWebsiteData()['primary_phone']}}">{{getWebsiteData()['primary_phone']}}</a>
                              @endif
                              </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            
</div>

      <!-- about area end  -->

