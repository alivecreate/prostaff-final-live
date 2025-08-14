<head>
<meta charset="utf-8">
<title>{{ isset(getWebsiteData()['website_name']) ? getWebsiteData()['website_name'] : null}}</title>
<link href="{{asset('frontend')}}/css/bootstrap.css" rel="stylesheet">
<link href="{{asset('frontend')}}/plugins/revolution/css/settings.css" rel="stylesheet" type="text/css"><!-- REVOLUTION SETTINGS STYLES -->
<link href="{{asset('frontend')}}/plugins/revolution/css/layers.css" rel="stylesheet" type="text/css"><!-- REVOLUTION LAYERS STYLES -->
<link href="{{asset('frontend')}}/plugins/revolution/css/navigation.css" rel="stylesheet" type="text/css"><!-- REVOLUTION NAVIGATION STYLES -->
<link href="{{asset('frontend')}}/css/style.css" rel="stylesheet">
<link href="{{asset('frontend')}}/css/responsive.css" rel="stylesheet"> 

<link id="theme-color-file" href="{{asset('frontend')}}/css/color-themes/default-theme.css" rel="stylesheet">

<link rel="icon" href="{{asset('web/media/sm')}}/{{ isset(getWebsiteData()['favicon']) ? getWebsiteData()['favicon'] : null}}" type="image/x-icon">
<link rel="shortcut icon" href="{{asset('web/media/sm')}}/{{ isset(getWebsiteData()['favicon']) ? getWebsiteData()['favicon'] : null}}" type="image/x-icon">

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="{{asset('frontend')}}/https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="{{asset('frontend')}}/js/respond.js"></script><![endif]-->
</head> 
