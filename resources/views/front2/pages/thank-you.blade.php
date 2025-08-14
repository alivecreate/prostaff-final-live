@extends('front.layout.main-layout')
@section('content')
    <!-- header end -->
    

    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="page-title">
                        <h2>Thank You</h2>
                    </div>
                </div>
                <div class="col-sm-6">
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                            <li class="breadcrumb-item active">Thank You</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <section class="section-b-space">
        <div class="container">
            
            <div class="alert alert-success text-center text-dark">
                <h3>Thank you for interested in our products.</h3>
                <p>We will contact you soon.</p>
            </div>
        </div>
    </section>

@endsection