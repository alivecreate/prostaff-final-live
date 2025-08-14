 <!-- it-team-2 start  -->
 <div class="it-team-2-area fix  p-relative" data-background="{{asset('frontend/img')}}/team/team-3-bg.jpg">
         <div class="container-fluid p-0">
            <div class="row">
               <div class="col-xl-4">
                  <div class="it-team-2-content theme-bg z-index-5 p-relative d-flex align-items-center">
                     <div class="it-team-2-text">
                        <h3 class="it-team-2-title">construction Expertise! You Can Trust.</h3>
                        <p>Sagittis purus sit amet volutpat consequat mauris nunc congue nisi and tortor dignissim.</p>
                     </div>
                     <div class="it-team-2-thumb">
                        <img src="frontend/img/team/thumb-2-1.png" alt="">
                     </div>
                  </div>
               </div>
               <div class="col-xl-8">
                  <div class="it-team-2-item-box p-relative z-index-5">
                     <div class="it-team-2-shape">
                        <img src="frontend/img/team/testi-3-shape.png" alt="">
                     </div>
                     <div class="swiper-container it-team-2-active">
                        <div class="swiper-wrapper">
                           @foreach(getTeams() as $team)
                           <div class="swiper-slide">
                              <div class="it-team-2-item">
                                 <div class="it-team-2-item-thumb mb-25">
                                    <img src="{{asset('web/media/sm')}}/{{$team->image}}" alt="">
                                 </div>
                                 <h3 class="it-team-2-item-title"><a href="{{route('team-details')}}">{{$team['name']}}</a></h3>
                                 <span>{{$team['designation']}}</span>
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
      <!-- it-team-2 end  -->