
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
        $(".project").addClass( "active");
        $(".project .sidebar-submenu").addClass( "menu-open");
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
                        <li class="breadcrumb-item"><a href="{{route('project.index')}}">{{ isset($page['name']) ? $page['name'] : 'item' }}</a></li>
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
        action="{{route('project.update', $project->id)}}" method="POST" enctype="multipart/form-data">
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
                                    Name</label>
                                <input class="form-control slug-generator" name="name" id="validationCustom01" 
                                    type="text"
                                    value="{{ old('name', optional($project)->name) }}">
                            </div>
                            
                            <div class="form-group">
                                <label for="validationCustom02" class="col-form-label">
                                    Description</label>
                                    <textarea id="editor1" height="200px" name="description" cols="14" rows="10">{{ old('description', $project->description) }}</textarea>
                            </div>
                     
                           
                            <div class="form-group">
                                <label for="validationCustom02" class="col-form-label"><span>*</span>
                                    feature Image</label><br>
                                    
                                    <input class="" multiple  type="file" accept="image/*"  
                                        id="images" name="image" onchange="previewImages(event)"  value="{{ old('images[]') }}">
                                    <div id="images-preview"><img
                                    src="{{asset('web')}}/media/md/{{$project->image}}" width="200" alt="" /></div>

                                    
                            </div>

                           
                           <div class="form-group">
                               <label for="validationCustom02" class="col-form-label"><span>*</span>
                               multiple Image</label><br>

                                   <input class="" multiple  type="file" accept="image/*"  
                                       id="images" name="images[]" onchange="previewImages(event)"  value="{{ old('images[]') }}">
                                   <div id="images-preview"></div>
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
                                value="{{ old('page_title', optional($project)->page_title) }}">
                            </div>

                            <div class="form-group">
                                <label for="validationCustom05" class="col-form-label pt-0"> Meta
                                    Title (Max 60 Char)</label>
                                <input class="form-control" id="validationCustom05" type="text" name="meta_title"
                                
                                value="{{ old('meta_title', optional($project->seo)->meta_title) }}">
                            </div>

                            <div class="form-group">
                                <label class="col-form-label">Meta Description (Max 160 Char)</label>
                                <textarea rows="4" name="meta_description" cols="12">{{ old('meta_description', optional($project->seo)->meta_description) }}</textarea>
                            </div>
                            
                            <div class="form-group">
                                <label class="col-form-label">Meta Keywords (Max 5 Keywords: Saprated by ',' comma )</label>
                                <textarea rows="4" cols="12" name="meta_keyword">{{ old('meta_keyword', optional($project->seo)->meta_keyword) }}</textarea>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-6">
                                    <label  class="" class="" for="search_index">Allow search engines?</label>
                                    
                                    <select class="form-control" name="search_index">
                                        <option value="1"
                                            @if(old('search_index', optional($project->seo)->search_index) == 1) selected @endif
                                        >Yes</option>

                                        <option value="0"
                                            @if(old('search_index', optional($project->seo)->search_index) == 0) selected @endif
                                        >No</option>
                                    </select>
                                </div>
                                
                                <div class="col-sm-6">
                                    <label  class="" class="" for="search_follow">Follow links?</label>
                                    <select class="form-control" name="search_follow">
                                        <option value="1"
                                        
                                            @if(old('search_follow', optional($project->seo)->search_follow) == 1) selected @endif         

                                        >Yes</option>
                                        <option value="0"
                                       
                                            @if(old('search_follow', optional($project->seo)->search_follow) == 0) selected @endif 

                                        >No</option>
                                    </select>
                                </div>

                            </div>
                                
                            <div class="form-group">
                                <label class="col-form-label">Status</label>
                                <div class="m-checkbox-inline mb-0 custom-radio-ml d-flex radio-animated">
                                    <label class="d-block" for="edo-ani">
                                        <input class="radio_animated" id="edo-ani" type="radio"
                                            name="status" checked value="active"
                                             @if(old('status', optional($project)->status) == 'active') checked @endif 
                                            >
                                        Enable
                                    </label>
                                    <label class="d-block" for="edo-ani1">
                                        <input class="radio_animated" id="edo-ani1" type="radio"
                                            name="status" value="deactive"
                                                @if(old('status', optional($project)->status) == 'deactive') checked @endif                  
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
                                    value="{{ old('slug', optional($project)->slug) }}"
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

    <div class="row mt-4">
                                    @foreach($project->images as $oldImage)
                                        <div class="col-3 my-2">
                                            <img src="{{ asset('web/media/sm/'.$oldImage->image) }}" width="100" height="100" alt="Image">
                                            <form action="{{route('deleteServiceImage', $oldImage->image)}}" method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" onclick="return confirm('Are you sure you want to delete this image?')">Delete</button>
                                            </form>
                                    </div>


                                    @endforeach
                                    </div>


@endsection