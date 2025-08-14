
@extends('admin.layout.main-layout')

@section('custom-style')
    <style>
        .ck-editor .ck-editor__main .ck-editor__editable{
            height: 280px;
        }
    </style>

@endsection

@section('custom-script')
    
    <script src="{{asset('backend')}}/js/editor/ckeditor/ckeditor.js"></script>
    <script src="{{asset('backend')}}/js/editor/ckeditor/ckeditor.custom.js"></script>

<script>
        $(".product").addClass( "active");
        $(".product .sidebar-submenu").addClass( "menu-open");
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
                            <small>Create new {{ isset($page['name']) ? $page['name'] : 'item' }}</small>
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
                        <li class="breadcrumb-item"><a href="{{route('product.index')}}">{{ isset($page['name']) ? $page['name'] : 'item' }}</a></li>
                        <li class="breadcrumb-item active">Create {{ isset($page['name']) ? $page['name'] : 'item' }}</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    
    
@if ($errors->any())

    @foreach ($errors->all() as $error)
    <div class="alert alert-danger">
        <ul>
                <li>{{ $error }}</li>
        </ul>
    </div>
    @endforeach
@endif

    <form class="needs-validation data-form" 
        action="{{route('product.update', $product->id)}}" method="POST" enctype="multipart/form-data">
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
                                <label for="validationCustom01" class="col-form-label pt-0 slug-generator"><span>*</span>
                                    Product Name</label>
                                <input class="form-control slug-generator" name="name" id="validationCustom01" 
                                    type="text"
                                    value="{{ old('name', optional($product)->name) }}">
                            </div>
                            
                            <div class="form-group">
                                <label class="col-form-label categories-basic"><span>*</span>
                                    Category</label>
                                    <select class="custom-select form-control" name="category_id">
                                        <option value="">Select Category</option>

                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}"
                                                @if(old('category_id', optional($product)->category_id) == $category->id) selected @endif
                                            >{{$category->name}}</option>
                                        @endforeach


                                    </select>
                            </div>
                            
                            <div class="form-group">
                                <label for="validationCustom02" class="col-form-label">
                                    Description</label>
                                    <textarea id="editor1" height="200px" name="description" cols="14" rows="10">{{ old('description', $product->description) }}</textarea>
                            </div>
                            
                            <div class="row">
                                <div class="form-group col">
                                    <label for="validationCustom01" class="col-form-label pt-0">
                                        Price</label>
                                    <input class="form-control" name="price" id="validationCustom01" 
                                        value="{{ old('price', optional($product)->price) }}"
                                        type="number" step="0.01">
                                </div>
                                <div class="form-group col">
                                    <label for="validationCustom01" class="col-form-label pt-0">
                                        Discounted Price</label>
                                    <input class="form-control" name="discounted_price" id="validationCustom01"
                                        value="{{ old('discounted_price', optional($product)->discounted_price) }}" 
                                        type="number">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="validationCustom02" class="col-form-label"><span>*</span>
                                    Image</label><br>

                                    <!-- <input class="" id="validationCustom2" type="file" accept="image/*"  name="image" onchange="previewImage(event)"> -->
                                   
                                    <input class="" multiple  type="file" accept="image/*"  
                                        id="images" name="images[]" onchange="previewImages(event)"  value="{{ old('images[]') }}">
                                   
                                    <img id="image-preview" height="100" src="{{asset('web/media/sm')}}/{{ isset($product->image) ? $product->image : null}}"/>

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
                                value="{{ old('page_title', optional($product)->page_title) }}">
                            </div>

                            <div class="form-group">
                                <label for="validationCustom05" class="col-form-label pt-0"> Meta
                                    Title (Max 60 Char)</label>
                                <input class="form-control" id="validationCustom05" type="text" name="meta_title"
                                
                                value="{{ old('meta_title', optional($product->seo)->meta_title) }}">
                            </div>

                            <div class="form-group">
                                <label class="col-form-label">Meta Description (Max 160 Char)</label>
                                <textarea rows="4" name="meta_description" cols="12">{{ old('meta_description', optional($product->seo)->meta_description) }}</textarea>
                            </div>
                            
                            <div class="form-group">
                                <label class="col-form-label">Meta Keywords (Max 5 Keywords: Saprated by ',' comma )</label>
                                <textarea rows="4" cols="12" name="meta_keyword">{{ old('meta_keyword', optional($product->seo)->meta_keyword) }}</textarea>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-6">
                                    <label  class="" class="" for="search_index">Allow search engines?</label>
                                    
                                    <select class="form-control" name="search_index">
                                        <option value="1"
                                            @if(old('search_index', optional($product->seo)->search_index) == 1) selected @endif
                                        >Yes</option>

                                        <option value="0"
                                            @if(old('search_index', optional($product->seo)->search_index) == 0) selected @endif
                                        >No</option>
                                    </select>
                                </div>
                                
                                <div class="col-sm-6">
                                    <label  class="" class="" for="search_follow">Follow links?</label>
                                    <select class="form-control" name="search_follow">
                                        <option value="1"
                                        
                                            @if(old('search_follow', optional($product->seo)->search_follow) == 1) selected @endif         

                                        >Yes</option>
                                        <option value="0"
                                       
                                            @if(old('search_follow', optional($product->seo)->search_follow) == 0) selected @endif 

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
                                             @if(old('status', optional($product)->status) == 1) checked @endif 
                                            >
                                        Enable
                                    </label>
                                    <label class="d-block" for="edo-ani1">
                                        <input class="radio_animated" id="edo-ani1" type="radio"
                                            name="status" value="0"
                                                @if(old('status', optional($product)->status) == 0) checked @endif                  
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
                                    value="{{ old('slug', optional($product)->slug) }}"
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

            <div id="image-uploader"></div>
            <ProductDetail productId={productId} />
        </div>
    </div>
    </form>

@endsection