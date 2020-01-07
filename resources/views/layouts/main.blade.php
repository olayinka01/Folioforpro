<!DOCTYPE html>
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<!--<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">-->
<link rel="apple-touch-icon" href="{{URL::asset('img/apple_icons_57x57.png')}}">
<link rel="apple-touch-icon" sizes="72x72" href="img/apple_icons_72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="img/apple_icons_114x114.png">

<title>@yield('title')</title>
@section('head')
@yield('head')


<link href="http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,700,900" rel="stylesheet" type="text/css">


<link rel="stylesheet" href="{{URL::asset('css/bootstrap.min.css')}}" type="text/css" media="all">
<link rel="stylesheet" href="{{URL::asset('css/theme.css')}}" type="text/css" media="all">
<!-- REVOLUTION CSS FILES -->
<link rel="stylesheet" type="text/css" href="{{URL::asset('revolution/css/settings.css')}}" media="all">
<link rel="stylesheet" type="text/css" href="{{URL::asset('revolution/css/layers.css')}}" media="all">
<link rel="stylesheet" type="text/css" href="{{URL::asset('revolution/css/navigation.css')}}" media="all">
<link rel="stylesheet" href="{{URL::asset('css/custom.css')}}" type="text/css" media="all">
<link rel="stylesheet" href="{{URL::asset('css/style.css')}}" type="text/css" media="all">


@show

</head>


<body>


@yield('header')
@yield('body')
	    

    <script type="text/javascript" src="{{URL::asset('js/jquery.min.js')}}"></script>	
	<script type="text/javascript" src="{{URL::asset('js/jquery-ui.min.js')}}"></script>    
    <script type="text/javascript" src="{{URL::asset('js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('js/modules.js')}}"></script>
	<script type="text/javascript" src="{{URL::asset('js/theme.js')}}"></script>
    <!-- REVOLUTION JS FILES -->
    <script type="text/javascript" src="{{URL::asset('revolution/js/jquery.themepunch.tools.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('revolution/js/jquery.themepunch.revolution.min.js')}}"></script>

    <!-- SLIDER REVOLUTION EXTENSIONS (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
    <script type="text/javascript" src="{{URL::asset('revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('revolution/js/extensions/revolution.extension.carousel.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('revolution/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('revolution/js/extensions/revolution.extension.migration.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('revolution/js/extensions/revolution.extension.parallax.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
    <script type="text/javascript" src="URL::asset('revolution/js/extensions/revolution.extension.video.min.js')}}"></script>
    <!-- END SLIDER REVOLUTION EXTENSIONS -->

    <!-- Slick Slider -->
    <script type="text/javascript" src="URL::asset('js/slick.min.js')}}"></script>
    <script type="text/javascript">
        jQuery(document).ready(function() {
            "";
            jQuery('.fullwidth_slider').show().revolution({
                sliderType:"standard",
                jsFileLocation:"revolution/js/",
                sliderLayout:"fullwidth",
                delay:9000,
                gridwidth:1170,
                gridheight:650,
                navigation: {
                    keyboardNavigation: "on",
                    keyboard_direction: "horizontal",
                    mouseScrollNavigation: "off",

                    onHoverStop: "on",
                    touch: {
                        touchenabled: "on",
                        swipe_threshold: 75,
                        swipe_min_touches: 1,
                        swipe_direction: "horizontal",
                        drag_block_vertical: false
                    },
                    arrows: {
                        style: "custom_gt3",
                        enable: false,
                        hide_onmobile: true,
                        hide_onleave: true,
                        left: {
                            h_align: "left",
                            v_align: "center",
                            h_offset: 50,
                            v_offset: 0
                        },
                        right: {
                            h_align: "right",
                            v_align: "center",
                            h_offset: 50,
                            v_offset: 0
                        }
                    },
                    bullets: {
                        style: "custom_gt3",
                        enable: false,
                        hide_onmobile: false,
                        hide_onleave: true,
                        direction: "horizontal",
                        h_align: "center",
                        v_align: "bottom",
                        h_offset: 0,
                        v_offset: 30,
                        space: 10,
                        tmp:''
                    }
                },
                fullScreenOffsetContainer: ""
            });

            jQuery(".carouselslider").slick({
                infinite: true,
                slidesToShow: 1,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 3000,
                speed: 500,
                arrows: false,
                dots: true
            });
        });
    </script>
    
</body>


</html>