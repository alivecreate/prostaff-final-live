<section class="we-do-section grey-bg" style="background:url({{asset('frontend')}}/images/dotted-background.png)">
    <div class="auto-container">
        <!--Sec Title-->
        <div class="sec-title">
            <h2>Industries We Serve</h2>
            <div class="text">DEC Engineering Pvt. Ltd., we are driven by a commitment to quality, innovation, and customer satisfaction. Whether you’re planning a new project, upgrading existing systems, or optimizing plant operations, our team of seasoned professionals is here to support you at every step. Your vision, our expertise – together, we engineer excellence.</div>
        </div>

        
        <div class="row clearfix">
            @foreach(getIndustries() as $industry)
                <div class="services-block thumb-block col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="image">
                      

                            <a href="#"><img
                                    src="{{asset('web')}}/media/md/{{$industry->image}}" alt="" /></a>
                        </div>
                        <div class="lower-content">
                            <h3><a href="#">{{$industry->name}}</a></h3>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        
    </div>
</section>

