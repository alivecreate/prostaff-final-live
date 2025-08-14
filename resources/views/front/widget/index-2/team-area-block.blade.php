   <!-- team-2 area start  -->
   <div class="it-team-2-area p-relative pt-115 pb-120">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-xl-6">
                  <div class="it-team-2-title-box text-center mb-70">
                     <h3 class="it-section-title-big">our team member</h3>
                     <span class="it-subtitle">our team member</span>
                     <h3 class="it-section-title">meet our team member company <span>metting</span></h3>
                  </div>
               </div>
            </div>
            <div class="row">
               @foreach(getTeams() as $team)
                  <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
                     <div class="it-team-item fix p-relative wow itfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">
                        <div class="it-team-thumb">
                           <img src="{{asset('web/media/sm')}}/{{$team->image}}" alt="">
                        </div>
                        <div class="it-team-content text-center">
                           <div class="it-team-shape"></div>
                           <div class="it-team-social mb-5">
                              <a href="#"><i class="fa-brands fa-instagram"></i></a>
                              <a href="#"><i class="fa-brands fa-pinterest-p"></i></a>
                              <a href="#"><i class="fa-brands fa-facebook"></i></a>
                              <a href="#"><i class="fa-brands fa-instagram"></i></a>
                           </div>
                           <div class="it-team-text">
                              <h3 class="it-secttion-title-sm"><a href="{{route('team-details')}}">{{$team['name']}}</a></h3>
                              <span>{{$team['designation']}}</span>
                           </div>
                        </div>
                     </div>
                  </div>
                  
               @endforeach
            </div>
            <div class="row text-center">
               <div class="col-xl-12">
                  <div class="it-team-button mt-30">
                     <a href="{{route('team')}}" class="it-btn-green">All Team Member</a>
                  </div>
               </div>
            </div>
         </div>
   </div>
    <!-- team-2 area end  -->