<!-- latest jquery-->
<script src="{{asset('frontend')}}/js/jquery-3.3.1.min.js"></script>

<!-- portfolio js -->
<script src="{{asset('frontend')}}/js/isotope.min.js"></script>
<script src="{{asset('frontend')}}/js/main.js"></script>

<!-- menu js-->
<script src="{{asset('frontend')}}/js/menu.js"></script>
<script src="{{asset('frontend')}}/js/sticky-menu.js"></script>

<!-- feather icon js-->
<script src="{{asset('frontend')}}/js/feather.min.js"></script>

<!-- lazyload js-->
<script src="{{asset('frontend')}}/js/lazysizes.min.js"></script>

<!-- slick js-->
<script src="{{asset('frontend')}}/js/slick.js"></script>
<script src="{{asset('frontend')}}/js/slick-animation.min.js"></script>

<!-- Bootstrap js-->
<script src="{{asset('frontend')}}/js/bootstrap.bundle.min.js"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- Bootstrap Notification js-->
<script src="{{asset('frontend')}}/js/bootstrap-notify.min.js"></script>

<!-- Theme js-->
<script src="{{asset('frontend')}}/js/script.js"></script>
<script src="{{asset('frontend')}}/js/custom-slick-animated.js"></script>

@yield('additional-js')


<script>
    $(document).ready(function(){
        // Smooth scrolling when anchor links are clicked
        $('a[href^="#"]').on('click', function(event) {
            var target = $(this.getAttribute('href'));
            if( target.length ) {
                event.preventDefault();
                $('html, body').stop().animate({
                    scrollTop: target.offset().top
                }, 1000);
            }
        });

        // Initialize Scrollspy
        $('body').scrollspy({ target: '#navbar' });
    });
</script>