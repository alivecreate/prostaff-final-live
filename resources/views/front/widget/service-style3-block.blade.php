  <!-- services area start  -->
  <div class="it-service-4-area it-inner-service-3 p-relative pt-120">
         <div class="container">
            <div class="row">
            @foreach(getServices() as $service)
               <div class="col-xl-3 col-lg-6 col-md-6">
                  <div class="it-service-2-item fix">
                     <div class="it-service-2-content z-index-5 p-relative text-center">
                        <div class="it-service-4-thumb-box p-relative mb-40">
                           <div class="it-service-4-thumb-shape"></div>
                           <div class="it-service-4-thumb">

                              @if($service->slug)
                                   <a href="{{route('service-details', $service->slug)}}">
                                   <img src="{{asset('web/media/sm')}}/{{$service->image}}" alt="">
                                   </a>
                              @else
                              <img src="{{asset('web/media/sm')}}/{{$service->image}}" alt="">
                              @endif

                           </div>
                        </div>
                        <h3 class="it-section-title-sm">
                           <a href="{{route('service-details', $service->slug)}}">{{$service['title']}}</a>
                        </h3>
                        <p>{{$service['short_description']}}</p>
                        <div class="it-service-2-icon mt-25">
                           <a href="{{route('service-details', $service->slug)}}"><i class="flaticon-right-up"></i></a>
                        </div>
                     </div>
                  </div>
               </div>
            @endforeach
               
            </div>
         </div>
  </div>
      <!-- services area end  -->