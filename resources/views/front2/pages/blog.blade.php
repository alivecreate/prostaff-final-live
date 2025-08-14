@extends('front.layout.main-layout')

@section('additional-js')
    <script>
            $(".blog a").addClass( "active");
    </script>
@endsection

@section('content')


    <section class="p-0">
        <div class="full-banner banner-layout-3 parallax text-center text-capitalize p-center p-0">
            
        <div class="full-banner banner-layout-3 parallax text-center text-capitalize p-center p-0"
            style="background-image: url({{asset('frontend/images/banner')}}/farming-service2.jpg); background-size: cover; background-position: center center; display: block;">
                  
            <div class="container custom-breadcrumb m-0" style="
                background: #064f4078; width: 100%; margin: 0px; padding: 0px; width: 100%; max-width: 100%; overflow: hidden; padding: 6rem 5rem">
                <div class="container">
                    <div class="col pl-0">
                        <div class="banner-contain">
                            
                            <h3 class="text-left">
                                <span class="text-white">Latest Blog</span></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    
    <section class="blog gym-blog ratio3_2 slick-default-margin section-b-space">
        <div class="container">
            <div class="row">
                @foreach($blogs as $blog)
                    <div class="col-sm-12 col-md-6 col-lg-3">
                                <div>
                                    <a href="{{route('blog')}}/{{$blog->slug}}">
                                        <div class="">
                                                <img src="{{asset('web/media/lg')}}/{{$blog->image}}"
                                                    class="img-fluid bg-img" alt="">
                                        </div>
                                    </a>
                                    <div class="blog-details">
                                        <h4>{{dateFormat($blog->created_at, 'd M Y')}}</h4>
                                            <a href="{{route('blog')}}/{{$blog->slug}}">
                                            <p>{{$blog->title}}</p>
                                        </a>
                                        <h6>by: Admin</h6>
                                    </div>
                                </div>
                        </div>
                @endforeach
            </div>
        </div>
        
				<div class="text-center mt-2 pagination2 w-100">
					{{ $blogs->links('admin.widget.custom-pagination') }}
				</div>

                
    </section>
@endsection