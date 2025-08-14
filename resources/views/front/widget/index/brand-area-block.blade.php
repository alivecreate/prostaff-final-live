   <!-- start Brand area  -->
   <div class="it-brand-area pt-85 pb-85 p-relative">
         <div class="container">
            <div class="row">
               <div class="col-xl-12">
                  
               <div class="it-work-title-box text-center mb-70">
                     <span class="it-subtitle mb-30">Our Clients</span>
                     <h3 class="it-section-title">Our Valuable Clients</h3>
                  </div>

                  <div class="swiper-container it-brand-active">
                     <div class="swiper-wrapper">
                        
                        @foreach(getClients() as $client1)
                           <div class="swiper-slide">
                              <div class="it-brand-item text-center client-logo">
                                 <img height="120" src="{{asset('web/media/md')}}/{{$client1->image}}">
                              </div>
                           </div>
                        @endforeach
                        
                     </div>
                  </div>
               </div>
            </div>
         </div>
   </div>
      <!-- end Brand area  -->