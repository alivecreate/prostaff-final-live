

<script src="{{asset('frontend')}}/js/jquery.js"></script> 
<!--Revolution Slider-->
<script src="{{asset('frontend')}}/plugins/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script src="{{asset('frontend')}}/plugins/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="{{asset('frontend')}}/plugins/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="{{asset('frontend')}}/plugins/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="{{asset('frontend')}}/plugins/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="{{asset('frontend')}}/plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="{{asset('frontend')}}/plugins/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script src="{{asset('frontend')}}/plugins/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="{{asset('frontend')}}/plugins/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="{{asset('frontend')}}/plugins/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="{{asset('frontend')}}/plugins/revolution/js/extensions/revolution.extension.video.min.js"></script>
<script src="{{asset('frontend')}}/js/main-slider-script.js"></script>

<script src="{{asset('frontend')}}/js/bootstrap.min.js"></script>
<script src="{{asset('frontend')}}/js/jquery.fancybox.js"></script>

<script src="{{asset('frontend')}}/js/owl.js"></script>
<script src="{{asset('frontend')}}/js/wow.js"></script>
<script src="{{asset('frontend')}}/js/appear.js"></script>
<script src="{{asset('frontend')}}/js/script.js"></script>

<!-- BS Modal -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

<script>
    $(document).ready(function(){
        $('.sponsors-carousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            responsive: {
                0: { items: 2 },
                600: { items: 4 },
                1000: { items: 4 },
                1600: { items: 4 }
            }
        });
    });
</script>




@yield('custom-js')
