
@extends('admin.layout.main-layout')

@section('custom-script')
    
    
    <script src="{{asset('backend')}}/js/editor/ckeditor/ckeditor.js"></script>
    <script src="{{asset('backend')}}/js/editor/ckeditor/ckeditor.custom.js"></script>

<script>
        $(".inquiry").addClass( "active");
        $(".inquiry .sidebar-submenu").addClass( "menu-open");
    </script>

@endsection

@section('content')

<div class="page-body">
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <div class="page-header-left">
                        <h3>View {{ isset($page['name']) ? $page['name'] : 'item' }}
                            <small> {{ isset($page['name']) ? $page['name'] : 'item' }}</small>
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
                        <li class="breadcrumb-item"><a href="{{route('inquiry.index')}}">{{ isset($page['name']) ? $page['name'] : 'item' }}</a></li>
                        <li class="breadcrumb-item active">View {{ isset($page['name']) ? $page['name'] : 'item' }}</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="bg-inner cart-section order-details-table">
                            <div class="row g-4">
                                <div class="col-xl-8">
                                    <div class="table-responsive table-details">
                                        <table class="table cart-table table-borderless">
                                            <thead>
                                                <tr>
                                                    <th colspan="2">Image</th>
                                                    <th colspan="2">Product Name</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                
                                            @foreach(getProductsFromArray($inquiry->product_ids) as $product)
                                                <tr class="table-order">
                                                    <td colspan="2">
                                                            <img height="100" src="{{asset('web/media/md')}}/{{getProductImage(findProductData($product)[0]['id'])['image']}}"
                                                                class="blur-up lazyload" alt="">
                                                    </td>
                                                    <td colspan="2">
                                                        <h5>{{findProductData($product)[0]['name']}}</h5>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>

                                        </table>
                                    </div>
                                </div>

                                <div class="col-xl-4">
                                    <div class="row g-4">
                                        <div class="col-12">
                                            <div class="order-success">
                                                <h4>Inquiry Detail</h4>
                                                <ul class="order-details">
                                                    <li>Customer Name: {{$inquiry->name}}</li>
                                                    <li>Phone: {{$inquiry->phone}}</li>
                                                    <li>Email: {{$inquiry->email}}</li>
                                                    <li>City: {{$inquiry->city}}</li>
                                                    <li>Date: {{dateFormat($inquiry->created_at, 'd M Y')}}</li>
                                                    <li>Time: {{dateFormat($inquiry->created_at, 'H:i:s')}}</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="order-success">
                                                <h4>Message</h4>
                                                <ul class="order-details">
                                                    <li>{{$inquiry->message}}</li>
                                                </ul>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- section end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>


@endsection