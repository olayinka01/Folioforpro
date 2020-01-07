@extends('layouts.main')


@section('title')
Folioforpro: Aboutme
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
                             			<div class="col-sm-2">
                                        </div>
                                        <div class="col-sm-8 module_cont" style=" background-image:url({{URL::asset('ffpimages'.'/'.$proff_details->pro_id.'/'.'background'.'/'.$proff_details->background_photo)}}); margin-bottom:50px; height:250px; width:800px;">
                                            <center>
                                           <img  src="{{URL::asset('ffpimages'.'/'.$proff_details->pro_id.'/'.'profile'.'/'.$proff_details->photo)}}" class="img img-circle img-responsive" style="height:150px; width:150px; margin-top:100px; border:5px solid;" alt="PHOTO">
                                            </center>
                                    
    
                                        </div>
                                        <div class="col-sm-2">
                                        </div>
                                        
                             </div>

                            <div class="row">
                                <div class="col-sm-12 module_cont module_title pb5">
                                    <div class="bg_title">
                                        <h6>Name</h6>
                                        <div class="icon_divider"></div>
                                        <p>{{$proff_details->lastname}} {{$proff_details->firstname}} {{$proff_details->middlename}}</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-sm-12 module_cont module_title pb5">
                                    <div class="bg_title">
                                        <h6>Profession</h6>
                                        <div class="icon_divider"></div>
                                        <p>{{$proff_details->profession}}</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-sm-12 module_cont module_title pb5">
                                    <div class="bg_title">
                                        <h6>Full Address</h6>
                                        <div class="icon_divider"></div>
                                        <p>{{$proff_details->address}}, {{$proff_details->state}}, {{$proff_details->country}}.</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-sm-12 module_cont module_title pb5">
                                    <div class="bg_title">
                                        <h6>Contact Details</h6>
                                        <div class="icon_divider"></div>
                                        <p>Email: {{$proff_details->email}} &nbsp;&nbsp;&nbsp;&nbsp; Phone:{{$proff_details->phone}}.</p>
                                    </div>
                                </div>
                            </div>
                            
                             <div class="row">
                                <div class="col-sm-12 module_cont module_title pb5">
                                    <div class="bg_title">
                                        <h6>About me</h6>
                                        <div class="icon_divider"></div>
                                        <p>{{$proff_details->about_me}} </p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-sm-12 module_cont module_title pb5">
                                    <div class="bg_title">
                                        <h6>My Technical Skills</h6>
                                        <div class="icon_divider"></div>
                                        <p>{{$proff_details->skills}} </p>
                                    </div>
                                </div>
                            </div>

                            <div class="row">

                                <div class="col-sm-12 module_cont module_title pb5">
                                    <div class="bg_title">
                                        <h6>My Projects</h6>
                                        <div class="icon_divider"></div>
                                    </div>
                                    
                                     
                                    <div class="bg_title">
                                        
                                      <div class="row margintop20"> 
                                     
                                      @if(isset($work_details))
                                 	  @foreach($work_details as $work_detail)
                                      <?php
									  
									  
									  ?>
                                      <div class="col-sm-4 module_cont pb40">
                                      <span class="bold">{{$work_detail->proj_name}}</span>
                                        <div class="list-of-images item photo_gallery sorting_block">
                                            <div class="gallery_item element">
                                                <div class="gallery_item_padding">
                                                    <div class="img_block">
                                                        <img src="{{ URL::asset('ffpimages'.'/'.$work_detail->pro_id.'/'.'projects'.'/'.$work_detail->proj_name.'/'.$work_detail->image) }}" alt="" />
                                                        <a href="{{ URL::to('ffpimages'.'/'.$work_detail->pro_id.'/'.'projects'.'/'.$work_detail->proj_name.'/'.$work_detail->image) }}" class="view_link photozoom"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div style="text-align:center;"><span>{{$work_detail->name}}</span></div>
                                        
                                    
                                        
                                      </div>
                                      @endforeach
                                    @endif
                                      <div style="text-align:center">{{$work_details->links()}}</div>
                                      
                                      </div>
                                       
                                    </div>
                                    
                                    
                                    
                                    

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