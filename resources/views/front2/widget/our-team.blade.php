
        <section id="team" class="team section-b-space slick-default-margin ratio_asos">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <h2>Our Team</h2>
                        <div class="team-4">
                            @foreach(getTeams() as $team)
                                <div>
                                    <div>
                                        <img src="{{asset('web/media/sm')}}/{{$team->image}}" class="img-fluid blur-up lazyload bg-img" alt="">
                                    </div>
                                    <h4>{{$team->name}}</h4>
                                    <h6>{{$team->designation}}</h6>
                                </div>    
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
