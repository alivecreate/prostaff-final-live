@extends('front.layout.main-layout')


@section('content')

    <body data-mobile-nav-style="classic">
        <!-- start page title -->
        <section class="page-title-big-typography cover-background" style="background-image: url(picture/bg4.jpg)">
            <div class="container">
                <div class="row align-items-center small-screen">
                    <div class="col-10 col-sm-12 position-relative page-title-extra-large">
                        {{-- <h1 class="alt-font text-dark-gray mb-10px ls-minus-1px" data-fancy-text='{ "opacity": [0, 1], "translateY": [50, 0], "filter": ["blur(20px)", "blur(0px)"], "string": ["Blog"], "duration": 500, "delay": 0, "speed": 50, "easing": "easeOutQuad" }'></h1> --}}
                        {{-- <h2 class="mb-0 xs-w-85 text-dark-gray"  data-anime='{ "translateY": [15, 0], "opacity": [0,1], "duration": 600, "delay": 300, "staggervalue": 200, "easing": "easeOutQuad" }'> Discover expert tips, training insights, and inspiring dog stories on our blog.</h2> --}}
                    </div>
                </div>
            </div>
        </section>
        <!-- end page title -->
        <!-- start section --> 
        <section class="background-position-left-top background-no-repeat-y background-size-auto-100 pt-50px lg-pt-30px md-pt-0" style="background-image: url('')">
            <div class="container">   
                <div class="row mb-5 md-mb-50px sm-mb-30px">
                    <div class="col-12 p-0 sm-ps-15px sm-pe-15px">
                        <ul class="blog-side-image blog-wrapper grid-loading grid grid-2col xxl-grid-2col xl-grid-2col lg-grid-2col md-grid-1col sm-grid-1col xs-grid-1col gutter-extra-large" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 200, "easing": "easeOutQuad" }'>
                            <li class="grid-sizer"></li>
                            <!-- start blog item -->
                            @foreach($blogs as $blog)
                                <li class="grid-item">
                                    <div class="blog-box d-md-flex d-block flex-row h-100 border-radius-4px overflow-hidden box-shadow-extra-large">
                                        
                                        {{-- Blog Image Section --}}
                                        <div class="blog-image w-50 sm-w-100 cover-background" 
                                            style="background-image: url('{{ asset('web/media/sm/'.$blog->image) }}')">
                                            <a href="{{ route('front.blog.show', $blog->slug) }}" class="blog-post-image-overlay"></a>
                                        </div>

                                        {{-- Blog Content Section --}}
                                        <div class="blog-content w-50 sm-w-100 pt-50px pb-40px ps-40px pe-40px xl-p-30px bg-white d-flex flex-column justify-content-center align-items-start last-paragraph-no-margin">
                                            <a href="{{ route('front.blog.show', $blog->slug) }}" class="card-title text-dark-gray text-dark-gray-hover fw-500 mb-10px fs-19 alt-font ws-minus-3px">
                                                {{ $blog->title }}
                                            </a>
                                            {{-- <p>{{ \Illuminate\Support\Str::limit(strip_tags($blog->description), 100) }}</p> --}}
                                        </div>

                                    </div>
                                </li>
                            @endforeach


                            <!-- end blog item -->

                        </ul>
                    </div>
                </div>
                
            </div>
        </section>
        <!-- end section --> 
@endsection