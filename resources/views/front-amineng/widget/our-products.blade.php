
<section class="project-section" style="background:white">
    <div class="auto-container">

        <!--Sec Title-->
        <div class="sec-title">
            <div class="clearfix">
                <div class="pull-left">
                    <h2>Our Products</h2>
                </div>
                <div class="pull-right">
                    <a href="{{route('products')}}" class="projects">View all Products</a>
                </div>
            </div>
        </div>

        <div class="row clearfix">
            @foreach($categories as $category)
                <div class="services-block thumb-block col-md-3 col-sm-6 col-xs-12">
                    <div class="inner-box" style="background: #1E5D6D;">
                        <div class="image">

                            <a href="{{route('productDetail', $category->slug)}}">
                            
                            @if(isset($category->image))    
                            <img
                                    src="{{asset('web')}}/media/md/{{$category->image}}" alt="" />
                            @endif    
                            </a>
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