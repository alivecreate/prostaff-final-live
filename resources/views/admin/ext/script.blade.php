
    <!-- latest jquery-->
    <script src="{{asset('backend')}}/js/jquery-3.3.1.min.js"></script>

    <!-- Bootstrap js-->
    <script src="{{asset('backend')}}/js/bootstrap.bundle.min.js"></script>

    <!-- fea`r icon js-->
    <script src="{{asset('backend')}}/js/icons/feather-icon/feather.min.js"></script>
    <script src="{{asset('backend')}}/js/icons/feather-icon/feather-icon.js"></script>

    <!-- Sidebar jquery-->
    <script src="{{asset('backend')}}/js/sidebar-menu.js"></script>
    
    <!-- lazyload js-->
    <script src="{{asset('backend')}}/js/lazysizes.min.js"></script>

    <!--copycode js-->
    <script src="{{asset('backend')}}/js/prism/prism.min.js"></script>
    <script src="{{asset('backend')}}/js/clipboard/clipboard.min.js"></script>
    <script src="{{asset('backend')}}/js/custom-card/custom-card.js"></script>

    <!--counter js-->
    <script src="{{asset('backend')}}/js/counter/jquery.waypoints.min.js"></script>
    <script src="{{asset('backend')}}/js/counter/jquery.counterup.min.js"></script>
    <script src="{{asset('backend')}}/js/counter/counter-custom.js"></script>


    @yield('custom-script')
    <!--Customizer admin-->
    <script src="{{asset('backend')}}/js/admin-customizer.js"></script>


    <!--right sidebar js-->
    <script src="{{asset('backend')}}/js/chat-menu.js"></script>

    <!--height equal js-->
    <script src="{{asset('backend')}}/js/height-equal.js"></script>

    <!-- lazyload js-->
    <script src="{{asset('backend')}}/js/lazysizes.min.js"></script>


    <!--script admin-->
    <script src="{{asset('backend')}}/js/admin-script.js"></script> 

    <script src="{{asset('frontend')}}/js/bootstrap-notify.min.js"></script>

    <script>

function successNotify(title, message = ''){
        $.notify({
        // options
        title: `<strong>${title}</strong>`,
        message: `</br>${message}`,
        icon: 'glyphicon glyphicon-ok',
    },{
        // settings
        element: 'body',
        type: "success",
        showProgressbar: false,
        placement: {
            from: "top",
            align: "right"
        },
        offset: 20,
        spacing: 10,
        z_index: 1031,
        delay: 3300,
        timer: 1000,
        url_target: '_blank',
        mouse_over: null,
        animate: {
            enter: 'animated fadeInDown',
            exit: 'animated fadeOutRight'
        },
        onShow: null,
        onShown: null,
        onClose: null,
        onClosed: null,
        icon_type: 'class',
    });
   }

   
   function dangerNotify(title, message = ''){
        $.notify({
        // options
        title: `<strong>${title}</strong>`,
        message: `</br>${message}`,
        icon: 'glyphicon glyphicon-ok',
    },{
        // settings
        element: 'body',
        type: "danger",
        showProgressbar: false,
        placement: {
            from: "top",
            align: "right"
        },
        offset: 20,
        spacing: 10,
        z_index: 1031,
        delay: 3300,
        timer: 1000,
        url_target: '_blank',
        mouse_over: null,
        animate: {
            enter: 'animated fadeInDown',
            exit: 'animated fadeOutRight'
        },
        onShow: null,
        onShown: null,
        onClose: null,
        onClosed: null,
        icon_type: 'class',
    });
   }

   
   </script>

    <script>

        $('.added-notification').addClass("show");
    </script>
