

<!--Clients Section-->
<section class="clients-section">
    <div class="auto-container">

    <div class="sec-title">
            <h2>Our Clients</h2>
            <div class="text">We're proud to deliver innovative engineering and construction solutions tailored to your needs with DEC Engineering.</div>
        </div>
        <div class="sponsors-outer">
            <!--Sponsors Carousel-->
            <ul class="sponsors-carousel owl-carousel owl-theme">
                @foreach($clients as $client)
                    <li class="slide-item">
                        <figure class="image-box"><a href="#"><img src="{{asset('web/media/md')}}/{{$client->image}}"
                                    alt=""></a></figure>
                    </li>
                @endforeach
            </ul>
        </div>

    </div>
</section>