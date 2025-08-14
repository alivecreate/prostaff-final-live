<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.ext.head')

    <script type="module">
        import RefreshRuntime from "http://localhost:5173/@react-refresh"
        RefreshRuntime.injectIntoGlobalHook(window)
        window.$RefreshReg$ = () => {}
        window.$RefreshSig$ = () => (type) => type
        window.__vite_plugin_react_preamble_installed__ = true
        </script>

    @vite('resources/js/app.js')

</head>

<body>

    <div id="example"></div>
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

</body>

</html>