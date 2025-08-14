
@extends('admin.layout.main-layout')

@section('custom-script')
    
    <script src="{{asset('backend')}}/js/dropzone/dropzone.js"></script>
    <script src="{{asset('backend')}}/js/dropzone/dropzone-script.js"></script>
    
    <script>
        $(".testimonial").addClass( "active");
        $(".testimonial .sidebar-submenu").addClass( "menu-open");
    </script>

@endsection

@section('content')

<div class="page-body">
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <div class="page-header-left">
                        <h3>Edit {{ isset($page['name']) ? $page['name'] : 'item' }}
                            <small>Update {{ isset($page['name']) ? $page['name'] : 'item' }}</small>
                        </h3>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ol class="breadcrumb pull-right">
                        <li class="breadcrumb-item">
                            <a href="index.html">
                                <i data-feather="home"></i>
                            </a>
                        </li>
                        <li class="breadcrumb-item"><a href="{{route('testimonial.index')}}">{{ isset($page['name']) ? $page['name'] : 'item' }}</a></li>
                        <li class="breadcrumb-item active">Edit {{ isset($page['name']) ? $page['name'] : 'item' }}</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container-fluid">
        <div class="card tab2-card">
            <div class="card-body">

                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade active show" id="general">
                            
                        <form class="needs-validation data-form" method="POST" enctype="multipart/form-data"
                            action="{{route('testimonial.update', $testimonial->id)}}">

                            @csrf
                            @method('PUT')
                            
                            <div class="form-group row">
                                <label for="validationCustom2" class="col-xl-3 col-md-4">Name</label>
                                <div class="col-xl-8 col-md-7">
                                    <input class="form-control" id="validationCustom2" type="text" name="name"
                                        value="@if(old('name')){{old('name')}}@else{{$testimonial->name}}@endif"
                                    >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="validationCustom2" class="col-xl-3 col-md-4">Title</label>
                                <div class="col-xl-8 col-md-7">
                                    <input class="form-control" id="validationCustom2" type="text" name="title"
                                    value="@if(old('title')){{old('title')}}@else{{$testimonial->title}}@endif"
                                >
                                </div>
                            </div>
                            <div class="form-group row editor-label">
                                <label class="col-xl-3 col-md-4">Description</label>
                                <div class="col-xl-8 col-md-7">
                                    <textarea rows="4" class="form-control m-0"  
                                    name="description" required>@if(old('description')){{old('description')}}@else{{$testimonial->description}}@endif</textarea>
                                </div>
                            </div>

                            <div class="form-group row editor-label">
                                <label class="col-xl-3 col-md-4">Image</label>
                                <div class="col-xl-8 col-md-7">
                                    <input type="hidden" name="old_image" value="{{$testimonial->image}}">
                                    <input class="" id="validationCustom2" type="file" accept="image/*"  name="image" onchange="previewImage(event)">
                                    <img id="image-preview" height="100" src="{{asset('web/media/sm')}}/{{ isset($testimonial->image) ? $testimonial->image : null}}"/>
                                </div>
                            </div>

                            <div class="form-group row editor-label">
                                <label class="col-xl-3 col-md-4"><span>*</span> Status</label>
                                    <div class="col-xl-8 col-md-7">
                                        <label class="d-block">
                                            <input class="radio_animated" id="edo-ani" type="radio" value="1" checked
                                                name="status"

                                                @if($testimonial->status == 1)
                                                    checked
                                                @endif 
                                                    @if(old('status'))checked
                                                @endif
                                                />

                                            Enable
                                            &nbsp;&nbsp;
                                            <input class="radio_animated" id="edo-ani1" type="radio" value="0"
                                                name="status"
                                                @if($testimonial->status == 0)
                                                    checked
                                                @endif 
                                                    @if(old('status'))checked
                                                @endif
                                                >
                                            Disable
                                        </label>

                                    </div>
                                </div>

                            <div class="form-group">
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary btn-submit"><i class="fa fa-save"></i>  Save Image</button>
                                </div>
                            </div>
                        </form>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>


@endsection