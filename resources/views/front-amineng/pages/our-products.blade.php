@extends('front.layout.main-layout')
@section('page-title')
@endsection

@section('custom-js')
<script>
    $(document).ready(function(){
      $(".products").addClass( "current");
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
                               
                <div class="services-block thumb-block col-md-3 col-sm-6 col-xs-12">
                    <div class="inner-box" style="background: #1E5D6D;">
                    <div class="image">
                        <a href="{{route('productDetail', $category->slug)}}"><img src="{{asset('web')}}/media/md/{{$category->image}}"
                                alt="" /></a>
                    </div>
                    <div class="lower-content">
                        <h3><a class="text-white" href="{{route('productDetail', $category->slug)}}">{{$category->name}}</a></h3>
                    </div>
                </div>
            </div>
                               
                            @endforeach
                            
       

        </div>

    </div>
</section>


@endsection