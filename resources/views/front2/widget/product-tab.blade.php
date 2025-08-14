<section class="addtocart_count ratio_square bg-title wo-bg">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="title1">
                    <h4>Exclusive products</h4>
                    <h2 class="title-inner1">Organic products</h2>
                </div>
            </div>
            <div class="col pl-0">
                <div class="theme-tab">
                    <ul class="tabs tab-title">
                        @foreach(getCategories() as $key => $category)
                            
                            <li @if($key += 1) class="{{'current'}}" @endif><a href="tab-{{$key}}">{{$category->name}}</a></li>
                        @endforeach
                    </ul>

                    <div class="tab-content-cls mb-5">

                        @foreach(getCategories() as $key2 => $category)
                                <div id="tab-{{++$key2}}" class="tab-content @if($key2 === 1){{'active default'}} @else null @endif"
                                >
                                    <div class="five-product no-slider row">
                                        
                                        @foreach($category->products(10) as $product)
                                           
                                            <div class="product-box product-wrap product-style-1">
                                                <div class="img-wrapper">
                                                    
                                                    @if($product->discounted_price)
                                                        <div class="lable-block"><span class="lable3">new</span> <span
                                                                class="lable4">on
                                                                sale</span></div>
                                                    @endif
                                                    
                                                    @if(@$product->images[0])
                                                        <div class="front">
                                                            <a href="{{route('products')}}">
                                                            <img class="col-12"
                                                                    src="{{asset('web/media/sm')}}/{{@$product->images[0]['image']}}" alt=""></a>
                                                        </div>
                                                    @endif
                                                    
                                                </div>

                                                <div class="product-detail text-center">
                                                    <a href="{{route('products')}}">
                                                        <h6>{{$product->name}}</h6>
                                                    </a>
                                                    @if($product->discounted_price)
                                                        <h4>₹{{$product->discounted_price}} <del>₹{{$product->price}}</del></h4>
                                                    @elseif($product->price)
                                                        <h4>₹{{$product->price}}</h4>
                                                    @endif
                                                </div>
                                            </div>

                                        @endforeach
                                    </div>
                                </div>
                        @endforeach

                    </div>
                    <div class="text-center">
                        <a href="{{route('products')}}" class="btn btn-sm btn-rounded btn-solid" tabindex="0">View All Products</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>