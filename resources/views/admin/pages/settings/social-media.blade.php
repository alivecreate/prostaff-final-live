
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

    <form class="needs-validation data-form" action="{{ route('social-media.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
    <div class="container-fluid">
        <div class="row product-adding">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <div class="digital-add needs-validation">
                         
                            
                      <h5 class="text-danger text-center">Social Button</h5>
                        <table class="table">
                          <tr>
                            <td width="30%"><label class="strong">Facebook</label></td>
                            <td><input type="url" class="form-control" id="facebook"  name="facebook" value="@if(old('facebook')){{old('facebook')}}@elseif(isset($socialMedia->facebook)){{$socialMedia->facebook}}@endif" placeholder="Facebook Profile"></td>
                          </tr>
                          <tr>
                            <td><label class="strong">Instagram</label></td>
                            <td><input type="text" class="form-control" id="instagram"  name="instagram" value="@if(old('instagram')){{old('instagram')}}@elseif(isset($socialMedia->instagram)){{$socialMedia->instagram}}@endif" placeholder="Instagram Profile"></td>
                          </tr>
                          <tr>
                            <td><label class="strong">Twitter</label></td>
                            <td><input type="text" class="form-control" id="twitter"  name="twitter" value="@if(old('twitter')){{old('twitter')}}@elseif(isset($socialMedia->facebook)){{$socialMedia->twitter}}@endif" placeholder="Twitter Profile"></td>
                          </tr>
                          <tr>
                            <td><label class="strong">Youtube</label></td>
                            <td><input type="text" class="form-control" id="youtube"  name="youtube" value="@if(old('youtube')){{old('youtube')}}@elseif(isset($socialMedia->youtube)){{$socialMedia->youtube}}@endif" placeholder="Youtube Channel"></td>
                          </tr>

                          <tr>
                            <td><label class="strong">Vimeo</label></td>
                            <td><input type="text" class="form-control" id="vimeo"  name="vimeo" value="@if(old('vimeo')){{old('vimeo')}}@elseif(isset($socialMedia->vimeo)){{$socialMedia->vimeo}}@endif" placeholder="Vimeo Channel"></td>
                          </tr>

                          <tr>
                            <td><label class="strong">LinkedIn</label></td>
                            <td><input type="text" class="form-control" id="linkedin"  name="linkedin" value="@if(old('linkedin')){{old('linkedin')}}@elseif(isset($socialMedia->linkedin)){{$socialMedia->linkedin}}@endif" placeholder="LinkedIn Profile"></td>
                          </tr>
                          <tr>
                            <td><label class="strong">Pinterest</label></td>
                            <td><input type="text" class="form-control" id="pinterest"  name="pinterest" value="@if(old('pinterest')){{old('pinterest')}}@elseif(isset($socialMedia->pinterest)){{$socialMedia->pinterest}}@endif" placeholder="pinterest Profile"></td>
                          </tr>
                          <tr>
                            <td><label class="strong">Skype</label></td>
                            <td><input type="text" class="form-control" id="skype"  name="skype" value="@if(old('skype')){{old('skype')}}@elseif(isset($socialMedia->skype)){{$socialMedia->skype}}@endif" placeholder="Skype Profile"></td>
                          </tr>

                          
                          <tr>
                            <td><label class="strong">Whatsapp No</label></td>
                            <td><input type="text" class="form-control" id="whatsapp"  name="whatsapp" value="@if(old('whatsapp')){{old('whatsapp')}}@elseif(isset($socialMedia->whatsapp)){{$socialMedia->whatsapp}}@endif" placeholder="Whatsapp Number"></td>
                          </tr>
                          
                          <tr>
                            <td><label class="strong">Whatsapp Group</label></td>
                            <td><input type="text" class="form-control" id="whatsapp_group"  name="whatsapp_group" value="@if(old('whatsapp_group')){{old('whatsapp_group')}}@elseif(isset($socialMedia->whatsapp_group)){{$socialMedia->whatsapp_group}}@endif" placeholder="Whatsapp Group Link"></td>
                          </tr>


                        <tr>
                          <td colspan="2">
                      <h5 class="text-danger text-center">Embed Code</h5></td>
                        </tr>
                          <tr>
                            <td><label class="strong">Youtube Embed</label></td>
                            <td><textarea type="text" class="form-control" id="twitter"  name="youtube_embed" 
                              placeholder="Youtube Embed Code">@if(old('youtube_embed')){{old('youtube_embed')}}@elseif(isset($socialMedia->youtube_embed)){{$socialMedia->youtube_embed}} @endif</textarea></td>
                          </tr>
                          <tr>
                            <td><label class="strong">Google Map Embed</label></td>
                            <td><textarea type="text" class="form-control" id="map_embed"  name="map_embed" 
                              placeholder="Google Map Embed">@if(old('map_embed')){{old('map_embed')}}@elseif(isset($socialMedia->map_embed)){{$socialMedia->map_embed}} @endif</textarea></td>
                          </tr>
                          
                          <tr>
                            <td><label class="strong">Facebook Embed</label></td>
                            <td><textarea type="text" class="form-control" id="facebook_embed"  name="facebook_embed" 
                            placeholder="Signal Group Link">@if(old('facebook_embed')){{old('facebook_embed')}}@elseif(isset($socialMedia->facebook_embed)){{$socialMedia->facebook_embed}} @endif</textarea></td>
                          </tr>
                          
                          <tr>
                            <td></td>
                            <td><input type="submit" class="btn btn-success just" id="btn-social-media"  name="btn-social-media" 
                            value="Update Social Media"></td>
                          </tr>

                        </table>
                            

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>
</div>


@endsection