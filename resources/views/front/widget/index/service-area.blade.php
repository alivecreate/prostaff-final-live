 <!-- service area start  -->
 <div class="it-service-area black-bg p-relative pt-120 pb-60">
         <div class="it-service-shape-1">
            <img src="frontend/img/service/sun-shape-big.png" alt="">
         </div>
         <div class="container">
            <div class="row">
               

               @foreach(getServices() as $service1)
                  <div class="col-xl-4 col-lg-6 col-md-6">
                     <div class="it-service-item wow itfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">
                        <div class="it-service-icon-box mb-20 d-flex align-items-center justify-content-between">
                           <div class="it-service-icon">
                              <i class="flaticon-technical-support"></i>
                           </div>
                           <div class="it-service-action">
                              <a href="{{route('services')}}/{{$service1->slug}}"><i class="flaticon-right-arrow"></i></a>
                           </div>
                        </div>
                        <h3 class="it-section-title-sm"><a href="{{route('services')}}/{{$service1->slug}}">{{$service1->title}}</a></h3>
                        <div class="it-service-item-thumb mt-25">
                           <img src="{{asset('web/media/lg')}}/{{$service1->image}}" alt="">
                        </div>
                     </div>
                  </div>
               @endforeach               
            </div>
         </div>
 </div>
    <!-- service area end  -->

<!-- funfact area start  -->
 <div class="it-funfact-area pt-110 pb-85 theme-bg" data-background="{{asset('frontend/img')}}/funfact/funfact-bg.png">
         <div class="container">
            <div class="it-funfact-wrapp">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-4 mb-30">
                     <div class="it-funfact-content text-center wow itfadeUp" data-wow-duration=".9s" data-wow-delay=".2s">
                        <h3 class="it-funfact-number">
                           <b class="purecounter" data-purecounter-duration="1" data-purecounter-end="3000"></b>+
                        </h3>
                        <span class="it-funfact-title">Total Projects</span>
                     </div>
                  </div>
                  <div class="col-xl-3 col-lg-3 col-md-4 mb-30">
                     <div class="it-funfact-content text-center wow itfadeUp" data-wow-duration=".9s" data-wow-delay=".5s">
                        <h3 class="it-funfact-number">
                           <b class="purecounter" data-purecounter-duration="3" data-purecounter-end="1700"></b>+
                        </h3>
                        <span class="it-funfact-title">Happy Customers</span>
                     </div>
                  </div>

                  <div class="col-xl-3 col-lg-3 col-md-4 mb-30">
                     <div class="it-funfact-content text-center wow itfadeUp" data-wow-duration=".9s" data-wow-delay=".9s">
                        <h3 class="it-funfact-number">
                           <b class="purecounter" data-purecounter-duration="2" data-purecounter-end="18"></b>+
                        </h3>
                        <span class="it-funfact-title">Years Experience</span>
                     </div>
                  </div>

                  
                  <div class="col-xl-3 col-lg-3 col-md-4 mb-30">
                     <div class="it-funfact-content text-center wow itfadeUp" data-wow-duration=".9s" data-wow-delay=".9s">
                        <h3 class="it-funfact-number">
                           <b class="purecounter" data-purecounter-duration="2" data-purecounter-end="5"></b>+
                        </h3>
                        <span class="it-funfact-title">Total MV Installed</span>
                     </div>
                  </div>

               </div>
            </div>
         </div>
 </div>
<!-- funfact area end  -->