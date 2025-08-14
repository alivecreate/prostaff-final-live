
@extends('admin.layout.main-layout')

@section('custom-script')
    
    <script src="{{asset('backend')}}/js/dropzone/dropzone.js"></script>
    <script src="{{asset('backend')}}/js/dropzone/dropzone-script.js"></script>
    
    <script>
        $(".product").addClass( "active");
        $(".product .sidebar-submenu").addClass( "menu-open");
    </script>

@endsection

@section('content')


<div class="page-body">
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <div class="page-header-left">
                        <h3>{{ isset($page['name']) ? $page['name'] : 'item' }} List
                            <small>List of {{ isset($page['name']) ? $page['name'] : 'item' }}</small>
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
                        <li class="breadcrumb-item">{{ isset($page['name']) ? $page['name'] : 'item' }}</li>
                        <li class="breadcrumb-item active">{{ isset($page['name']) ? $page['name'] : 'item' }} List</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <form class="form-inline search-form search-box">
                    <div class="form-group">
                        <input class="form-control-plaintext" type="search" placeholder="Search.."><span
                            class="d-sm-none mobile-search"><i data-feather="search"></i></span>
                    </div>
                </form>

                <a href="{{route('product.create')}}" class="btn btn-primary mt-md-0 mt-2">Add New {{ isset($page['name']) ? $page['name'] : 'item' }}</a>
            </div>
            <div class="card-body vendor-table">
                <table class="display" id="basic-1">
                    <thead>
                        <tr>
                            <th>Image/Video</th>
                            <th>Name</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Status</th>
                            <th>Created Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                       


                        @foreach($products as $product)
                            <tr>
                                <td>
                                    <div class="d-flex vendor-list banner-section">
                                        <img src="{{ asset('web/media/sm') }}/{{$product->image}}" height="100" alt=""
                                            class="img-thimb blur-up lazyloaded">
                                    </div>
                                </td>
                                <td>{{$product->name}}</td>
                                <td>{{$product->title}}</td>
                                <td>{{$product->description}}</td>
                                <td>
                                    @if($product->status === 1)
                                        <span class="badge badge-success">Active</span>
                                    @else
                                        <span class="badge badge-primary">Deactive</span>
                                    @endif

                                </td>
                                <td>{{$product->created_at}}</td>
                                <td>
                                    
                                    <a href="{{ route('product.edit', $product->id) }}"
                                    class="btn btn-secondary btn-sm editBtn" onclick=""><i class="fa fa-edit text-white"></i></a>

                                    <button data-bs-toggle="modal" data-bs-target="#addtocart" 
                                    class="btn btn-solid btn-sm deleteBtn" onclick="deleteBtn('{{ route('product.destroy', $product->id) }}')"><i class="fa fa-trash text-white"></i></button>
                                
                                </td>
                            </tr>
                        @endforeach
                       
                    </tbody>
                </table>

                @include('admin.widget.delete-modal', [
                    "message" => "Are You Sure You Want To Delete this ".$page['name']." ?"
                ])

            </div>
        </div>
    </div>
</div>


@endsection