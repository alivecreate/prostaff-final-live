@extends('admin.layout.main-layout')

@section('custom-script')
<script>
    $(".youtube-link").addClass("active");
    $(".youtube-link .sidebar-submenu").addClass("menu-open");
</script>
@endsection

@section('content')

<div class="page-body">
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <div class="page-header-left">
                        <h3>Edit YouTube Link
                            <small>Update video information</small>
                        </h3>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ol class="breadcrumb pull-right">
                        <li class="breadcrumb-item">
                            <a href="{{ route('admin.index') }}">
                                <i data-feather="home"></i>
                            </a>
                        </li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.youtube.index') }}">YouTube Links</a></li>
                        <li class="breadcrumb-item active">Edit</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="card tab2-card">
            <div class="card-body">
                <form class="needs-validation data-form" method="POST" action="{{ route('admin.youtube.update', $youtubeLink->id) }}">
                    @csrf
                    @method('PUT')

                    <div class="form-group row">
                        <label class="col-xl-3 col-md-4">Title</label>
                        <div class="col-xl-8 col-md-7">
                            <input class="form-control" type="text" name="title" value="{{ old('title', $youtubeLink->title) }}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-xl-3 col-md-4">YouTube Video URL</label>
                        <div class="col-xl-8 col-md-7">
                            <input class="form-control" type="url" name="link" required placeholder="https://www.youtube.com/watch?v=xyz" value="{{ old('link', $youtubeLink->link) }}">
                        </div>
                    </div>

                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-primary btn-submit">
                            <i class="fa fa-save"></i> Update YouTube Link
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
