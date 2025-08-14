
@extends('admin.layout.main-layout')

@section('custom-script')
    
    
    <script src="{{asset('backend')}}/js/editor/ckeditor/ckeditor.js"></script>
    <script src="{{asset('backend')}}/js/editor/ckeditor/ckeditor.custom.js"></script>

<script>
        $(".category").addClass( "active");
        $(".category .sidebar-submenu").addClass( "menu-open");
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
                        <li class="breadcrumb-item"><a href="{{route('category.index')}}">{{ isset($page['name']) ? $page['name'] : 'item' }}</a></li>
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
        action="{{route('category.update', $category->id)}}" method="POST" enctype="multipart/form-data">
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
                                    Category Name</label>
                                <input class="form-control" name="name" id="validationCustom01" type="text" 
                                    value="@if(old('name')){{old('name')}}@else{{$category->name}}@endif">
                            </div>
                            <div class="form-group">
                                <label for="validationCustomtitle"
                                    class="col-form-label pt-0">Heading</label>
                                <input class="form-control" name="heading" id="validationCustomtitle" type="text"
                                    value="@if(old('heading')){{old('heading')}}@else{{$category->heading}}@endif">

                            </div>
                            <div class="form-group">
                                <label class="col-form-label categories-basic">
                                    Parent Category</label>
                                    <select class="custom-select form-control" name="parent_id">
                                        <option value="">Select Category</option>

                                        @foreach($categories as $parentCategory)
                                        
                                            <option value="{{$parentCategory->id}}"  {{ $parentCategory->id == $category->parent_id ? 'selected' : '' }} >{{$parentCategory->name}}</option>
                                        @endforeach

                                    </select>
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Description</label>
                                <textarea name="description" rows="5" cols="12">@if(old('description')){{old('description')}}@else{{$category->description}}@endif</textarea>
                            </div>
                            <div class="form-group">
                                <label for="validationCustom02" class="col-form-label">
                                    Full Description</label>
                                    <textarea id="editor1" name="full_description" cols="10" rows="6">@if(old('full_description')){{old('full_description')}}@else{{$category->full_description}}@endif</textarea>
                            </div>
                            
                            <div class="form-group">
                                <label for="validationCustom02" class="col-form-label"><span>*</span>
                                    Image</label><br>

                                    <input class="" id="validationCustom2" type="file" accept="image/*"  name="image" onchange="previewImage(event)">
                                    <img id="image-preview" height="100" src="{{asset('web/media/sm')}}/{{ isset($category->image) ? $category->image : null}}"/>

                            </div>

                            <div class="form-group">
                                <label for="validationCustom02" class="col-form-label">
                                    Image Title / Alt</label>
                                <input class="form-control" name="image_title" id="validationCustomtitle" type="text"
                                    value="@if(old('image_title')){{old('image_title')}}@else{{$category->image_title}}@endif">
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
                                <input class="form-control" name="page_title" id="validationCustomtitle" type="text"
                                    value="@if(old('page_title')){{old('page_title')}}@else{{$category->page_title}}@endif">
                            </div>

                            <div class="form-group">
                                <label for="validationCustom05" class="col-form-label pt-0"> Meta
                                    Title (Max 60 Char)</label>
                                <input class="form-control" id="validationCustom05" type="text" name="meta_title"
                                value="@if(old('meta_title')){{old('meta_title')}}@else{{$category->seo->meta_title}}@endif">
                            </div>

                            <div class="form-group">
                                <label class="col-form-label">Meta Description (Max 160 Char)</label>
                                <textarea rows="4" name="meta_description" cols="12">@if(old('meta_description')){{old('meta_description')}}@else{{$category->seo->meta_description}} @endif</textarea>
                            </div>
                            
                            <div class="form-group">
                                <label class="col-form-label">Meta Keywords (Max 5 Keywords: Saprated by ',' comma )</label>
                                <textarea rows="4" cols="12" name="meta_keyword">@if(old('meta_keyword')){{old('meta_keyword')}}@else{{$category->seo->meta_keyword}} @endif</textarea>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-6">
                                    <label  class="" class="" for="search_index">Allow search engines?</label>
                                    <select class="form-control" name="search_index">
                                        <option value="1"

                                        @if($category->seo->search_index == 1)
                                            selected
                                        @endif
                                        
                                        >Yes</option>
                                        <option value="0"
                                        
                                        @if($category->seo->search_index == 0)
                                            selected
                                        @endif           
                                        >No</option>
                                    </select>
                                </div>
                                
                                <div class="col-sm-6">
                                    <label  class="" class="" for="search_follow">Follow links?</label>
                                    <select class="form-control" name="search_follow">
                                        <option value="1"

                                        @if($category->seo->search_follow == 1)
                                            selected
                                        @endif           

                                        >Yes</option>
                                        <option value="0"
                                        
                                        @if($category->seo->search_follow == 0)
                                            selected
                                        @endif          

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
                                            
                                            @if(old('status'))checked
                                            @elseif($category->status == null)checked
                                            @elseif($category->status == 1)checked
                                            @endif
                                            >
                                        Enable
                                    </label>
                                    <label class="d-block" for="edo-ani1">
                                        <input class="radio_animated" id="edo-ani1" type="radio"
                                            name="status" value="0"
                                            
                                            @if(old('status'))checked
                                            @elseif($category->status == 0)checked
                                            @endif
                                            >
                                        Disable
                                    </label>
                                </div>
                            </div>

                            
                            <div class="form-group">
                                <label for="validationCustom02" class="col-form-label">
                                    Url Slug</label>
                                <input  class="form-control url-slug" name="slug" id="validationCustomtitle" type="text"
                                    value="@if(old('slug')){{old('slug')}}@else{{$category->slug}}@endif">

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