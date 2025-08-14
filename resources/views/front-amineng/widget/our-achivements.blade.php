
<section class="we-do-section grey-bg">
    <div class="auto-container">
        <!--Sec Title-->
        <div class="sec-title">
            <h2>Our Achivements</h2>
            <div class="text">We're committed to providing you with a seamless engineering and construction experience.
                Trust us to keep your belongings safe, secure, and easily accessible whenever you need them.</div>
        </div>
        
        <section class="clients-section" style="background: inherit;padding-top: 0px;">
            <div class="auto-container">

                <div class="sponsors-outer">
                    <div class="row" style="display: flex;">
                        @foreach($certificates as $certificate)
                            <a class="" style="width:50%;margin: 13px;" data-fancybox="gallery" data-src="{{asset('web')}}/media/md/{{$certificate->image}}">
                                <img src="{{asset('web')}}/media/md/{{$certificate->image}}" style=""/>
                            </a>
                        @endforeach
                    </div>
                </div>

            </div>
        </section>


    </div>
</section>