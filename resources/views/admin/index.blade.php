@extends('layouts.pro-main')


@section('title')
Folioforpro: Admin-Page
@yield('title')
@stop


	



@section('header')
	
   <div id="main_header" class="type1" style="margin-bottom:0px;">
    <div class="header_parent_wrap">
            <header>
                <div class="container">
                    <div class="logo_sect">
                        <a href="{{URL::to('index')}}" class="logo"><img src="{{URL::asset('img/logomine.png')}}" class="logo_def" alt="" /><img src="{{URL::asset('img/retina/logomine.png')}}" class="logo_retina" alt="FOLIOFORPRO" /></a>
                    </div>
                    <div style="text-align:center;">
                    <h2 style="color:#ffffff;">ADMIN PAGE</h2>
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
        	<div class="content_block row left-sidebar">
            	<div class="fl-container hasLS">
                	<div class="row">
                        <div class="posts-block hasLS">
                            <div class="contentarea">
                                      
                                <div class="row">
     
                                	<div class="col-sm-12 module_cont module_blog">
                                    
                                        <div class="row">                    
                                            <div class="col-md-2">
                                              <div class="panel panel-primary reviews-container text-center">
                                                  <i class="fa fa-user fa-2x"></i>
                                                  <div>Total Architectural Engineer</div>
                                                  <div>{{$total_archengs}}</div>
                                              </div>
                                            </div>
                                            <div class="col-md-2">
                                              <div class="panel panel-primary reviews-container text-center">
                                                  <i class="fa fa-user fa-2x"></i>
                                                  <div>Total Production Engineer</div>
                                                  <div>{{$total_prodengs}}</div>
                                              </div>
                                            </div>
                                           <div class="col-md-2">
                                              <div class="panel panel-primary reviews-container text-center">
                                                  <i class="fa fa-user fa-2x"></i>
                                                  <div>Total Software Engineer</div>
                                                  <div>{{$total_softengs}}</div>
                                              </div>
                                          </div>
                                           <div class="col-md-2">
                                              <div class="panel panel-primary reviews-container text-center">
                                                  <i class="fa fa-user fa-2x"></i>
                                                  <div>Total Automobile Engineer</div>
                                                  <div>{{$total_autoengs}}</div>
                                              </div>
                                          </div>
                                          
                                          <div class="col-md-2">
                                              <div class="panel panel-primary reviews-container text-center">
                                                  <i class="fa fa-user fa-2x"></i>
                                                  <div>Total Civil Engineer</div>
                                                  <div>{{$total_civiengs}}</div>
                                              </div>
                                          </div>
                                           <div class="col-md-2">
                                              <div class="panel panel-primary reviews-container text-center">
                                                  <i class="fa fa-user fa-2x"></i>
                                                  <div>Total  Electrical Engineer</div>
                                                  <div>{{$total_elecengs}}</div>
                                              </div>
                                          </div>
                                      </div>
                                      
                                      <div class="row">                    
                                            <div class="col-md-2">
                                              <div class="panel panel-primary reviews-container text-center">
                                                  <i class="fa fa-user fa-2x"></i>
                                                  <div>Total Industrial Engineer</div>
                                                  <div>{{$total_induengs}}</div>
                                              </div>
                                            </div>
                                            <div class="col-md-2">
                                              <div class="panel panel-primary reviews-container text-center">
                                                  <i class="fa fa-user fa-2x"></i>
                                                  <div>Total Computer Engineer</div>
                                                  <div>{{$total_compengs}}</div>
                                              </div>
                                            </div>
                                           <div class="col-md-2">
                                              <div class="panel panel-primary reviews-container text-center">
                                                  <i class="fa fa-user fa-2x"></i>
                                                  <div>Total Microbiologist</div>
                                                  <div>{{$total_micrengs}}</div>
                                              </div>
                                          </div>
                                           <div class="col-md-2">
                                              <div class="panel panel-primary reviews-container text-center">
                                                  <i class="fa fa-user fa-2x"></i>
                                                  <div>Total Food Scientist</div>
                                                  <div>{{$total_foodengs}}</div>
                                              </div>
                                          </div>
                                          
                                          <div class="col-md-2">
                                              <div class="panel panel-primary reviews-container text-center">
                                                  <i class="fa fa-user fa-2x"></i>
                                                  <div>Total Geologist</div>
                                                  <div>{{$total_geolengs}}</div>
                                              </div>
                                          </div>
                                           <div class="col-md-2">
                                              <div class="panel panel-primary reviews-container text-center">
                                                  <i class="fa fa-user fa-2x"></i>
                                                  <div>Total Environmental Scientist</div>
                                                  <div>{{$total_enviengs}}</div>
                                              </div>
                                          </div>
                                      </div>
                              
    						</div>
                             
                                    
                                    
                                </div>
                            </div>
                        </div>
                        <div class="left-sidebar-block">							
							<div class="sidepanel widget_categories">
                            	
								<h6 class="title">ADMIN HOME</h6>
                                
								<ul>
									<li class="cat-item"><a href="{{URL::to('admin/add-admin')}}">Add Admin</a></li>
                                    <li class="cat-item"><a href="{{URL::to('admin/view_professionals')}}">View Professionals</a></li>
									<li class="cat-item"><a href="{{URL::to('logoutadmin')}}">Logout</a></li>
								</ul>
							</div>
							
							
		
                        </div>
                    </div>
                </div>                                
                
            </div>
        </div> 
    </div>
    
    <div class="footer" style="margin-top:265px;">
    	

        <div class="footer_bottom">
            <div class="container">
                <div class="foot_info_block">
                    <div class="logo_sect">
                        <a href="index.html" class="logo"><img src="{{URL::asset('img/logo_white.png')}}" class="logo_def" alt="" /><img src="{{URL::asset('img/retina/logo_white.png')}}" class="logo_retina" alt="" /></a>
                    </div>
                    <div class="copyright">Copyright &copy; <?php echo date('Y'); ?> Folioforpro. All Rights Reserved.</div>
                    <div class="foot_menu">
                        <ul>
                            <li><a href="#">Terms of Service</a></li>
                            <li><a href="#">Policy</a></li>
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