<!DOCTYPE html>
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<!--<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">-->
<link rel="apple-touch-icon" href="{{URL::asset('img/apple_icons_57x57.png')}}">
<link rel="apple-touch-icon" sizes="72x72" href="img/apple_icons_72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="img/apple_icons_114x114.png">

<title>Folioforpro Page</title>


<link href="http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,700,900" rel="stylesheet" type="text/css">


<link rel="stylesheet" href="{{URL::asset('css/bootstrap.min.css')}}" type="text/css" media="all">
<link rel="stylesheet" href="{{URL::asset('css/theme.css')}}" type="text/css" media="all">
<!-- REVOLUTION CSS FILES -->
<link rel="stylesheet" type="text/css" href="{{URL::asset('revolution/css/settings.css')}}" media="all">
<link rel="stylesheet" type="text/css" href="{{URL::asset('revolution/css/layers.css')}}" media="all">
<link rel="stylesheet" type="text/css" href="{{URL::asset('revolution/css/navigation.css')}}" media="all">
<link rel="stylesheet" href="{{URL::asset('css/custom.css')}}" type="text/css" media="all">
<link rel="stylesheet" href="{{URL::asset('css/style.css')}}" type="text/css" media="all">




</head>


<body>

 <div id="main_header" class="type1">
    <div class="header_parent_wrap">
            <header>
                <div class="container">
                    <div class="logo_sect">
                        <a href="{{URL::to('index')}}" class="logo"><img src="{{URL::asset('img/logomine.png')}}" class="logo_def" alt="" /><img src="{{URL::asset('img/retina/logomine.png')}}" class="logo_retina" alt="FOLIOFORPRO" /></a>
                    </div>
                    <div class="leftmargin">
                        <nav>
                            <ul class="menu">
                                <li class="current-menu-parent">
                                	<a href="{{URL::to('index')}}">Home</a>
                                </li>
                                
                                <li class="">
                                	<a href="#">Pages</a>
                                </li>
                                                                
                                <li class="">
                                <a href="#">Blog</a>
                                </li>
                                
                            </ul>
                        </nav>
                        <div class="top_search">
                            <a href="#" class="search_btn not_click">Search</a>
                            <div class="top_search_wrap not_click">
                                {{Form::open(array('url'=>'', 'class'=>'search_form not_click'))}}
                                
                                {{Form::text('search', Input::old('search'), array('placeholder'=>'Search', 'class'=>'not_click'))}}
                                {{Form::submit('Go', array('class'=>''))}}
                                
                                
                                {{Form::close()}}
                                <!--<form name="search_form" method="get" action="#" class="search_form not_click">
                                    <input type="text" name="s" value="" placeholder="Search" class="not_click">
                                    <input type="submit" value="Go">
                                </form>-->
                            </div>
                        </div>
                        <div class="cart_in_header"></div><div class="socials_in_header"></div>
                        <div class="clear"></div>
                    </div>
                    <div class="clear"></div>
                </div>
            </header>
        </div>
    </div>

<div class="wrapper">
    	<div class="container">
			<div class="wrapper_404 text-center">
				<h1 class="color">404</h1>
				<h2>Oops, Sorry We Can’t Find That Page!</h2>
				<p>Either Something Get Wrong or the Page Doesn’t Exist Anymore. Visit Our Homepage or Search the Best Match Below.</p>

				<!--<div class="shortcode_subscribe">
					<form action="javascript:void(0);" method="post">
						<input type="text" name="email" value="" placeholder="" />
						<input type="submit" value="Search the Site" id="submit" name="submit" />
					</form>
				</div>-->
				
			</div>
		</div>
    </div>
    
    <div class="footer">
    	

        <div class="footer_bottom">
            <div class="container">
                <div class="foot_info_block">
                    <div class="logo_sect">
                        <a href="index.html" class="logo"><img src="{{URL::asset('img/logo_white.png')}}" class="logo_def" alt="" /><img src="{{URL::asset('img/retina/logo_white.png')}}" class="logo_retina" alt="" /></a>
                    </div>
                    <div class="copyright">Copyright &copy; <?php echo date('Y'); ?> Folioforpro. All Rights Reserved.</div>
                    <div class="foot_menu">
                        <ul>
                            <li><a href="index.html">Terms of Service</a></li>
                            <li><a href="about.html">Policy</a></li>
                        </ul>
                    </div>
                </div>
                <div class="social_icons">
                    <ul>
                        <li><span>Follow:</span></li>
                        <li><a class="soc_fb" href="javascript:void(0);"><i class="fa fa-facebook-square"></i></a></li>
                        <li><a class="soc_tweet" href="javascript:void(0);"><i class="fa fa-twitter"></i></a></li>
                        <li><a class="soc_instagram" href="javascript:void(0);"><i class="fa fa-instagram"></i></a></li>
                        <li><a class="soc_dribbble" href="javascript:void(0);"><i class="fa fa-dribbble"></i></a></li>
                        <li><a class="soc_pinterest" href="javascript:void(0);"><i class="fa fa-pinterest"></i></a></li>
                        <li><a class="soc_flickr" href="javascript:void(0);"><i class="fa fa-flickr"></i></a></li>
                    </ul>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>   
    
    <div class="fixed-menu"></div>
	    

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