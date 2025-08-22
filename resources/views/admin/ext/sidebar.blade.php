<!-- Page Sidebar Start-->
<div class="page-sidebar">
    <div class="main-header-left d-none d-lg-block">
        <div class="logo-wrapper">
            <a href="{{route('admin.index')}}">

                <img class="d-none d-lg-block blur-up lazyloaded" width="100%"
                style="
                                    max-height: 76px;
                                "
                    src="{{asset('web/media/sm')}}/{{ isset(getWebsiteData()['light_logo']) ? getWebsiteData()['light_logo'] : null}}"
                    alt="">
            </a>
        </div>
    </div>
    <div class="sidebar custom-scrollbar">
        <a href="javascript:void(0)" class="sidebar-back d-lg-none d-block"><i class="fa fa-times"
                aria-hidden="true"></i></a>
        <div class="sidebar-user m-0 p-0">
            <img class="img-40" src="{{asset('backend')}}/images/dashboard/user-logo.png" alt="#">
            <div>
                <h6 class="f-14">
                    @if(isset(Session::get('userData')->name)){{Session::get('userData')->name}}@else{{'admin'}}@endif
                </h6>
            </div>
        </div>
        <ul class="sidebar-menu">
            <li class="dashboard">
                <a class="sidebar-header" href="{{route('admin.index')}}">
                    <i data-feather="home"></i>
                    <span>Dashboard</span>
                </a>
            </li>


            <li class="slider">
                <a class="sidebar-header" href="javascript:void(0)">
                    <i data-feather="film"></i>
                    <span>Sliders</span>
                    <i class="fa fa-angle-right pull-right"></i>
                </a>

                <ul class="sidebar-submenu">
                    <li>
                        <a href="{{route('slider.index')}}">
                            <i class="fa fa-circle"></i>Slider List
                        </a>
                    </li>

                    <li>
                        <a href="{{route('slider.create')}}">
                            <i class="fa fa-circle"></i>Add Slider
                        </a>
                    </li>
                </ul>
            </li>

            <li class="category">
                <a class="sidebar-header" href="javascript:void(0)">
                    <i data-feather="activity"></i>
                    <span>Categories</span>
                    <i class="fa fa-angle-right pull-right"></i>
                </a>

                <ul class="sidebar-submenu">
                    <li>
                        <a href="{{route('category.index')}}">
                            <i class="fa fa-circle"></i>Category List
                        </a>
                    </li>

                    <li>
                        <a href="{{route('category.create')}}">
                            <i class="fa fa-circle"></i>Add Category
                        </a>
                    </li>
                </ul>
            </li>

            {{-- <li class="product">
                <a class="sidebar-header" href="javascript:void(0)">
                    <i data-feather="box"></i>
                    <span>Products</span>
                    <i class="fa fa-angle-right pull-right"></i>
                </a>

                <ul class="sidebar-submenu">
                    <li>
                        <a href="{{route('product.index')}}">
                            <i class="fa fa-circle"></i>Product List
                        </a>
                    </li>

                    <li>
                        <a href="{{route('product.create')}}">
                            <i class="fa fa-circle"></i>Add Product
                        </a>
                    </li>
                </ul>
            </li> --}}


            {{-- <li class="service">
                <a class="sidebar-header" href="javascript:void(0)">
                    <i data-feather="server"></i>
                    <span>Service</span>
                    <i class="fa fa-angle-right pull-right"></i>
                </a>

                <ul class="sidebar-submenu">
                    <li>
                        <a href="{{route('service.index')}}">
                            <i class="fa fa-circle"></i>Service List
                        </a>
                    </li>

                    <li>
                        <a href="{{route('service.create')}}">
                            <i class="fa fa-circle"></i>Add Service
                        </a>
                    </li>
                </ul>
            </li> --}}


            {{-- <li class="project">
                <a class="sidebar-header" href="javascript:void(0)">
                    <i data-feather="briefcase"></i>
                    <span>Project</span>
                    <i class="fa fa-angle-right pull-right"></i>
                </a>

                <ul class="sidebar-submenu">
                    <li>
                        <a href="{{route('project.index')}}">
                            <i class="fa fa-circle"></i>Project List
                        </a>
                    </li>

                    <li>
                        <a href="{{route('project.create')}}">
                            <i class="fa fa-circle"></i>Add Project
                        </a>
                    </li>
                </ul>
            </li> --}}



        {{-- <li class="youtube-link">
            <a class="sidebar-header" href="javascript:void(0)">
                <i data-feather="video"></i>
                <span>YouTube Link</span>
                <i class="fa fa-angle-right pull-right"></i>
            </a>

            <ul class="sidebar-submenu">
                <li>
                    <a href="{{ route('admin.youtube.index') }}">
                        <i class="fa fa-circle"></i>YouTube Link List
                    </a>
                </li>

                <li>
                    <a href="{{ route('admin.youtube.create') }}">
                        <i class="fa fa-circle"></i>Add YouTube Link
                    </a>
                </li>
            </ul>
        </li> --}}



            

            {{-- <li class="gallery">
                <a class="sidebar-header" href="javascript:void(0)">
                    <i data-feather="image"></i>
                    <span>Gallery</span>
                    <i class="fa fa-angle-right pull-right"></i>
                </a>

                <ul class="sidebar-submenu">
                    <li>
                        <a href="{{route('gallery.index')}}">
                            <i class="fa fa-circle"></i>Gallery List
                        </a>
                    </li>

                    <li>
                        <a href="{{route('gallery.create')}}">
                            <i class="fa fa-circle"></i>Add Gallery
                        </a>
                    </li>
                </ul>
            </li> --}}


            {{-- <li class="industry">
                <a class="sidebar-header" href="javascript:void(0)">
                    <i data-feather="box"></i>
                    <span>Industry</span>
                    <i class="fa fa-angle-right pull-right"></i>
                </a>

                <ul class="sidebar-submenu">
                    <li>
                        <a href="{{route('industry.index')}}">
                            <i class="fa fa-circle"></i>Industry List
                        </a>
                    </li>

                    <li>
                        <a href="{{route('industry.create')}}">
                            <i class="fa fa-circle"></i>Add Industry
                        </a>
                    </li>
                </ul>
            </li> --}}

            {{-- <li class="testimonial">
                <a class="sidebar-header" href="javascript:void(0)">
                    <i data-feather="thumbs-up"></i>
                    <span>Testimonial</span>
                    <i class="fa fa-angle-right pull-right"></i>
                </a>

                <ul class="sidebar-submenu">
                    <li>
                        <a href="{{route('testimonial.index')}}">
                            <i class="fa fa-circle"></i>Testimonial List
                        </a>
                    </li>

                    <li>
                        <a href="{{route('testimonial.create')}}">
                            <i class="fa fa-circle"></i>Add Testimonial
                        </a>
                    </li>
                </ul>
            </li>

            <li class="team">
                <a class="sidebar-header" href="javascript:void(0)">
                    <i data-feather="users"></i>
                    <span>Team</span>
                    <i class="fa fa-angle-right pull-right"></i>
                </a>

                <ul class="sidebar-submenu">
                    <li>
                        <a href="{{route('team.index')}}">
                            <i class="fa fa-circle"></i>Team List
                        </a>
                    </li>

                    <li>
                        <a href="{{route('team.create')}}">
                            <i class="fa fa-circle"></i>Add Team
                        </a>
                    </li>
                </ul>
            </li>


<li class="client">
    <a class="sidebar-header" href="javascript:void(0)">
        <i data-feather="user"></i>
        <span>Client</span>
        <i class="fa fa-angle-right pull-right"></i>
    </a>

    <ul class="sidebar-submenu">
        <li>
            <a href="{{route('client.index')}}">
                <i class="fa fa-circle"></i>Client List
            </a>
        </li>

        <li>
            <a href="{{route('client.create')}}">
                <i class="fa fa-circle"></i>Add Client
            </a>
        </li>
    </ul>
</li>


<li class="certificate">
    <a class="sidebar-header" href="javascript:void(0)">
        <i data-feather="file-text"></i>
        <span>Certificate</span>
        <i class="fa fa-angle-right pull-right"></i>
    </a>

    <ul class="sidebar-submenu">
        <li>
            <a href="{{route('certificate.index')}}">
                <i class="fa fa-circle"></i>Certificate List
            </a>
        </li>

        <li>
            <a href="{{route('certificate.create')}}">
                <i class="fa fa-circle"></i>Add Certificate
            </a>
        </li>
    </ul>
</li> --}}

            <li class="blog">
                <a class="sidebar-header" href="javascript:void(0)">
                    <i data-feather="edit"></i>
                    <span>Blog</span>
                    <i class="fa fa-angle-right pull-right"></i>
                </a>

                <ul class="sidebar-submenu">
                    <li>
                        <a href="{{route('blog.index')}}">
                            <i class="fa fa-circle"></i>Blog List
                        </a>
                    </li>

                    <li>
                        <a href="{{route('blog.create')}}">
                            <i class="fa fa-circle"></i>Add Blog
                        </a>
                    </li>
                </ul>
            </li>


            <li class="inquiry">
                <a class="sidebar-header" href="javascript:void(0)">
                    <i data-feather="users"></i>
                    <span>Inquiries</span>
                    <i class="fa fa-angle-right pull-right"></i>
                </a>
                <ul class="sidebar-submenu">
                    {{-- <li>
                        <a href="{{route('inquiry.index')}}">
                            <i class="fa fa-circle"></i>Product Inquiry
                        </a>
                    </li> --}}

                    <li>
                        <a href="{{route('contactInquiry')}}">
                            <i class="fa fa-circle"></i>List Inquiry
                        </a>
                    </li>
                </ul>
            </li>



