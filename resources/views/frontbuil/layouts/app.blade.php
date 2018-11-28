
<!DOCTYPE html>
<html lang="en">
<head>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Interior-Design-Responsive-Website-Templates-Edge">
    <meta name="author" content="webThemez.com">
    <title>{{ GetSetting::getConfig('site-name') }} - @yield('title')</title>

    <link rel="favicon" href="{!! asset('images/akari/favicon.png') !!}">
    <link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
    <link rel="stylesheet" href="{!! asset('akari/assets/css/bootstrap.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('akari/assets/css/rtl.css') !!}">
    <link rel="stylesheet" href="{!! asset('akari/assets/css/font-awesome.min.css') !!}"> 
    <link rel="stylesheet" href="{!! asset('akari/assets/css/bootstrap-theme.css') !!}" media="screen"> 
    <link rel="stylesheet" href="{!! asset('akari/assets/css/style.css') !!}">
    <link rel="stylesheet" href="{!! asset('akari/assets/css/menu.css') !!}">
    <link rel='stylesheet' id='camera-css'  href="{!! asset('akari/assets/css/camera.css') !!}" type='text/css' media='all'> 

    <link rel="stylesheet" href="{!! asset('akari/assets/css/modification.css') !!}">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="{!! asset('akari/assets/js/html5shiv.js') !!}"></script>
    <script src="{!! asset('akari/assets/js/respond.min.js') !!}"></script>
    <![endif]-->


    <link rel="stylesheet" href="{!! asset('akari/assets/css/amineModification.css') !!}">
    
    @yield('stylesheets')
  
</head>
<body>
@include('frontbuil.partials.headerTop')
    
    
@include('frontbuil.partials.navbar')

    



    @yield('content')

@include('frontbuil.partials.footer')




    <!-- JavaScript libs are placed at the end of the document so the pages load faster -->
    <script src="{!! asset('akari/assets/js/modernizr-latest.js') !!}"></script> 
    <script type='text/javascript' src="{!! asset('akari/assets/js/jquery.min.js') !!}"></script>
    <script type='text/javascript' src="{!! asset('akari/assets/js/fancybox/jquery.fancybox.pack.js') !!}"></script>
    
    <script type='text/javascript' src="{!! asset('akari/assets/js/jquery.mobile.customized.min.js') !!}"></script>
    <script type='text/javascript' src="{!! asset('akari/assets/js/jquery.easing.1.3.js') !!}"></script> 
    <script type='text/javascript' src="{!! asset('akari/assets/js/camera.min.js') !!}"></script> 
    <script src="{!! asset('akari/assets/js/bootstrap.min.js') !!}"></script> 
    <script src="{!! asset('akari/assets/js/custom.js') !!}"></script>
    <script>
        jQuery(function(){
            
            jQuery('#camera_wrap_4').camera({
                height: '600',
                loader: 'bar',
                pagination: false,
                thumbnails: false,
                hover: false,
                opacityOnGrid: false,
                imagePath: '{{ URL::to("/") }}/images/akari/'
            });

        });
    </script>


    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

@yield('scripts')
    
</body>
</html>
