@extends('front.layout.main-layout')
@section('custom-style')
<style>
    body {
        font-family: Arial, sans-serif;
        line-height: 1.6;
        margin: 20px;
    }

    h3 {
        color: #333;
    }

    h3 {
        color: #555;
    }

    p {
        margin-bottom: 20px;
    }
</style>
@endsection
@section('content')

    <!-- breadcrumb start -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="page-title">
                        <h4>QR Code</h4>
                    </div>
                </div>
                <div class="col-sm-6">
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">QR Code</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    
  <section class="pt-2" id="qr-scanner">

        <div class="container text-center">
            <img src="{{asset('frontend/images/banner')}}/qr-agriness-bannner.png"/>
        </div>
    </section>



    @endsection