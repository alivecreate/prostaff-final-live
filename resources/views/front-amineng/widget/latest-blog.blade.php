
<section class="clients-section">
    <div class="auto-container">

        <div class="sec-title">
            <h2>Latest From Blogs</h2>
            <div class="title">News & Press Release</div>
        </div>

        <div class="row clearfix">

            <div class="column col-md-8 col-sm-12 col-xs-12">
                <div class="row clearfix">
                
                @foreach(getLatestBlogs(2) as $blog)
                    <div class="news-block col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <div class="image thumb-block">
                                <a href="{{route('blog')}}/{{$blog->slug}}"><img src="{{asset('web/media/lg')}}/{{$blog->image}}"
                                        alt="" /></a>
                            </div>
                            <div class="lower-box">
                                <div class="post-info">{{dateFormat($blog->created_at, 'd M Y')}}</div>
                                <h3><a href="{{route('blog')}}/{{$blog->slug}}">{{$blog->title}}</a></h3>
                                <a href="{{route('blog')}}/{{$blog->slug}}" class="theme-btn read-more">Read More</a>
                            </div>
                        </div>
                    </div>
                @endforeach


                </div>
            </div>

            <!--Column-->
            <div class="column col-md-4 col-sm-12 col-xs-12">
                <div class="sidebar-news">

                    <!--News Block Two-->
                    @foreach(getSpecificBlogs(4 , 2) as $specificBlog)
                        <div class="news-block-two">
                            <div class="inner-box">
                                <h3><a href="{{route('blog')}}/{{$blog->slug}}">{{$specificBlog->title}}</a></h3>
                                <div class="post-info">{{dateFormat($blog->created_at, 'd M Y')}}</div>
                            </div> 
                        </div>
                    @endforeach 

                    @if(count(getSpecificBlogs(4 , 2)) > 0)
                        <a href="{{route('blog')}}" class="read-more">Read More</a>
                    @endif
                      
                </div>
            </div>

        </div>

    </div>
</section>