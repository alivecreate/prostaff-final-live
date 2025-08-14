<!doctype html>
<html class="no-js" lang="en">


<head> 
       @include('front.ext.head')
</head>

    <body data-mobile-nav-style="classic">
      
       @include('front.ext.header')

         @yield('content')
        
        
       @include('front.ext.footer')

        <div class="scroll-progress d-none d-xxl-block">
          <a href="#" class="scroll-top" aria-label="scroll">
            <span class="scroll-text">Scroll</span><span class="scroll-line"><span class="scroll-point"></span></span>
          </a>
        </div>


       @include('front.ext.script')

    </body>
</html>
