
@extends('admin.layout.main-layout')

@section('custom-script')
    
    <script src="{{asset('backend')}}/js/editor/ckeditor/ckeditor.js"></script>
    <script src="{{asset('backend')}}/js/editor/ckeditor/ckeditor.custom.js"></script>

    <script>
        $(".settings").addClass( "active");
        $(".settings .sidebar-submenu").addClass( "menu-open");
    </script>

@endsection

@section('content')

<div class="page-body">
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <div class="page-header-left">
                        <h3>Update {{ isset($page['name']) ? $page['name'] : 'item' }}
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
                        <li class="breadcrumb-item"><a href="{{route('custom-code.index')}}">{{ isset($page['name']) ? $page['name'] : 'item' }}</a></li>
                        <li class="breadcrumb-item active">Create {{ isset($page['name']) ? $page['name'] : 'item' }}</li>
                    </ol>
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

    <form action="{{route('custom-code.store')}}"
        method="POST" enctype="multipart/form-data">
        @csrf
            <div class="container-fluid">
                <div class="row product-adding">

                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="digital-add needs-validation">
                                    <h4 class="text-danger">Custom JS</h4>
                                        <textarea
                                            style="height: 500px;"
                                        type="text" class="form-control" id="twitter"  name="js" 
                                            placeholder="Write Custom JS Code">{{ old('js', optional($customCode)->js) }}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="digital-add needs-validation">
                                    <h4 class="text-danger">Custom CSS</h4>
                                        <textarea
                                            style="height: 500px;"
                                        type="text" class="form-control" id="twitter"  name="css" 
                                            placeholder="Write Custom CSS Code">{{ old('css', optional($customCode)->css) }}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <input type="submit" class="btn btn-primary just" id="btn-social-media"  name="btn-social-media" 
                                    value="Save Custom Code">
                
                </div>
            </div>
    </form>
</div>


@endsection