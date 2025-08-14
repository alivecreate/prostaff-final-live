
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


  <div class="modal fade" id="InquiryModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title" id="exampleModalLabel">Inquiry Detail</h3>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body row">
            <div class="col-lg-6">
                <table class="table">
                    <tr>
                        <th colspan="2">Customer Detail</th>
                    </tr>
                    <tr>
                        <th>Name</th>
                        <td>Krishna</td>
                    </tr>
                    <tr>
                        <th>Phone</th>
                        <td>9137634193</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>myalivecreate@gmail.com</td>
                    </tr>
                    <tr>
                        <th>Address</th>
                        <td>25,B Shivam Park, Bh Poonam Complex, Waghodia Road, vadodara - 390019</td>
                    </tr>
                    <tr>
                        <th>Status</th>
                        <td>
                            <select class="form-control">
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
                        <td colspan="2"><button class="btn btn-primary" type="submit">Update Status</button></td>
                    </tr>
                </table>
            </div>

            
            <div class="col-lg-6 inquiry-detail">
                <table class="table">
                    <tr>
                        <th>Product</th>
                        <th>Quantity(KG)</th>
                    </tr>
                    <tr>
                        <th>Banana</th>
                        <td>1</td>
                    </tr>
                    <tr>
                        <th>Mango</th>
                        <td>10</td>
                    </tr>
                </table>
                
                <tbody id="tableBody">
                    <!-- Rows will be added here -->
                </tbody>
                
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
                            <th>address</th>
                            <th>Created Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                       
                        @foreach($inquiries as $key => $inquiry)
                            <tr>
                                <td>{{$key}}</td>
                                <td>{{$inquiry->name}}</td>
                                <td>{{$inquiry->phone}}</td>
                                <td>{{$inquiry->email}}</td>
                                <td>{{$inquiry->quantities->count()}}</td>
                                <td>{{$inquiry->address}}</td>
                            
                                
                                <td>{{$inquiry->created_at}}</td>
                                <td>
                                    <div id="product-inquiry-block"
                                        class="product-inquiry-block"
                                        inquiry-id="{{$inquiry->id}}"
                                        >
                                        Show 
                                    </div>
                                    
                                    <a
                                        class="btn btn-warning btn-sm editBtn btnInquiryDetail" 
                                        inquiry-id="{{$inquiry->id}}"
                                        data-bs-toggle="modal" data-bs-target="#InquiryModal"><i class="fa fa-eye text-white"></i></a>
                                    

                                    <a href="{{ route('inquiry.edit', $inquiry->id) }}"
                                        class="btn btn-secondary btn-sm editBtn" onclick=""><i class="fa fa-edit text-white"></i></a>

                                    <button data-bs-toggle="modal" data-bs-target="#addtocart" 
                                    class="btn btn-solid btn-sm deleteBtn" onclick="deleteBtn('{{ route('inquiry.destroy', $inquiry->id) }}')"><i class="fa fa-trash text-white"></i></button>
                                
                                </td>
                            </tr>
                            <tr>
                                
                                <td colspan="7">
                                    <div class="accordion" id="singleAccordion">
                                        <div class="accordion-item">

                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#{{$inquiry->id}}" aria-expanded="true" aria-controls="collapseOne">
                                                Product Detail
                                                </button>
                                        <div id="{{$inquiry->id}}" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#singleAccordion">
                                            <div class="accordion-body">
                                                <table class="table table-bordered">
                                                    <tr style="text-align: left;">
                                                        <th class="text-left">Product</th>
                                                        <th class="text-left">Quantity</th>
                                                    </tr>
                                                        
                                                    @foreach($inquiry->quantities as $cart => $quantity)
                                                        <tr style="text-align: left;">
                                                            <td class="cart-item text-left" style="text-align: left !important">
                                                            @if(getProductImage($quantity->product_id))
                                                                <img width="50" src="{{asset('web/media/md')}}/{{getProductImage($quantity->product_id)['image']}}" alt="">
                                                            @endif

                                                                {{-- {{dd($quantity->product_id)}} --}}

                                                            {{findSingleProduct($quantity->product_id)['name']}}
                                                                </td>
                                                            <td class="cart-item text-left"  style="text-align: left !important">
                                                                {{$quantity->quantity}}
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </table>

                                            </div>
                                        </div>
                                        </div>
                                    </div>
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