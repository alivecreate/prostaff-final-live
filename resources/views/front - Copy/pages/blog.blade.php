@extends('front.layout.main-layout')
@section('page-title')
@endsection


@section('custom-js')
<script>
    $(document).ready(function(){
      $(".blog").addClass( "current");
    });
</script>
@endsection


@section('content')

    <section class="page-title" style="background-image:url(frontend/images/blog-header.jpg);">
        <div class="auto-container">
            <h1>Blog</h1>
        </div>
    </section>
    <!--End Page Title-->
    
    <!--Page Info-->
    <div class="page-info">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <ul class="bread-crumb pull-left">
                    <li><a href="{{route('blog')}}">Home</a></li>
                    <li>Blog</li>
                </ul>
                <div class="text pull-right">Certified Company ISO 9001-2008</div>
            </div>
        </div>
    </div>
    <!--End Page Info-->
    
    
    <!--Blog Page Section-->
    <div class="blog-page-section">
    	<div class="auto-container">
        	<div class="row clearfix">
            	
                
            @foreach($blogs as $blog)
                <!--News Block Three-->
                <div class="news-block-three col-md-4 col-sm-12 col-xs-12">
                    <div class="inner-box">
                        <div class="image">
                            <a href="{{route('blog')}}/{{$blog->slug}}"><img src="{{asset('web/media/lg')}}/{{$blog->image}}" alt="" /></a>
                        </div>
                        <div class="lower-content">
                            <div class="lower-box">
                                <h3><a href="{{route('blog')}}/{{$blog->slug}}">{{$blog->title}}</a></h3>
                                <a href="{{route('blog')}}/{{$blog->slug}}" class="theme-btn btn-style-four">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                @endforeach

            
                
             
           </div>
           
           
            <ul class="text-center">
					{{ $blogs->links('admin.widget.custom-pagination') }}
            </ul>                

       </div>
    </div>
    

    @endsection