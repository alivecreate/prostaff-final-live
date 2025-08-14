
@extends('admin.layout.plain-layout')

@section('custom-script')
    <script src="{{asset('backend')}}/js/editor/ckeditor/ckeditor.js"></script>
    <script src="{{asset('backend')}}/js/editor/ckeditor/ckeditor.custom.js"></script>
<script>
    
        $(".blog").addClass( "active");
        $(".blog .sidebar-submenu").addClass( "menu-open");
    </script>

@endsection


@section('content')


<div class="page-body">
    <div class="page-wrapper">
        <div class="authentication-box">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 p-0  mx-auto text-center">
                        <img class="text-center mb-5" width="200" src="{{asset('web/media/sm/')}}/{{getWebsiteData()['main_logo']}}" />
                            
                        <div class="card tab2-card card-login">
                            <div class="card-body">
                                <div class="tab-content text-center" id="top-tabContent">
                                    <h2 class="text-center mb-1">Login Now</h2>
                                    <hr class="mb-4">
                                    <div class="tab-pane fade show active" id="top-profile" role="tabpanel"
                                        aria-labelledby="top-profile-tab">
                                        <form class="form-horizontal auth-form" action="{{route('checkAuth')}}" 
                                        method="POST" enctype="multipart/form-data">
                                        @csrf
                                            <div class="form-group">
                                                <input required="" name="email" type="email"
                                                    class="form-control" placeholder="Email Id" id="exampleInputEmail1">
                                            </div>
                                            <div class="form-group">
                                                <input required="" name="password" type="password"
                                                    class="form-control" placeholder="Password">
                                            </div>
                                            <div class="form-terms">
                                                <div class="form-check mesm-2">
                                                    <input type="checkbox" class="form-check-input"
                                                        id="customControlAutosizing">
                                                    <label class="form-check-label ps-2"
                                                        for="customControlAutosizing">Remember me</label>
                                                    <a href="javascript:void(0)"
                                                        class="btn btn-default forgot-pass">Forgot Password!</a>
                                                </div>
                                                </div>


                                            <div class="form-button">
                                                <button class="btn btn-primary" type="submit">Login</button>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

   
</div>


@endsection