
@extends('admin.layout.main-layout')

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
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <div class="page-header-left">
                        <h3>Edit {{ isset($page['name']) ? $page['name'] : 'item' }}
                            <small> {{ isset($page['name']) ? $page['name'] : 'item' }}</small>
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
                        <li class="breadcrumb-item"><a href="{{route('blog.index')}}">{{ isset($page['name']) ? $page['name'] : 'item' }}</a></li>
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
        action="{{route('blog.update', $blog->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

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
                                <label for="validationCustom01" class="col-form-label pt-0"><span>*</span>
                                    Blog Title</label>
                                <input class="form-control" name="title" id="validationCustom01" type="text" 
                                    value="{{ old('title', optional($blog)->title) }}">
                            </div>
                            <div class="form-group">
                                <label for="validationCustomtitle"
                                    class="col-form-label pt-0">Heading</label>
                                <input class="form-control" name="heading" id="validationCustomtitle" type="text"
                                    value="{{ old('heading', optional($blog)->heading) }}">

                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Description</label>
                                <textarea id="editor1"  name="description" rows="5" cols="12">{{ old('description', optional($blog)->description) }}</textarea>
                            </div>
                            
                            <div class="form-group">
                                <label for="validationCustom02" class="col-form-label"><span>*</span>
                                    Image</label><br>

                                    <input class="" id="validationCustom2" type="file" accept="image/*"  name="image" onchange="previewImage(event)">
                                    <img id="image-preview" height="100" src="{{asset('web/media/sm')}}/{{ isset($blog->image) ? $blog->image : null}}"/>

                            </div>

                            <div class="form-group">
                                <label for="validationCustom02" class="col-form-label">
                                    Image Title / Alt</label>
                                <input class="form-control" name="image_title" id="validationCustomtitle" type="text"
                                    value="{{ old('image_title', optional($blog)->image_title) }}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Meta Data / SEO</h5>
                    </div>
                    <div class="card-body">
                        <div class="digital-add needs-validation">
                            
                            <div class="form-group">
                                <label for="validationCustom02" class="col-form-label">
                                    Page Title (Max 60 Char)</label> <br>
                                <input class="form-control" name="page_title" id="validationCustomtitle"
                                type="text"
                                value="{{ old('page_title', optional($blog)->page_title) }}">
                            </div>

                            <div class="form-group">
                                <label for="validationCustom05" class="col-form-label pt-0"> Meta
                                    Title (Max 60 Char)</label>
                                <input class="form-control" id="validationCustom05" type="text" name="meta_title"
                                
                                value="{{ old('meta_title', optional($blog->seo)->meta_title) }}">
                            </div>

                            <div class="form-group">
                                <label class="col-form-label">Meta Description (Max 160 Char)</label>
                                <textarea rows="4" name="meta_description" cols="12">{{ old('meta_description', optional($blog->seo)->meta_description) }}</textarea>
                            </div>
                            
                            <div class="form-group">
                                <label class="col-form-label">Meta Keywords (Max 5 Keywords: Saprated by ',' comma )</label>
                                <textarea rows="4" cols="12" name="meta_keyword">{{ old('meta_keyword', optional($blog->seo)->meta_keyword) }}</textarea>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-6">
                                    <label  class="" class="" for="search_index">Allow search engines?</label>
                                    
                                    <select class="form-control" name="search_index">
                                        <option value="1"
                                            @if(old('search_index', optional($blog->seo)->search_index) == 1) selected @endif
                                        >Yes</option>

                                        <option value="0"
                                            @if(old('search_index', optional($blog->seo)->search_index) == 0) selected @endif
                                        >No</option>
                                    </select>
                                </div>
                                
                                <div class="col-sm-6">
                                    <label  class="" class="" for="search_follow">Follow links?</label>
                                    <select class="form-control" name="search_follow">
                                        <option value="1"
                                        
                                            @if(old('search_follow', optional($blog->seo)->search_follow) == 1) selected @endif         

                                        >Yes</option>
                                        <option value="0"
                                       
                                            @if(old('search_follow', optional($blog->seo)->search_follow) == 0) selected @endif 

                                        >No</option>
                                    </select>
                                </div>

                            </div>
                                
                            <div class="form-group">
                                <label class="col-form-label">Status</label>
                                <div class="m-checkbox-inline mb-0 custom-radio-ml d-flex radio-animated">
                                    <label class="d-block" for="edo-ani">
                                        <input class="radio_animated" id="edo-ani" type="radio"
                                            name="status" checked value="1"
                                             @if(old('status', optional($blog)->status) == 1) checked @endif 
                                            >
                                        Enable
                                    </label>
                                    <label class="d-block" for="edo-ani1">
                                        <input class="radio_animated" id="edo-ani1" type="radio"
                                            name="status" value="0"
                                                @if(old('status', optional($blog)->status) == 0) checked @endif                  
                                            >
                                        Disable
                                    </label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="validationCustom02" class="col-form-label">
                                    Url Slug</label>
                                <input class="form-control url-slug" name="slug" id="validationCustomtitle" 
                                    type="text"
                                    value="{{ old('slug', optional($blog)->slug) }}"
                                    >
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