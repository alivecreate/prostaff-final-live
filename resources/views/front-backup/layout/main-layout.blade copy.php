<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Agriness Trading">
    <meta name="keywords" content="Agriness Trading">
    <meta name="author" content="Agriness Trading">
    @yield('page-title')

   @include('front.ext.head')
   
   {!! isset(getCustomCode()['css']) ? html_entity_decode(getCustomCode()['css']) : null !!}

    

</head>

{{-- <div id="loadingIndicator" style="display: block;
height: auto;
position: fixed;
z-index: 999;
background: white;
width: 100%;
height: 400px;
overflow: hidden;
max-height: 400px;
text-align:center">
    <!-- Your loading indicator HTML goes here -->

  @if(isset(getWebsiteData()['main_logo']))
        <img src="{{asset('web/media/sm')}}/{{ isset(getWebsiteData()['main_logo']) ? getWebsiteData()['main_logo'] : null}}"
        class="img-fluid blur-up lazyload" alt="">
    @endif 
    
    <h1>Loading...</h1>
</div> --}}

<body class="theme-color-30 mulish-font" >

    {{-- @include('front.widget.loader-structure') --}}

    @include('front.ext.header')

    @yield('page-title')
    @yield('content')
    

    @include('front.ext.footer')

    <div class="tap-top">
        <div>
            <i class="fa fa-angle-double-up"></i>
        </div>
    </div>

    {{-- Widget Modal --}}
    @include('front.widget.popup-modal-form')
    {{-- End Modal --}}
    @include('front.ext.script')

    
    {!! isset(getCustomCode()['js']) ? html_entity_decode(getCustomCode()['js']) : null !!}
    

<style>
    #loadingIndicator {
        display: block;
        height: auto;
        position: fixed;
        z-index: 999;
        background: white;
        width: 100%;
        height: 400px;
        overflow: hidden;
        max-height: 400px;
    }
</style>


<script>
    $('#loadingIndicator').show();
    $(document).ready(function() {
        // Show loading indicator
        // $('body').hide();
        // alert('loaded');
    
        // Hide loading indicator when document is ready
        $(window).on('load', function() {
            // $('body').show();
            $('#loadingIndicator').hide();
        });
    });
    </script>
    
         

</body>
</html>
