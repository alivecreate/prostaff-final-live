    <!-- about-breadcrumb area-start -->
    <div class="it-breadcrumb-area fix p-relative" 
      
      @if(!isset($image))
         data-background="{{asset('frontend/img/website')}}/bg2.jpg"
      @else
         data-background="{{asset('web/media/lg')}}/{{$image}}"
      @endif      

      >
      
      <div class="it-breadcrumb-shape-1">
         </div>
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="it-breadcrumb-content">
                     <div class="it-breadcrumb-title-box mb-25 z-index-3">

                        <h3 class="it-breadcrumb-title text-white">{{ $pagetitle }}</h3>
                     </div>
                     <div class="it-breadcrumb-list-wrap">
                        <div class="it-breadcrumb-list z-index-3">
                           <span><a href="{{route('index')}}">Home</a></span>
                           <span class="dvdr">//</span>
                           <span><b>{{ $name }}</b></span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- about-breadcrumb area-end -->