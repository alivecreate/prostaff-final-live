@extends('front.layout.main-layout')

@section('additional-js')
    <script>
            $(".blog a").addClass( "active");
    </script>
@endsection

@section('content')

    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="page-title">
                        <h2>Blog</h2>
                    </div>
                </div>
                <div class="col-sm-6">
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                            <li class="breadcrumb-item active">Blog</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    
    
    <section class="blog-detail-page section-b-space ratio2_3">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 blog-detail">
                    <h1>{{$blog->title}}</h1>
                    <ul class="post-social">
                        <li>{{dateFormat($blog->created_at, 'd M Y')}}</li>
                        <li>Posted By : Admin</li>
                    </ul>
                    <img class="thumb" src="{{asset('web/media/sm')}}/{{$blog->image}}" class="img-fluid blur-up lazyload" alt="">
                    
                    
                    <p>{!! html_entity_decode($blog->description) !!}</p>

                </div>
            </div>
            
        </div>
    </section>



    @include('front.widget.blog-strip')


@endsection