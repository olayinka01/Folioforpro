@extends('layouts.main')


@section('title')
Folioforpro: Home
@yield('title')
@stop


	



@section('header')
	
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
                                <li class="current-menu-parent"><a href="{{URL::to('index')}}">Home</a>
                                </li>
                                
                                <li class="menu-item-has-children megamenu mega_submenu"><a href="javascript:void(0);">Professionals</a>
                                    <div class="sub-nav">
                                        <div class="megamenu_wrap">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <ul class="sub-menu">
                                                            
                                                            @foreach($menutype2 as $menutype)
                                                            <li><a href="#">{{$menutype->profession_name}}</a></li>
                                                            @endforeach
                                                            @foreach($menutype3 as $menutype)
                                                            <li><a href="#">{{$menutype->profession_name}}</a></li>
                                                            @endforeach
                                                            @foreach($menutype4 as $menutype)
                                                            <li><a href="#">{{$menutype->profession_name}}</a></li>
                                                            @endforeach
                                                            @foreach($menutype5 as $menutype)
                                                            <li><a href="#">{{$menutype->profession_name}}</a></li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <ul class="sub-menu">
                                                            @foreach($menutype6 as $menutype)
                                                            <li><a href="#">{{$menutype->profession_name}}</a></li>
                                                            @endforeach
                                                            @foreach($menutype7 as $menutype)
                                                            <li><a href="#">{{$menutype->profession_name}}</a></li>
                                                            @endforeach
                                                            @foreach($menutype8 as $menutype)
                                                            <li><a href="#">{{$menutype->profession_name}}</a></li>
                                                            @endforeach
                                                            @foreach($menutype9 as $menutype)
                                                            <li><a href="#">{{$menutype->profession_name}}</a></li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <ul class="sub-menu">
                                                            @foreach($menutype10 as $menutype)
                                                            <li><a href="#">{{$menutype->profession_name}}</a></li>
                                                            @endforeach
                                                            @foreach($menutype11 as $menutype)
                                                            <li><a href="#">{{$menutype->profession_name}}</a></li>
                                                            @endforeach
                                                            @foreach($menutype12 as $menutype)
                                                            <li><a href="#">{{$menutype->profession_name}}</a></li>
                                                            @endforeach
                                                            @foreach($menutype13 as $menutype)
                                                            <li><a href="#">{{$menutype->profession_name}}</a></li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                
                                <li class="">
                                	<a href="#">Pages</a>
                                </li>
                                
                                @if(Session::has('uid'))
                                <li class="menu-item-has-children"><a href="">{{ Session::get('lastname') }} {{ Session::get('firstname') }}</a>
                                    <div class="sub-nav">
                                        <ul class="sub-menu">
                                            <li><a href="{{URL::to('professional/profile')}}">Profile</a></li>
                                            <li><a href="{{URL::to('logout')}}">Logout</a></li>
                                        </ul>
                                    </div>
                                </li>
                                @else
                                <li class="">
                                	<a href="{{URL::to('register')}}">Register</a>
                                </li>
                                <li class="">
                                	<a href="{{URL::to('login')}}">Login</a>
                                </li>
                                @endif
                                
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

@stop

@section('body')
		
<div class="wrapper">
    	<div class="container">
        	<div class="content_block row no-sidebar">
            	<div class="fl-container">
                	<div class="posts-block">
                        <div class="contentarea">

                            <!-- Slider -->
                            <div class="fw_block bg_start wall_wrap">
                                <div class="row">
                                    <div class="col-sm-12 first-module module_slider module_cont pb0 fullwidthslider">
                                        <div class="slider_container mb80">
                                            <div class="fullwidth_slider">
                                                <ul>
                                                    <!-- SLIDE 1 -->
                                                    <li data-index="rs-1" data-transition="fade" data-slotamount="5" data-masterspeed="700" >
                                                        <img src="img/slider/portfolio.jpg" alt="slide1" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat" />
                                                        <!-- LAYER NR. 1 -->
                                                        <div class="tp-caption tp-resizeme slide_title light z_index2"
                                                             id="slide-1-layer-1"
                                                             data-x="left" data-hoffset="0"
                                                             data-y="top" data-voffset="196"
                                                             data-whitespace="nowrap"
                                                             data-transform_idle="o:1;"
                                                             data-transform_in="y:-200px;opacity:0;s:1000;e:Power4.easeOut;"
                                                             data-transform_out="y:0;opacity:0;s:300;e:Power4.easeIn;"
                                                             data-start="1200"
                                                             data-elementdelay="0.05">Hello Everyone!
                                                        </div>
                                                        <!-- LAYER NR. 2 -->
                                                        <div class="tp-caption tp-resizeme slide_subtitle light z_index3"
                                                             id="slide-1-layer-2"
                                                             data-x="left" data-hoffset="0"
                                                             data-y="top" data-voffset="269"
                                                             data-whitespace="nowrap"
                                                             data-transform_idle="o:1;"
                                                             data-transform_in="y:-200px;opacity:0;s:800;e:Power4.easeOut;"
                                                             data-transform_out="y:0;opacity:0;s:300;e:Power4.easeIn;"
                                                             data-start="1200"
                                                             data-elementdelay="0.05">Welcome to portfolio for profesionals
                                                        </div>
                                                        <!-- LAYER NR. 3 -->
                                                        <div class="tp-caption tp-resizeme slide_descr light z_index4"
                                                             id="slide-1-layer-3"
                                                             data-x="left" data-hoffset="0"
                                                             data-y="top" data-voffset="328"
                                                             data-whitespace="nowrap"
                                                             data-transform_idle="o:1;"
                                                             data-transform_in="y:200px;opacity:0;s:800;e:Power4.easeOut;"
                                                             data-transform_out="y:0;opacity:0;s:300;e:Power4.easeIn;"
                                                             data-start="1200"
                                                             data-elementdelay="0.05">Here you can create a portfolio for yourself as a professional in order to showcase your skills to companies for hiring. 
                                                        </div>
                                                         <!-- LAYER NR. 4 -->
                                                        <div class="tp-caption tp-resizeme slide_descr light z_index4"
                                                             id="slide-1-layer-3"
                                                             data-x="left" data-hoffset="0"
                                                             data-y="top" data-voffset="348"
                                                             data-whitespace="nowrap"
                                                             data-transform_idle="o:1;"
                                                             data-transform_in="y:200px;opacity:0;s:800;e:Power4.easeOut;"
                                                             data-transform_out="y:0;opacity:0;s:300;e:Power4.easeIn;"
                                                             data-start="1200"
                                                             data-elementdelay="0.05">Companies can also check for portfolios that match their profile for hiring the right professionals. 
                                                        </div>
                                                        
                                                        <!-- LAYER NR. 5 -->
                                                        <div class="tp-caption tp-resizeme slide_btn dark_parent z_index5"
                                                             id="slide-1-layer-4"
                                                             data-x="left" data-hoffset="0"
                                                             data-y="top" data-voffset="411"
                                                             data-whitespace="nowrap"
                                                             data-transform_idle="o:1;"
                                                             data-transform_in="y:250px;opacity:0;s:1000;e:Power4.easeOut;"
                                                             data-transform_out="y:0;opacity:0;s:300;e:Power4.easeIn;"
                                                             data-start="1500"
                                                             data-elementdelay="0.05"><!--<a class="shortcode_button btn_normal btn_type1" href="javascript:void(0);">Learn More<i class="fa fa-angle-double-right"></i></a>-->
                                                        </div>
                                                        <!-- LAYER NR. 6 -->
                                                        <div class="tp-caption tp-resizeme slide_img z_index6"
                                                             id="slide-1-layer-5"
                                                             data-x="left" data-hoffset="585"
                                                             data-y="top" data-voffset="0"
                                                             data-whitespace="nowrap"
                                                             data-transform_idle="o:1;"
                                                             data-transform_in="opacity:0;s:1200;e:Power2.easeInOut;"
                                                             data-transform_out="opacity:0;s:300;e:Power4.easeIn;"
                                                             data-start="1300"
                                                             data-elementdelay="0.05"><img src="" alt="" />
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- //Slider -->

                            <!--<div class="row">
                                <div class="col-sm-12 module_cont module_title pb5">
                                    <div class="bg_title">
                                        <h2>Are You Ready to Explore Our Wonderful Things?</h2>
                                        <div class="icon_divider"></div>
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>
                                    </div>
                                </div>
                            </div>-->
                            
                            <div class="row">
                                <div class="col-sm-12 module_cont module_product_offers items4 pb25">
                                    <div class="product_offers_wrapper clearfix">
                                        
                                        <div class="car_offer_item">
                                            <div class="">
                                                <div class="widget_categories">
                                                    <!--<h6 class="title">Categories</h6>-->
                                                    <ul>
                                                    	
                                                        @foreach($menutype2 as $menutype)
                                                           <?php 
                                                           $menutypelower = strtolower($menutype->profession_name);
                                                           $finalmenu = $menutypelower;
                                                           $menuLink = 'professionals/'.$finalmenu.'/';
                                                           ?>
                                                        <li><a href='{{URL::to($menuLink)}}'>{{$menutype->profession_name}}</a></li>
                                                        @endforeach
                                                        
                                                        @foreach($menutype3 as $menutype)
                                                        	<?php 
                                                           $menutypelower = strtolower($menutype->profession_name);
                                                           $finalmenu = $menutypelower;
                                                           $menuLink = 'professionals/'.$finalmenu.'/';
                                                           ?>
                                                        <li><a href='{{URL::to($menuLink)}}'>{{$menutype->profession_name}}</a></li>
                                                        @endforeach
                                                        
                                                        @foreach($menutype4 as $menutype)
														   <?php 
                                                           $menutypelower = strtolower($menutype->profession_name);
                                                           $finalmenu = $menutypelower;
                                                           $menuLink = 'professionals/'.$finalmenu.'/';
                                                           ?>
                                                        <li><a href="{{URL::to($menuLink)}}">{{$menutype->profession_name}}</a></li>
                                                        @endforeach
                                                        
                                                        @foreach($menutype5 as $menutype)
                                                       <?php 
                                                           $menutypelower = strtolower($menutype->profession_name);
                                                           $finalmenu = $menutypelower;
                                                           $menuLink = 'professionals/'.$finalmenu.'/';
                                                           ?>
                                                        <li><a href='{{URL::to($menuLink)}}'>{{$menutype->profession_name}}</a></li>
                                                        @endforeach
                                                        
                                                        @foreach($menutype6 as $menutype)
                                                       		<?php 
                                                           $menutypelower = strtolower($menutype->profession_name);
                                                           $finalmenu = $menutypelower;
                                                           $menuLink = 'professionals/'.$finalmenu.'/';
                                                           ?>
                                                        <li><a href='{{URL::to($menuLink)}}'>{{$menutype->profession_name}}</a></li>
                                                        @endforeach
                                                        
                                                        @foreach($menutype7 as $menutype)
                                                        	<?php 
                                                           $menutypelower = strtolower($menutype->profession_name);
                                                           $finalmenu = $menutypelower;
                                                           $menuLink = 'professionals/'.$finalmenu.'/';
                                                           ?>
                                                        <li><a href='{{URL::to($menuLink)}}'>{{$menutype->profession_name}}</a></li>
                                                        @endforeach
                                                        
                                                        @foreach($menutype8 as $menutype)
                                                      	   <?php 
                                                           $menutypelower = strtolower($menutype->profession_name);
                                                           $finalmenu = $menutypelower;
                                                           $menuLink = 'professionals/'.$finalmenu.'/';
                                                           ?>
                                                        <li><a href='{{URL::to($menuLink)}}'>{{$menutype->profession_name}}</a></li>
                                                        @endforeach
                                                        
                                                        @foreach($menutype9 as $menutype)
                                                        	<?php 
                                                           $menutypelower = strtolower($menutype->profession_name);
                                                           $finalmenu = $menutypelower;
                                                           $menuLink = 'professionals/'.$finalmenu.'/';
                                                           ?>
                                                        <li><a href='{{URL::to($menuLink)}}'>{{$menutype->profession_name}}</a></li>
                                                        @endforeach
                                                        
                                                        @foreach($menutype10 as $menutype)
                                                        	<?php 
                                                           $menutypelower = strtolower($menutype->profession_name);
                                                           $finalmenu = $menutypelower;
                                                           $menuLink = 'professionals/'.$finalmenu.'/';
                                                           ?>
                                                        <li><a href='{{URL::to($menuLink)}}'>{{$menutype->profession_name}}</a></li>
                                                        @endforeach
                                                        
                                                        @foreach($menutype11 as $menutype)
                                                        	<?php 
                                                           $menutypelower = strtolower($menutype->profession_name);
                                                           $finalmenu = $menutypelower;
                                                           $menuLink = 'professionals/'.$finalmenu.'/';
                                                           ?>
                                                        <li><a href='{{URL::to($menuLink)}}'>{{$menutype->profession_name}}</a></li>
                                                        @endforeach
                                                        
                                                        @foreach($menutype12 as $menutype)
                                                        	<?php 
                                                           $menutypelower = strtolower($menutype->profession_name);
                                                           $finalmenu = $menutypelower;
                                                           $menuLink = 'professionals/'.$finalmenu.'/';
                                                           ?>
                                                        <li><a href='{{URL::to($menuLink)}}'>{{$menutype->profession_name}}</a></li>
                                                        @endforeach
                                                        
                                                        @foreach($menutype13 as $menutype)
                                                       		<?php 
                                                           $menutypelower = strtolower($menutype->profession_name);
                                                           $finalmenu = $menutypelower;
                                                           $menuLink = 'professionals/'.$finalmenu.'/';
                                                           ?>
                                                        <li><a href='{{URL::to($menuLink)}}'>{{$menutype->profession_name}}</a></li>
                                                        @endforeach
                                                        
                                                    </ul>
                                                </div>
                                             </div>
                                        </div>
                                        
                                        
										@if(isset($professionals))
                                        @foreach($professionals as $professional)
                                        
                                        <?php
										
										$puid = $professional->uid;
								 		$username= $professional->firstname." ".$professional->lastname;
										$newlink="aboutme/".$puid;
										
										?>
                                        
                                        <div class="car_offer_item">
                                            <div class="car_offer_wrap">
                                        			<div class="item_wrapper">
                                                        <div class="item">
                                                            <div class="team_img">
                                                                <img src='{{ URL::asset("ffpimages/$professional->pro_id/profile/$professional->photo") }}' alt="FOLIOFORPRO" />
                                                            </div>
                                                            <div class="team_title text-center">
                                                                <h6>{{$professional->firstname}} {{$professional->lastname}}</h6>
                                                                <p class="bold">{{$professional->profession}}</p>
                                                                <span class="" style="display:none">{{$professional->uid}}</span>
                                                            </div>
                                                            <div class="team_desc text-center"><a href={{URL::to($newlink)}}>More about me</a></div>
                                                            
                                                        </div>
                                                    </div>
                                            </div>
                                        </div>
                                        @endforeach
                                        @endif
                                        
                                        
                                        <div style="text-align:center;">{{$professionals->links()}}</div>
                                        
                                        
                                    </div>
                                </div>
                            </div>

                           <!-- <div class="row">
                                <div class="col-sm-12 module_cont pb60">
                                    <div class="text-center">
                                        <a class="shortcode_button btn_normal btn_type4" href="javascript:void(0);">Load More<i class="fa fa-angle-double-right"></i></a>
                                    </div>
                                </div>
                            </div>-->
                                <div class="row">
                                    <div class="col-sm-12 module_cont text-center pb60">
                                        <a href="javascript:void(0);" class="shortcode_button btn_normal btn_type3">View More<i class="fa fa-angle-double-right"></i></a>
                                    </div>
                                </div>


                            
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
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
        
   

@stop