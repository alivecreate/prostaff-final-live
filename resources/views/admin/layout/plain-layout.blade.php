<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.ext.head')

    @vite('resources/js/app.js')

</head>

<body>

    <!-- page-wrapper Start-->
    <div class="page-wrapper">
        <div class="page-body-wrapper">

            @yield('content')

        </div>
        
        @include('admin.ext.footer')

    </div>

@include('admin.ext.script')
@include('admin.widget.notify')

@yield('notify')

</body>

</html>