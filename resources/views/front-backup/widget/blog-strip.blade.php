@if(count(getLatestBlogs()) > 0)
    <section class="blog gym-blog ratio3_2 slick-default-margin section-b-space" style="background: whitesmoke;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-basic">
                        <h2 class="title">Latest Blog</h2>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="slide-4 no-arrow">
                        @foreach(getLatestBlogs(4) as $blog)
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
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endif