
@extends('admin.layout.main-layout')


@section('custom-script')

<script>
        $(".gallery").addClass( "active");
        $(".gallery .sidebar-submenu").addClass( "menu-open");
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

                <a href="{{route('gallery.create')}}" class="btn btn-primary mt-md-0 mt-2">Add New {{ isset($page['name']) ? $page['name'] : 'item' }}</a>
            </div>
            
            <div class="card-body vendor-table">
                <table class="display" id="basic-1">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Status</th>
                            <th>Created Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                       
                        @foreach($items as $gallery)
                            <tr>
                                <td>
                                    <div class="row vendor-list banner-section" style="width: 150px;">
                                        <img
                                        src="{{asset('web')}}/media/sm/{{$gallery->image}}" widtg="140" alt="" />
                                    
                                    </div>
                                </td>
                                <td>{{$gallery->name}}</td>
                               
                                <td>
                                    @if($gallery->status === 'active')
                                        <span class="badge badge-success">Active</span>
                                    @else
                                        <span class="badge badge-primary">Deactive</span>
                                    @endif

                                </td>
                                <td>{{$gallery->created_at}}</td>
                                <td>
                                    
                                    <a href="{{ route('gallery.edit', $gallery->id) }}"
                                    class="btn btn-secondary btn-sm editBtn" onclick=""><i class="fa fa-edit text-white"></i></a>

                                    <button data-bs-toggle="modal" data-bs-target="#addtocart" 
                                    class="btn btn-solid btn-sm deleteBtn" onclick="deleteBtn('{{ route('gallery.destroy', $gallery->id) }}')"><i class="fa fa-trash text-white"></i></button>
                                
                                </td>
                            </tr>
                        @endforeach
                       
                    </tbody>
                </table>

                @include('admin.widget.pagination')

                @include('admin.widget.delete-modal', [
                    "message" => "Are You Sure You Want To Delete this ".$page['name']." ?"
                ])

            </div>
        </div>
    </div>
</div>


@endsection