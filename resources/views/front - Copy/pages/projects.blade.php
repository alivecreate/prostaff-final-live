@extends('front.layout.main-layout')
@section('page-title')
@endsection

@section('custom-js')
<script>
    $(document).ready(function(){
      $(".project").addClass( "current");
    });
</script>
@endsection


@section('content')

    <section class="page-title" style="background-image:url(http://localhost:8000/web/media/sm/1733921201_504.webp);">
        <div class="auto-container">
            <h1>Projects</h1>
        </div>
        
    </section>
    <!--End Page Title-->
    
    <!--Page Info-->
    <div class="page-info">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <ul class="bread-crumb pull-left">
                    <li><a href="{{route('index')}}">Home</a></li>
                    <li>Projects</li>
                </ul>
                <div class="text pull-right">Certified Company ISO 9001-2008</div>
            </div>
        </div>
    </div>
    
    <section class="project-grid-section">
    	<div class="auto-container">
        	<div class="row clearfix our-project">
            
            <div class="col-md-4 images">
                    <div class="slide-4 no-arrow">
                                <div class="thumb1">
                                        <img src="http://localhost:8000/web/media/lg/1733260775_163.webp"
                                            class="img-fluid bg-img" alt="">
                                </div>
                                <div class="thumb1">
                                        <img src="http://localhost:8000/web/media/sm/1733921212_717.webp"
                                            class="img-fluid bg-img" alt="">
                                </div>
                                <div class="thumb1">
                                        <img src="http://localhost:8000/web/media/sm/1733921244_735.webp"
                                            class="img-fluid bg-img" alt="">
                                </div>
                                <div class="thumb1">
                                        <img src="http://localhost:8000/web/media/sm/1733921159_580.webp"
                                            class="img-fluid bg-img" alt="">
                                </div>
                                
                                <div class="thumb1">
                                        <img src="http://localhost:8000/web/media/sm/1733921276_420.webp"
                                            class="img-fluid bg-img" alt="">
                                </div>
                    </div>
                </div>

                
                <div class="col-md-8 project-detail" style="padding-left: 40px;">
                    
        <h2 class="title2">Some of our executed Projects,</h2>
        
        <div class="clearfix" style="padding-left: 15px;">
            <ul class="list-style-disc">
            @foreach($projects as $project)
                <li class="mb-4">
                    <h2>{{$project->customer_name}}</h2>
                    <p>{{$project->name}}</p>
                </li>
            @endforeach
            </ul>
        </div>

</div>
                
            </div>
        </div>
    </section>
    
    
@endsection