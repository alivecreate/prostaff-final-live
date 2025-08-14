@extends('front.layout.main-layout')
@section('page-title')
@endsection

@section('custom-js')
<script>
    $(document).ready(function(){
      $(".service").addClass( "current");
    });
</script>
@endsection


@section('content')

<section class="page-title" style="background-image:url('{{ env('TMP_URL') }}/web/media/md/1734779785_832.webp');">
    <div class="auto-container">
        <h1>Product</h1>
    </div>

</section>

<div class="page-info">
    <div class="auto-container">
        <div class="inner-container clearfix">
            <ul class="bread-crumb pull-left">
                <li><a href="{{route('index')}}">Home</a></li>
                <li>Product</li>
            </ul>
            <div class="text pull-right">Certified Company ISO 9001-2015</div>
        </div>
    </div>
</div>

<section class="services-page-section">
    <div class="auto-container">
        <h2>Our Product</h2>
        <div class="text">DEC Engineering Pvt. Ltd., we are driven by a commitment to quality, innovation, and customer satisfaction. Whether you’re planning a new project, upgrading existing systems, or optimizing plant operations, our team of seasoned professionals is here to support you at every step. Your vision, our expertise – together, we engineer excellence.</div>
        <div class="row clearfix">


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
                            
            @foreach(getServices() as $service)
            <div class="services-block col-md-4 col-sm-6 col-xs-12">
                <div class="inner-box">
                    <div class="image">
                        <a href="{{route('serviceDetail', $service->slug)}}"><img src="{{asset('web')}}/media/md/{{$service->image}}"
                                alt="" /></a>
                    </div>
                    <div class="lower-content">
                        <h3><a href="{{route('serviceDetail', $service->slug)}}">{{$service->name}}</a></h3>
                    </div>
                </div>
            </div>
            @endforeach

        </div>

    </div>
</section>


@endsection