<li class="inquiry">
    <a class="sidebar-header" href="javascript:void(0)">
        <i data-feather="users"></i>
        <span>Employer Inquiries</span>
        <i class="fa fa-angle-right pull-right"></i>
    </a>
    <ul class="sidebar-submenu">
        <li>
            <a href="{{ route('employer-inq.index') }}">
                <i class="fa fa-circle"></i>List Employer Inquiries
            </a>
        </li>
    </ul>
</li>



            <li class="settings">
                <a class="sidebar-header" href="javascript:void(0)"><i
                        data-feather="settings"></i><span>Settings</span><i
                        class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                    <li>
                        <a href="{{route('website.index')}}"><i class="fa fa-circle"></i>Website</a>
                    </li>

                    <li>
                        <a href="{{route('social-media.index')}}"><i class="fa fa-circle"></i>Social Media</a>
                    </li>

                    <li>
                        <a href="{{route('custom-code.index')}}"><i class="fa fa-circle"></i>Custom Code</a>
                    </li>

                </ul>
            </li>


            {{-- <li>
                            <a class="sidebar-header" href="forgot-password.html">
                                <i data-feather="key"></i>
                                <span>Forgot Password</span>
                            </a>
                        </li> --}}

            <li>
                <a class="sidebar-header" href="{{route('logout')}}">
                    <i data-feather="log-in"></i>
                    <span>Logout</span>
                </a>
            </li>
        </ul>
    </div>
</div>
<!-- Page Sidebar Ends-->