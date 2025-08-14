<!-- about area start  -->
         <div class="container pb-4">
<div class="it-about-area it-about-style-3 it-about-style-4 p-relative pt-130 grey-bg" style="background:url({{asset('frontend')}}/images/dotted-background.png)">
        
         <div class="sec-title mb-4">
            <h2>Industries We Serve</h2>
            <div class="text">Amin Engineering Works, We are supported by a large and modern infrastructure unit that helps us in attaining maximum clients’ satisfaction. This unit is outfitted with the contemporary tools and machinery that enables designing and manufacturing flawless quality products. </div>
        </div>
            
            <div class="row clearfix">
               @foreach(getIndustries() as $industry)
                   <div class="services-block thumb-block col-md-3 col-md-4 col-sm-6 col-xs-12 mb-4">
                       <div class="inner-box">
                           <div class="image">
                         
   
                               <a href="#"><img
                                       src="{{asset('web')}}/media/sm/{{$industry->image}}" alt="" /></a>
                           </div>
                           <div class="lower-content">
                               <h3><a href="#">{{$industry->name}}</a></h3>
                           </div>
                       </div>
                   </div>
               @endforeach
   
            
</div>

   </div>
      