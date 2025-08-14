
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
                    <ul class="sponsors-carousel owl-carousel owl-theme">
                        @foreach($certificates as $client)
                        <li class="slide-item">
                            <figure class="image-box">
                                <a data-fancybox="gallery" data-src="{{asset('web')}}/media/md/{{$client->image}}">
                                    <img src="{{asset('web')}}/media/md/{{$client->image}}" />
                                </a>
                            </figure>
                        </li>
                        @endforeach
                    </ul>
                </div>

            </div>
        </section>


    </div>
</section>