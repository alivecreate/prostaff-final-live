
@extends('admin.layout.main-layout')

@section('custom-script')
    
    <script src="{{asset('backend')}}/js/dropzone/dropzone.js"></script>
    <script src="{{asset('backend')}}/js/dropzone/dropzone-script.js"></script>
    
    <script>
        $(".inquiry").addClass( "active");
        $(".inquiry .sidebar-submenu").addClass( "menu-open");
    </script>

@endsection

@if(Session::get('success'))
    <h1>{{Session::get('success')}}</h1>
@endif
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


  <div class="modal fade" id="InquiryModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title pull-left" id="exampleModalLabel">Inquiry Detail</h3>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body row">
            <div class="col-lg-6">
                <table class="table" id="customerDetail">
                    <tr>
                        <th colspan="2">Customer Detail</th>
                    </tr>
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
                        <th>Message</th>
                        <td  id="message"></td>
                    </tr>

                    <tr>
                        <th>Status</th>
                        <td>
                            <select class="form-control" id="status">
                                <option value="">Select Status</option>
                                <option value="Order Placed">Order Placed</option>
                                <option value="Processing">Processing</option>
                                <option value="Cancel">Cancel</option>
                                <option value="Return Initiated">Return Initiated</option>
                                <option value="Return Received">Return Received</option>
                                <option value="Completed">Completed</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" id="product-inquiry-status-update" inquiry-id="productId">

                        </td>
                    </tr>
                </table>
            </div>

            
            <div class="col-lg-6 inquiry-detail">
                <table class="table">
                    <tr>
                        <th>Product</th>
                        <th>Quantity(KG)</th>
                    </tr>
                    
                    <tbody id="tableBodyResult">
                        <!-- Rows will be added here -->
                    </tbody>
                    
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
                        <tr style="background: wheat;">
                            <th>SR No</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>No of Product</th>
                            <th>Address</th>
                            <th>Status</th>
                            <th>Created Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                       
                        @foreach($items as $key => $inquiry)
                            <tr>
                                <td>{{++$key}}</td>
                                <td>{{$inquiry->name}}</td>
                                <td>{{$inquiry->phone}}</td>
                                <td>{{$inquiry->email}}</td>
                                <td>{{$inquiry->quantities->count()}}</td>
                                <td>{{$inquiry->address}}</td>
                                <td>{{$inquiry->status}}</td>
                                
                                <td>{{$inquiry->created_at}}</td>
                                <td>
                                    <a id="product-inquiry-block"
                                        class="product-inquiry-block"
                                        inquiry-id="{{$inquiry->id}}"
                                        data-bs-toggle="modal" data-bs-target="#InquiryModal"
                                        >
                                    </a>
                                    
                                    <button data-bs-toggle="modal" data-bs-target="#addtocart" 
                                    class="btn btn-solid btn-sm deleteBtn" onclick="deleteBtn('{{ route('productInquiryDelete', $inquiry->id) }}')"><i class="fa fa-trash text-white"></i></button>
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