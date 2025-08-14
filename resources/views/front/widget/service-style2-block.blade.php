<!-- service area start  -->
<div class="it-service-area p-relative pt-120 pb-50">
         <div class="container">
            <div class="row">

            @foreach($services as $service)

               <div class="col-xl-4 col-lg-6 col-md-6">
                  <div class="it-service-item">
                     
                     <h3 class="it-section-title-sm">{{$service->name}}</h3>
                    
                     
                           @if($service->image)
                              <div class="it-service-item-thumb mt-25">
                                 <img src="{{asset('web/media/sm')}}/{{$service->image}}" alt="image error">

                              </div>
                              @endif
                              <p>{!! html_entity_decode($service->description) !!}</p>

                  </div>
               </div>
               @endforeach

        
            </div>
         </div>
</div><!-- service area end  -->