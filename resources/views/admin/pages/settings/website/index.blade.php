
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
                        <h3>Update {{ isset($page['name']) ? $page['name'] : 'item' }} Settings
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
                        <li class="breadcrumb-item"><a href="{{route('website.index')}}">{{ isset($page['name']) ? $page['name'] : 'item' }}</a></li>
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

    <form class="needs-validation data-form" 
        action="{{route('website.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
    <div class="container-fluid">
        <div class="row product-adding">
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h5>General</h5>
                    </div>
                    <div class="card-body">
                        <div class="digital-add needs-validation">
                            <div class="form-group">
                                <label for="validationCustom01" class="col-form-label pt-0 slug-generator">
                                    Website Name</label>
                                <input class="form-control slug-generator" name="website_name" id="validationCustom01" 
                                 value="{{ isset($website->website_name) ? $website->website_name : null}}" type="text">
                            </div>
                            <div class="form-group">
                                <label for="validationCustom01" class="col-form-label pt-0 slug-generator">
                                    Tagline</label>
                                <input class="form-control slug-generator" name="tagline" id="validationCustom01" 
                                value="{{ isset($website->tagline) ? $website->tagline : null}}" type="text">
                            </div>
                            <div class="form-group">
                                <label for="validationCustomtitle"
                                    class="col-form-label pt-0">Domain Name</label>
                                <input class="form-control" name="domain_name" id="validationCustomtitle" 
                                value="{{ isset($website->domain_name) ? $website->domain_name : null}}" type="text">
                            </div>
                            
                            <div class="form-group">
                                <label class="col-form-label">Description</label>
                                <textarea name="description" rows="5" cols="12">{{ isset($website->description) ? $website->description : null}}</textarea>
                            </div>
                            

                        </div>
                    </div>
                </div>
                
                <div class="card">
                    <div class="card-header">
                        <h5>Contact Detail</h5>
                    </div>
                    <div class="card-body">
                        <div class="digital-add needs-validation">
                            
                            <div class="form-group">
                                <label for="validationCustom01" class="col-form-label pt-0 slug-generator">
                                    Primary Mail</label>
                                <input class="form-control slug-generator" name="primary_mail" id="validationCustom01" 
                                value="{{ isset($website->primary_mail) ? $website->primary_mail : null}}" type="text">
                            </div>

                            <div class="form-group">
                                <label for="validationCustom01" class="col-form-label pt-0 slug-generator">
                                    Secondary Mail</label>
                                <input class="form-control slug-generator" name="secondary_mail" id="validationCustom01" 
                                value="{{ isset($website->secondary_mail) ? $website->secondary_mail : null}}" type="text">
                            </div>
                            
                            <div class="form-group">
                                <label for="validationCustom01" class="col-form-label pt-0 slug-generator">
                                    Primary Phone</label>
                                <input class="form-control slug-generator" name="primary_phone" id="validationCustom01" 
                                value="{{ isset($website->primary_phone) ? $website->primary_phone : null}}" type="text">
                            </div>

                            <div class="form-group">
                                <label for="validationCustom01" class="col-form-label pt-0 slug-generator">
                                    Secondary Phone</label>
                                <input class="form-control slug-generator" name="secondary_phone" id="validationCustom01" 
                                value="{{ isset($website->secondary_phone) ? $website->secondary_phone : null}}" type="text">
                            </div>

                            <div class="form-group">
                                <label for="validationCustom01" class="col-form-label pt-0 slug-generator">
                                    Address</label>
                                <textarea class="form-control slug-generator" name="address" id="validationCustom01" 
                                type="text">{{ isset($website->address) ? $website->address : null}}</textarea>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                
                <div class="card">
                    <div class="card-header">
                        <h5>Images / Favicon Icon</h5>
                    </div>
                    <div class="card-body">
                        <div class="digital-add needs-validation">
                            
                            <div class="form-group">
                                <label for="validationCustom02" class="col-form-label">
                                    Main Logo</label>
                                <div>
                                    <input class="mainLogoPreview" name="main_logo" id="validationCustomtitle" type="file" onchange="mainLogoPreview(event)">
                                    <input type="hidden" name="old_main_logo" value="{{ isset($website->main_logo) ? $website->main_logo : null}}">
                                </div>
                                <div>
                                    <img id="main-logo-preview" height="100" src="{{asset('web/media/sm')}}/{{ isset($website->main_logo) ? $website->main_logo : null}}"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="validationCustom02" class="col-form-label">
                                    Light Logo</label>
                                <div>
                                    <input class="LightLogoPreview" name="light_logo" id="validationCustomtitle" type="file" onchange="lightLogoPreview(event)">
                                    <input type="hidden" name="old_light_logo" value="{{ isset($website->main_logo) ? $website->main_logo : null}}">
                                    
                                </div>
                                <div>
                                    <img id="light-logo-preview" height="100" src="{{asset('web/media/sm')}}/{{ isset($website->light_logo) ? $website->light_logo : null}}"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="validationCustom02" class="col-form-label">
                                    Favicon Icon</label>
                                <div>
                                    <input class="faviconLogoPreview" name="favicon" id="validationCustomtitle" type="file" onchange="faviconLogoPreview(event)">
                                    <input type="hidden" name="old_favicon" value="{{ isset($website->favicon) ? $website->favicon : null}}">
                                    
                                </div>
                                <div>
                                    <img id="favicon-preview" height="100" src="{{ isset($website->favicon) ? asset('web/media/sm/' . $website->favicon) : null }}"/>
                                </div>
                            </div>

                           
                            <div class="form-group mb-0 mt-4">
                                <div class="product-buttons">
                                    <button type="submit" class="btn btn-primary">Save {{ isset($page['name']) ? $page['name'] : 'item' }}</button>
                                    <button type="reset" class="btn btn-light btn-reset">Discard</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>
</div>


@endsection