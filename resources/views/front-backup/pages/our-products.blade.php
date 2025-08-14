@extends('front.layout.main-layout')

@section('additional-js')
    <script>
            $(".products a").addClass( "active");
    </script>
@endsection

@section('content')



<section class="p-0">
    <div class="full-banner banner-layout-3 parallax text-center text-capitalize p-center p-0"
        style="background-image: url({{asset('frontend/images/banner')}}/our-products.jpg); background-size: cover; background-position: bottom center; display: block;"
    >
        <div class="container custom-breadcrumb m-0" style="
            background: #064f4078; width: 100%; margin: 0px; padding: 0px; width: 100%; max-width: 100%; overflow: hidden; padding: 6rem 5rem">
            <div class="container">
                <div class="col pl-0">
                    <div class="banner-contain">
                        
                        <h3 class="text-left"><a href="{{route('services')}}">Our Product</a><br>
                            <span class="text-white">Order Now</span></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <section class="cart-section section-b-space">
    
        <div class="container">   
            <form class="needs-validation data-form" action="{{ route('storeCartData') }}" method="POST">
                @csrf
        
            <div class="row justify-content-center">
                    <div class="col-sm-12 col-md-12 col-lg-10 px-4 table-responsive-xs custom-cart">
                        
                    @include('front.widget.validation-error')
                            @foreach($categories as $category)
                                
                                @if(isExistProduct($category->id))
                                    <div class="collection-collapse-block open">
                                        <h2 class="collapse-block-title">{{ $category->name }}</h2>
                                        <div class="collection-collapse-block-content our-product">
                                        @foreach($category->products as $product)
                                                <div class="mobile-cart-content row my-2 align-items-center">
                                                    @if(isset($product->images[0]))
                                                        <div class="col pl-0">
                                                            <img width="100" src="{{asset('web/media/md')}}/{{$product->images[0]['image']}}" alt="">
                                                        </div>
                                                    @endif
                                                    <div class="col pl-0">                                                
                                                        <h3>{{$product->name}}</h3>
                                                    </div>
                                                    
                                                    <div class="qty-box col">
                                                        <div class="input-group d-flex align-items-center align-content-center">
                                                            <input type="number" name="quantity[{{$product->id}}]" class="form-control input-number quantity-box"
                                                                value="0" min="0"  step="0.01">
                                                            <span class="text-strong ml-3">&nbsp;&nbsp;KG</span>
                                                        </div>
                                                    </div>

                                                </div>
                                        @endforeach
                                    </div>  
                                @endif
                            @endforeach

                            <div class="btn-cart-next mobile-cart-content row my-2 align-items-center">
                                <div class="col pl-0">
                                    <button type="submit" class="btn btn-solid pull-right">Next <i class="fa fa-regular fa-chevron-right"></i></button>
                                </div>
                            </div>
                            
                        </div>

                    </div>
            </div>
        </form>
        </div>
    </section>

@endsection