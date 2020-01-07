@extends('layouts.main')


@section('title')
Folioforpro: Professionals
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
                                <li class="current-menu-parent">
                                	<a href="{{URL::to('index')}}">Home</a>
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
                                                        <li><a href='{{URL::to($menuLink)}}'>{{$menutype->profession_name}}</a></li>
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
                                                           $finalmenu = Str::slug($menutypelower);
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
                                        
                                        
										@if(isset($profesnals))
                                        @foreach($profesnals as $profesnal)
                                        
                                        <?php
										
										$puid = $profesnal->uid;
								 		$username= $profesnal->firstname." ".$profesnal->lastname;
										$newlink="aboutme/".$puid;
										
										?>
                                        
                                        <div class="car_offer_item">
                                            <div class="car_offer_wrap">
                                        			<div class="item_wrapper">
                                                        <div class="item">
                                                            <div class="team_img">
                                                                <img src='{{ URL::asset("ffpimages/$profesnal->pro_id/profile/$profesnal->photo") }}' alt="FOLIOFORPRO" />
                                                            </div>
                                                            <div class="team_title text-center">
                                                                <h6>{{$profesnal->firstname}} {{$profesnal->lastname}}</h6>
                                                                <p class="bold">{{$profesnal->profession}}</p>
                                                                <span class="" style="display:none">{{$profesnal->uid}}</span>
                                                            </div>
                                                            <div class="team_desc text-center"><a href={{URL::to($newlink)}}>More about me</a></div>
                                                            
                                                        </div>
                                                    </div>
                                            </div>
                                        </div>
                                        @endforeach
                                        @endif
                                        
                                        
                                        <div style="text-align:center;">{{$profesnals->links()}}</div>
                                        
                                        
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
        
   

@stop