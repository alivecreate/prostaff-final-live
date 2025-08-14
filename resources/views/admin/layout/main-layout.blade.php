<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.ext.head')

    @viteReactRefresh
    @vite('resources/js/app.js')

</head>

<body>

    <!-- page-wrapper Start-->
    <div class="page-wrapper">
        @include('admin.ext.header')

        <!-- Page Body Start-->
        <div class="page-body-wrapper">
            @include('admin.ext.sidebar')

            @include('admin.ext.right-sidebar')

            @yield('content')

        </div>
        
        @include('admin.ext.footer')

    </div>

@include('admin.ext.script')
@include('admin.widget.notify')

@yield('notify')


</body>

</html>