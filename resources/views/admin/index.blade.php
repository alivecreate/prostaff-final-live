
@extends('admin.layout.main-layout')
@section('custom-script')
    <script src="{{asset('backend')}}/js/chart/peity-chart/peity.jquery.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

    <script src="{{asset('backend')}}/js/chart/sparkline/sparkline.js"></script>
    <script src="{{asset('backend')}}/js/chart/chartist/chartist.js"></script>
    <script src="{{asset('backend')}}/js/chart/chartjs/chart.min.js"></script>
    <script src="{{asset('backend')}}/js/dashboard/default.js"></script>
@endsection


@section('content')

            <div class="page-body">
                <!-- Container-fluid starts-->
                <div class="container-fluid">
                    <div class="page-header">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="page-header-left">
                                    <h3>Dashboard
                                        <small>Admin</small>
                                    </h3>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <ol class="breadcrumb pull-right">
                                    <li class="breadcrumb-item">
                                        <a href="{{route('admin.index')}}">
                                            <i data-feather="home"></i>
                                        </a>
                                    </li>
                                    <li class="breadcrumb-item active">Dashboard</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xxl-3 col-md-6 xl-50">
                            <div class="card o-hidden widget-cards">
                                <div class="warning-box card-body">
                                    <div class="media static-top-widget align-items-center">
                                        <div class="icons-widgets">
                                            <div class="align-self-center text-center">
                                                <i data-feather="navigation" class="font-warning"></i>
                                            </div>
                                        </div>
                                        <a class="btn mt-4" href="{{route('category.index')}}">
                                            <div class="media-body media-doller">
                                                <span class="m-0">Categories</span>
                                                <h3 class="mb-0"><span class="counter">{{getTotalCategories()}}</span></h3>
                                            </div>
                                        <div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-md-6 xl-50">
                            <div class="card o-hidden widget-cards">
                                <div class="secondary-box card-body">
                                    <div class="media static-top-widget align-items-center">
                                        <div class="icons-widgets">
                                            <div class="align-self-center text-center">
                                                <i data-feather="box" class="font-secondary"></i>
                                            </div>
                                        </div>
                                        <a class="btn mt-4" href="{{route('product.index')}}">
                                            <div class="media-body media-doller">
                                                <span class="m-0">Products</span>
                                                <h3 class="mb-0"><span class="counter">{{getTotalProducts()}}</span></h3>
                                            </div>
                                        </a>
                                        
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-md-6 xl-50">
                            <div class="card o-hidden widget-cards">
                                <div class="primary-box card-body">
                                    <div class="media static-top-widget align-items-center">
                                        <div class="icons-widgets">
                                            <div class="align-self-center text-center"><i data-feather="message-square"
                                                    class="font-primary"></i></div>
                                        </div>
                                        
                                        <a class="btn mt-4" href="{{route('inquiry.index')}}">
                                            <div class="media-body media-doller"><span class="m-0">Product Inquiries</span>
                                                <h3 class="mb-0"><span class="counter">{{getTotalProductInquiry()}}</span></h3>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-md-6 xl-50">
                            <div class="card o-hidden widget-cards">
                                <div class="danger-box card-body">
                                    <div class="media static-top-widget align-items-center">
                                        <div class="icons-widgets">
                                            <div class="align-self-center text-center"><i data-feather="users"
                                                    class="font-danger"></i></div>
                                        </div>
                                        <a class="btn mt-4" href="{{route('contactInquiry')}}">
                                            <div class="media-body media-doller"><span class="m-0">Inquiry</span>
                                                <h3 class="mb-0"><span class="counter">{{getTotalInquiry()}}</span></h3>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

{{-- row 2 --}}
<div class="col-xxl-3 col-md-6 xl-50">
    <div class="card o-hidden widget-cards">
        <div class="secondary-box card-body">
            <div class="media static-top-widget align-items-center">
                <div class="icons-widgets">
                    <div class="align-self-center text-center">
                        <i data-feather="box" class="font-secondary"></i>
                    </div>
                </div>
                <a class="btn mt-4" href="{{route('testimonial.index')}}">
                    <div class="media-body media-doller">
                        <span class="m-0">Testimonials</span>
                        <h3 class="mb-0"><span class="counter">{{getTotalTestimonials()}}</span></h3>
                    </div>
                </a>
                
            </div>
            
        </div>
    </div>
</div>
                        <div class="col-xxl-3 col-md-6 xl-50">
                            <div class="card o-hidden widget-cards">
                                <div class="warning-box card-body">
                                    <div class="media static-top-widget align-items-center">
                                        <div class="icons-widgets">
                                            <div class="align-self-center text-center">
                                                <i data-feather="navigation" class="font-warning"></i>
                                            </div>
                                        </div>
                                        <a class="btn mt-4" href="{{route('slider.index')}}">
                                            <div class="media-body media-doller">
                                                <span class="m-0">Sliders</span>
                                                <h3 class="mb-0"><span class="counter">{{getTotalCategories()}}</span></h3>
                                            </div>
                                        <div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-3 col-md-6 xl-50">
                            <div class="card o-hidden widget-cards">
                                <div class="danger-box card-body">
                                    <div class="media static-top-widget align-items-center">
                                        <div class="icons-widgets">
                                            <div class="align-self-center text-center"><i data-feather="users"
                                                    class="font-danger"></i></div>
                                        </div>
                                        <a class="btn mt-4" href="{{route('team.index')}}">
                                            <div class="media-body media-doller"><span class="m-0">Team</span>
                                                <h3 class="mb-0"><span class="counter">{{getTotalTeam()}}</span></h3>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-xxl-3 col-md-6 xl-50">
                            <div class="card o-hidden widget-cards">
                                <div class="primary-box card-body">
                                    <div class="media static-top-widget align-items-center">
                                        <div class="icons-widgets">
                                            <div class="align-self-center text-center"><i data-feather="message-square"
                                                    class="font-primary"></i></div>
                                        </div>
                                        
                                        <a class="btn mt-4" href="{{route('blog.index')}}">
                                            <div class="media-body media-doller"><span class="m-0">Blogs</span>
                                                <h3 class="mb-0"><span class="counter">{{getTotalBlogs()}}</span></h3>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

@endsection