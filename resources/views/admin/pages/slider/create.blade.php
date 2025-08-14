
@extends('admin.layout.main-layout')

@section('custom-script')
    
    <script src="{{asset('backend')}}/js/dropzone/dropzone.js"></script>
    <script src="{{asset('backend')}}/js/dropzone/dropzone-script.js"></script>

    <script>
        $(".slider").addClass( "active");
        $(".slider .sidebar-submenu").addClass( "menu-open");
    </script>

@endsection

@section('content')


<div class="page-body">
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <div class="page-header-left">
                        <h3>Add {{ isset($page['name']) ? $page['name'] : 'item' }}
                            <small>Home Page {{ isset($page['name']) ? $page['name'] : 'item' }}</small>
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
                        <li class="breadcrumb-item active">Create {{ isset($page['name']) ? $page['name'] : 'item' }}</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container-fluid">
        <div class="card tab2-card">
            <div class="card-body">
                <ul class="nav nav-tabs tab-coupon" id="myTab" role="tablist">
                    <li class="nav-item"><a class="nav-link active show" id="general-tab"
                            data-bs-toggle="tab" href="#general" role="tab" aria-controls="general"
                            aria-selected="true" data-original-title="" title="">Image</a></li>

                    {{-- <li class="nav-item"><a class="nav-link" id="seo-tabs" data-bs-toggle="tab" href="#seo"
                            role="tab" aria-controls="seo" aria-selected="false" data-original-title=""
                            title="">Video</a></li> --}}
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade active show" id="general" role="tabpanel"
                        aria-labelledby="general-tab">
                            
                        <form class="needs-validation data-form" action="{{ route('slider.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" value="image" name="type">
                            <div class="form-group row">
                                <label for="validationCustom2" class="col-xl-3 col-md-4">Image Title</label>
                                <div class="col-xl-8 col-md-7">
                                    <input class="form-control" id="validationCustom2" type="text" name="title">
                                </div>
                            </div>
                            <div class="form-group row editor-label">
                                <label class="col-xl-3 col-md-4">Image Description</label>
                                <div class="col-xl-8 col-md-7">
                                    <textarea rows="4" class="form-control m-0"  name="description"></textarea>
                                </div>
                            </div>
                            <div class="form-group row editor-label">
                                <label class="col-xl-3 col-md-4">Url</label>
                                <div class="col-xl-8 col-md-7">
                                    <input class="form-control" id="validationCustom2" type="text"  name="url">
                                </div>
                            </div>

                            <div class="form-group row editor-label">
                                <label class="col-xl-3 col-md-4">Image</label>
                                <div class="col-xl-8 col-md-7">
                                    <input class="" id="validationCustom2" type="file" accept="image/*" required  name="image" onchange="previewImage(event)">
                                    <img id="image-preview" height="100" />
                                </div>
                            </div>

                            <div class="form-group row editor-label">
                                <label class="col-xl-3 col-md-4"><span>*</span> Status</label>
                                    <div class="col-xl-8 col-md-7">
                                        <label class="d-block">
                                            <input class="radio_animated" id="edo-ani" type="radio" value="1" checked
                                                name="status">
                                            Enable
                                            &nbsp;&nbsp;
                                            <input class="radio_animated" id="edo-ani1" type="radio" value="0"
                                                name="status">
                                            Disable
                                        </label>
                                    </div>
                                </div>

                            <div class="form-group">
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i>  Save Image</button>
                                </div>
                            </div>
                        </form>

                    </div>

                    <div class="tab-pane fade" id="seo" role="tabpanel" aria-labelledby="seo-tabs">
                        <form class="needs-validation">
                            <div class="form-group row">
                                <label for="validationCustom2" class="col-xl-3 col-md-4">Video Title</label>
                                <div class="col-xl-8 col-md-7">
                                    <input class="form-control" id="validationCustom2" type="text">
                                </div>
                            </div>
                            <div class="form-group row editor-label">
                                <label class="col-xl-3 col-md-4">Video Description</label>
                                <div class="col-xl-8 col-md-7">
                                    <textarea rows="4" class="form-control m-0"></textarea>
                                </div>
                            </div>

                            <div class="form-group row editor-label">
                                <label class="col-xl-3 col-md-4"><span>*</span> Status</label>
                                    <div class="col-xl-8 col-md-7">
                                        <label class="d-block">
                                            <input class="radio_animated" id="edo-ani" type="radio" value="true" checked
                                                name="status">
                                            Enable
                                            &nbsp;&nbsp;
                                            <input class="radio_animated" id="edo-ani1" type="radio" value="false"
                                                name="status">
                                            Disable
                                        </label>
                                    </div>
                                </div>


                            <div class="form-group">
                                <div class="text-center">
                                    <button type="button" class="btn btn-primary btn-submit"><i class="fa fa-save"></i>  Save Video</button>
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