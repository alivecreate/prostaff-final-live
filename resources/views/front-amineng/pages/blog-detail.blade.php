@extends('front.layout.main-layout')


@section('custom-js')
<script>
    $(document).ready(function(){
      $(".blog").addClass( "current");
    });
</script>
@endsection

@section('content')

    <section class="page-title" style="background-image:url({{asset('web/media/sm')}}/{{$blog->image}});">
        <div class="auto-container">
            <h1>{{$blog->title}}</h1>
        </div>
        
    </section>
    
    <div class="page-info">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <ul class="bread-crumb pull-left">
                    <li><a href="{{route('index')}}">Home</a></li>
                    <li><a href="{{route('blog')}}">Blog</a></li>
                    <li>{{$blog->title}}</li>
                </ul>
                <div class="text pull-right">Certified Company ISO 9001-2015</div>
            </div>
        </div>
    </div>
    
    <div class="sidebar-page-container">
    	<div class="auto-container">
        	<div class="row clearfix">
            	
                <div class="content-side col-lg-9 col-md-8 col-sm-12 col-xs-12">
                	<div class="blog-single padding-right">
                    
                        <div class="news-block-three">
                            <div class="inner-box">
                                <div class="image">
                                    <img src="{{asset('web/media/sm')}}/{{$blog->image}}" alt="" />
                                </div>
                                <div class="lower-content">
                                    <div class="upper-box clearfix">
                                        <div class="posted-date pull-left">{{dateFormat($blog->created_at, 'd M Y')}}</div>
                                        <ul class="post-meta pull-right">
                                            <li>By :  Admin</li>
                                        </ul>
                                    </div>
                                    <div class="lower-box">
                                        <div class="text">
                                            <p>{!! html_entity_decode($blog->description) !!} </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
               </div>
               
               <div class="sidebar-side col-lg-3 col-md-4 col-sm-12 col-xs-12">
                   <aside class="sidebar">
                    
                        
                        <!-- Popular Posts -->
                        <div class="sidebar-widget popular-posts">
                            <div class="sidebar-title"><h2>Recent Blog</h2></div>

                            
                            @foreach($blogs as $blog)
                                <article class="post">
                                    <figure class="post-thumb"><a href="{{route('blog')}}/{{$blog->slug}}"><img src="{{asset('web/media/lg')}}/{{$blog->image}}" alt=""></a></figure>
                                    <div class="text"><a href="{{route('blog')}}/{{$blog->slug}}">{{$blog->title}}</a></div>
                                    <div class="post-info">20 Feb. 2019</div>
                                </article>
                            @endforeach

                          
                        </div>
                    
                   </aside>
               </div>
               
           </div>
       </div>
    </div>
    



    @endsection