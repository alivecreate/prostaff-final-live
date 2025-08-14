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
                        <h3>Add YouTube Link
                            <small>Admin Panel YouTube Link</small>
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
                        <li class="breadcrumb-item"><a href="#">YouTube Link</a></li>
                        <li class="breadcrumb-item active">Create</li>
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
                        <form class="needs-validation data-form" action="{{ route('admin.youtube.store') }}" method="POST">
                            @csrf

                            <div class="form-group row">
                                <label for="title" class="col-xl-3 col-md-4">Title</label>
                                <div class="col-xl-8 col-md-7">
                                    <input class="form-control" id="title" type="text" name="title" value="{{ old('title') }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="link" class="col-xl-3 col-md-4">YouTube Link</label>
                                <div class="col-xl-8 col-md-7">
                                    <input class="form-control" id="link" type="url" name="link" required placeholder="https://www.youtube.com/watch?v=xyz"
                                           value="{{ old('link') }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary btn-submit">
                                        <i class="fa fa-save"></i> Save YouTube Link
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div> <!-- tab-pane -->
                </div> <!-- tab-content -->
            </div> <!-- card-body -->
        </div> <!-- card -->
    </div> <!-- container-fluid -->
</div> <!-- page-body -->

@endsection
