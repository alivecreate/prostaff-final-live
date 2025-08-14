@extends('front.layout.main-layout')
@section('content')
    <!-- header end -->
    

    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="page-title">
                        <h2>Product Cart</h2>
                    </div>
                </div>
                <div class="col-sm-6">
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                            <li class="breadcrumb-item active">Product Cart</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <section class="section-b-space">
        <div class="container">
            <div class="checkout-page">
                
                <div class="checkout-form">
                    <form class="needs-validation data-form" action="{{ route('storeProductInquiry') }}" 
                        method="POST">
                        @csrf
                        
                        <div class="row">
                            <div class="col-lg-6 col-sm-12 col-xs-12" >
                                @if($cartData)
                                    <div class="checkout-details">
                                        <div class="order-box">
                                            <div class="title-box">
                                                <div>Product Detail</div>
                                            </div>
                                            <ul class="qty">
                                                <table class="table">
                                                    <tr>
                                                        <th>Product</th>
                                                        <th>Quantity</th>
                                                    </tr>
                                                        
                                                    @foreach($cartData as $cart => $quantity)
                                                        <tr>
                                                            <td class="cart-item">
                                                            @if(isset(getProductImage($cart)['image']))
                                                                <img width="100" src="{{asset('web/media/md')}}/{{getProductImage($cart)['image']}}" alt="">
                                                            @endif
                                                            
                                                            {{findSingleProduct($cart)['name']}}</td>
                                                            <td class="cart-item">
                                                                {{$quantity}}
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                        
                                                </table>
                                            
                                            </ul>
                                        </div>
                                        
                                    </div>
                                @endif
                            </div>

                            <div class="col-lg-6 col-sm-12 col-xs-12"
                            style="
                                padding: 14px;
                                border: 3px dotted #588f5c;
                                background: linear-gradient(45deg, #f7f7f7 0%, #ffffff 100%);
                                height: fit-content;
                            "
                            >
                                <div class="checkout-title">
                                    <h3>Inquiry Form</h3>
                                </div>
                                <div class="row check-out" style="clear: both;">
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <div class="field-label">Full Name<span class="text-danger">*</span></div>
                                        <input type="text" name="name" value="{{old('name')}}" placeholder="Enter your name" >
                                        
                                        @error('name')
                                            <p class="text text-danger mb-0">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <div class="field-label">Phone<span class="text-danger">*</span></div>
                                        <input type="number" name="phone" value="{{old('phone')}}" placeholder="Enter your phone number" 
                                        min="1"
                                        >
                                        
                                        @error('phone')
                                            <p class="text text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <div class="field-label">Email</div>
                                        <input type="email" name="email" value="{{old('email')}}" placeholder="Enter your email" >
                                    </div>

                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <div class="field-label">Address</div>
                                        <input type="text" name="address" value="{{old('address')}}" placeholder="Enter your address" >
                                    </div>

                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <div class="field-label">Message</div>
                                        <textarea style="padding: 10px 22px; height: 102px;" rows="4" type="text" name="message" placeholder="Write Here">{{old('message')}}</textarea>
                                    </div>
                                    <input type="hidden" name="product_ids" value="{{$productIds}}">
                                    <input type="hidden" name="type" value="product">
                                </div>
                                <div class="payment-box mt-4">
                                    <div class="text-end"><input type="submit" class="btn-solid btn" value="Submit Detail"/></div>
                                </div>
                            </div>


                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection