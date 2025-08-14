<!DOCTYPE html>
<html>

@include('front.ext.head')


<body>

<div class="page-wrapper">
    <div class="preloader"></div>
    @include('front.ext.header')

    
    @yield('content')
    
    
    @include('front.ext.footer')

    
</div>

<div class="scroll-to-top scroll-to-target" data-target="html"><span class="icon fa fa-angle-double-up"></span></div>



@include('front.ext.script')


</body>
</html>