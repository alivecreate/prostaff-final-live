
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description"
    content="{{ isset(getWebsiteData()['description']) ? getWebsiteData()['description'] : null}}">
<meta name="keywords"
    content="{{ isset(getWebsiteData()['website_name']) ? getWebsiteData()['website_name'] : null}}">
<meta name="author" content="Alivecreate Web Solutions">
<link rel="icon" href="{{asset('web/media/sm')}}/{{ isset(getWebsiteData()['favicon']) ? getWebsiteData()['favicon'] : null}}" type="image/x-icon">
<link rel="shortcut icon" href="{{asset('web/media/sm')}}/{{ isset(getWebsiteData()['favicon']) ? getWebsiteData()['favicon'] : null}}" type="image/x-icon">
<title>{{ isset(getWebsiteData()['website_name']) ? getWebsiteData()['website_name'] : null}}</title>

<!-- Google font-->
<link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,500;1,600;1,700;1,800;1,900&display=swap">

<link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap">


<!-- Font Awesome-->
<link rel="stylesheet" type="text/css" href="{{asset('backend')}}/css/vendors/font-awesome.css">

<!-- Flag icon-->
<link rel="stylesheet" type="text/css" href="{{asset('backend')}}/css/vendors/flag-icon.css">

<!-- ico-font-->
<link rel="stylesheet" type="text/css" href="{{asset('backend')}}/css/vendors/icofont.css">

<!-- Prism css-->
<link rel="stylesheet" type="text/css" href="{{asset('backend')}}/css/vendors/prism.css">

<!-- Chartist css -->
<link rel="stylesheet" type="text/css" href="{{asset('backend')}}/css/vendors/chartist.css">

<!-- Bootstrap css-->
<link rel="stylesheet" type="text/css" href="{{asset('backend')}}/css/vendors/bootstrap.css">

    <!-- Dropzone css-->
<link rel="stylesheet" type="text/css" href="{{asset('backend')}}/css/vendors/dropzone.css">

<!-- App css-->
<link rel="stylesheet" type="text/css" href="{{asset('backend')}}/css/style.css">
<link rel="stylesheet" type="text/css" href="{{asset('backend')}}/css/custom.css">


@yield('custom-style')
