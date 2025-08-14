
@extends('admin.layout.main-layout')

@section('custom-script')
    
    <script src="{{asset('backend')}}/js/dropzone/dropzone.js"></script>
    <script src="{{asset('backend')}}/js/dropzone/dropzone-script.js"></script>
    
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
    
    

  <div class="modal fade" id="ContactInquiryModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title" id="exampleModalLabel">Contact Inquiry Detail</h3>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body row">
            <div class="col-lg-12">
                <table class="table" id="customerDetail">
                    <tr>
                        <th>Name</th>
                        <td id="name"></td>
                    </tr>
                    <tr>
                        <th>Phone</th>
                        <td id="phone"></td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td  id="email"></td>
                    </tr>
                    <tr>
                        <th>Address</th>
                        <td  id="address"></td>
                    </tr>
                    
                    <tr>
                        <th>Service</th>
                        <td  id="service"></td>
                    </tr>
                    
                    {{-- <tr>
                        <th>Induvidual Service</th>
                        <td  id="individualService"></td>
                    </tr> --}}
                    
                {{-- <tr>   
                    <th>Page Url</th>
                    <td  id="pageUrl"></td>
                </tr> --}}
                
                    <tr>
                        <th>Message</th>
                        <td  id="message"></td>
                    </tr>
                    
                </table>
            </div>


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  


    <div class="container-fluid">
        <div class="card">
            <div class="card-body vendor-table">
                <table class="display" id="basic-1">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Service</th>
                            <th>Message</th>
                            <th>Created Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                       
                        @foreach($items as $inquiry)
                            <tr>
                                <td>{{$inquiry->name}}</td>
                                <td>{{$inquiry->phone}}</td>
                                <td>{{$inquiry->email}}</td>
                                <td>{{$inquiry->service}}</td>
                                <td>{{$inquiry->message}}</td>
                                <td>{{$inquiry->created_at}}</td>
                                <td>
                                    <a id="product-inquiry-block"
                                        class="btn btn-warning btn-sm editBtn " 
                                        inquiry-id="{{$inquiry->id}}"
                                        data-name="{{$inquiry->name}}"
                                        data-phone="{{$inquiry->phone}}"
                                        data-email="{{$inquiry->email}}"
                                        data-address="{{$inquiry->address}}"
                                        
                                        @if($inquiry->individualService) data-individual-service="{{ $inquiry->individualService }}" @endif
                                        
                                        data-service="{{$inquiry->service}}"
                                        data-message="{{$inquiry->message}}"
                                        data-page-url="{{$inquiry->page_url}}"
                                        data-bs-toggle="modal" data-bs-target="#ContactInquiryModal"
                                        > 
                                        <i class="fa fa-eye text-white"></i>
                                    </a>
                                    
                                    <button data-bs-toggle="modal" data-bs-target="#addtocart" 
                                    class="btn btn-solid btn-sm deleteBtn" onclick="deleteBtn('{{ route('inquiry.destroy', $inquiry->id) }}')"><i class="fa fa-trash text-white"></i></button>
                                
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