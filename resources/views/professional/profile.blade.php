@extends('layouts.pro-main')


@section('title')
Folioforpro: Profile
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
                                                                                               
                                <li class="">
                                	<a href="#">Portfolio tips</a>
                                </li>
                                                                                                
                                <li class="">
                                <a href="#">Blog</a>
                                </li>
                                
                            </ul>
                        </nav>
                        
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
        	<div class="content_block row left-sidebar">
            	<div class="fl-container hasLS">
                	<div class="row">
                        <div class="posts-block hasLS">
                            <div class="contentarea">
                                      
                                <div class="row">
                                    <div class="col-sm-12 module_cont module_blog" style=" background-image:url({{URL::asset('ffpimages'.'/'.$professional->pro_id.'/'.'background'.'/'.$professional->background_photo)}}); margin-bottom:50px; height:250px; width:800px;">
                                        <center>
										<!--<img src="{{URL::asset('ffpimages'.'/'.$professional->pro_id.'/'.'background'.'/'.$professional->background_photo)}}" class="img img-responsive" style="height:250px; width:800px;"  alt="BACKGROUND IMAGE">-->
                                        <img  src="{{URL::asset('ffpimages'.'/'.$professional->pro_id.'/'.'profile'.'/'.$professional->photo)}}" class="img img-circle img-responsive" style="height:150px; width:150px; margin-top:100px; border:5px solid;" alt="PHOTO">
                                        </center>
                            	

									</div>
                                
                                
                                <div class="row">
                                    <div class="col-sm-12 module_cont module_blog">
                                    <!--
                                    <p style="color:green;">{{Session::get('photo_status')}}</p>
              						-->
                                                                        
                                    	<!-- PANEL --> 
                                    	<div class="panel-group" id="accordion">
                                        <?php
									  /*$prof_id = Session::get('uid');
									  $aboutme = Session::get('about_me');
									  $skills = Session::get('skills');*/
									  
									  $prof_id = $professional->uid;
									  $aboutme = $professional->about_me;
									  $skills = $professional->skills;
									  $photo = $professional->photo;
									  $backphoto = $professional->background_photo;
									  
									  ?>
                                        
                                        
                                        	<div class=" panel panel-default">
                                            	<div class="panel-heading">
                                                	<h2 class="panel-title">
                                                    	<a  data-toggle="collapse" data-parent="#accordion" href="#accordionOne" style="font-size:16px;">
                                                    	<i class="fa fa-plus">
                                                        </i>
                                                        </a>
                                                        Change Background Photo&nbsp;&nbsp;&nbsp;
                                                        <b style="color:green;">{{Session::get('back_status')}}</b>
                                                        <b style="color:red;">{{Session::get('backimg_error')}}</b>

                                                    </h2>                                                
                                                </div>
                                                <div class="panel-collapse collapse" id="accordionOne">
                                                	<div class="panel-body">
                                                    
                                     
									  
                                      
                                                    
                            {{ Form::open(array('url' => 'back_photo','class'=>'form-group', 'files'=>'true')) }}
                            
                    @if($backphoto)                       
                  	<section class="form-group">
                       <div style="text-align:center;">
                         
                        <p> <label id="bold">BACKGROUND IMAGE (Dimension = 250px &times; 800px) </label> </p>
                      <div class="pic-box" style="margin:0 auto;">
                   <img id="image-file1" src="{{URL::asset('img/icons2/default.png')}}"/>
                      </div>        
                        {{ Form::button('Select', array('class' => 'button text-uppercase','style'=>'margin-top:15px;background:#000000;','onClick'=> "crp.show(this,'back_image1')")) }}
                        {{ Form::hidden('back_image1', 'secret', array('id' => 'back_image1')) }}
                        
                        </div>
                    </section>	
                        
                        
                            <center>
                            {{ Form::submit('Update', array('class' => 'btn btn-9 text-uppercase')) }}
                            </center>
                            
                    @else        
                    <section class="form-group">
                       <div style="text-align:center;">
                         
                        <p> <label id="bold">BACKGROUND IMAGE (Dimension = 250px &times; 800px) </label> </p>
                      <div class="pic-box" style="margin:0 auto;">
                   <img id="image-file1" src="{{URL::asset('img/icons2/default.png')}}"/>
                      </div>        
                        {{ Form::button('Select', array('class' => 'button text-uppercase','style'=>'margin-top:15px;background:#000000;','onClick'=> "crp.show(this,'back_image1')")) }}
                        {{ Form::hidden('back_image1', 'secret', array('id' => 'back_image1')) }}
                        
                        </div>
                    </section>	
                        
                        
                            <center>
                            {{ Form::submit('Upload', array('class' => 'btn btn-9 text-uppercase')) }}
                            </center>
                    @endif
                            
                            {{ Form::close() }}
                                                    
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class=" panel panel-default">
                                            	<div class="panel-heading">
                                                	<h2 class="panel-title">
                                                    	<a data-toggle="collapse" data-parent="#accordion" href="#accordionTwo" style="font-size:16px;">
                                                    	<i class="fa fa-plus">
                                                        </i>
                                                        </a>
                                                        Change Profile Photo&nbsp;&nbsp;&nbsp;
                                                        <b style="color:green;">{{Session::get('photo_status')}}</b>
                                                        <b style="color:red;">{{Session::get('photoimg_error')}}</b>
                                                    
                                                    </h2>
                                                
                                                </div>
                                                <div class="panel-collapse collapse" id="accordionTwo">
                                                	<div class="panel-body">
                                                    
                        {{ Form::open(array('url' => 'photo','class'=>'form-group', 'files'=>'true')) }}
                            
                    @if($photo)                          
                  	<section class="form-group">
                       <div style="text-align:center;">
                         
                        <p> <label id="bold">PHOTO IMAGE (Dimension = 150px &times; 150px) </label> </p>
                      <div class="pic-box2" style="margin:0 auto;">
                   <img id="image-file1" src="{{URL::asset('img/icons2/default.png')}}"/>
                      </div>        
                        {{ Form::button('Select', array('class' => 'button text-uppercase','style'=>'margin-top:15px;background:#000000;','onClick'=> "crpphoto.show(this,'photo_image1')")) }}
                        {{ Form::hidden('photo_image1', 'secret', array('id' => 'photo_image1')) }}
                        
                        </div>
                    </section>	
                        
                        
                            <center>
                            {{ Form::submit('Update', array('class' => 'btn btn-9 text-uppercase')) }}
                            </center>
                    @else
                    <section class="form-group">
                       <div style="text-align:center;">
                         
                        <p> <label id="bold">PHOTO IMAGE (Dimension = 150px &times; 150px) </label> </p>
                      <div class="pic-box2" style="margin:0 auto;">
                   <img id="image-file1" src="{{URL::asset('img/icons2/default.png')}}"/>
                      </div>        
                        {{ Form::button('Select', array('class' => 'button text-uppercase','style'=>'margin-top:15px;background:#000000;','onClick'=> "crpphoto.show(this,'photo_image1')")) }}
                        {{ Form::hidden('photo_image1', 'secret', array('id' => 'photo_image1')) }}
                        
                        </div>
                    </section>	
                        
                        
                            <center>
                            {{ Form::submit('Upload', array('class' => 'btn btn-9 text-uppercase')) }}
                            </center>
                    @endif
                            
                            {{ Form::close() }}
                                                    
                                                    </div>
                                                </div>
                                           </div>
                                        
                                        	<div class=" panel panel-default">
                                            	<div class="panel-heading">
                                                	<h2 class="panel-title">
                                                    	<a data-toggle="collapse" data-parent="#accordion" href="#accordionThree" style="font-size:16px;">
                                                    	<i class="fa fa-plus">
                                                        </i>
                                                        </a>
                                                        About Me
                                                        &nbsp;&nbsp;&nbsp;<b style="color:green;">{{Session::get('aboutme_status')}}</b>
                                                    
                                                    </h2>
                                                
                                                </div>
                                                <div class="panel-collapse collapse" id="accordionThree">
                                                	<div class="panel-body">
                        {{ Form::open(array('url' => 'aboutme','class'=>'form-group', 'files'=>'true')) }}
                            
                     @if($aboutme)                         
                  	<section class="form-group">
                       <div style="text-align:center;">
                         
                        <label id="bold">ABOUT ME <sup>*</sup></label>
                        
						{{ Form::textarea('aboutme', $aboutme, array('maxlength'=>'350','placeholder'=>'Enter About Me', 'required'=>'required', 'class'=>'form-control')) }}
                            
                        
                        </div>
                    </section>	
                    
                    	<center>
                        {{ Form::submit('Update', array('class' => 'btn btn-9 text-uppercase')) }}
                        </center>
                        
                     @else
                     <section class="form-group">
                       <div style="text-align:center;">
                         
                        <label id="bold">ABOUT ME <sup>*</sup></label>
                        
						{{ Form::textarea('aboutme','', array('maxlength'=>'350','placeholder'=>'Enter About Me', 'required'=>'required', 'class'=>'form-control')) }}
                            
                        
                        </div>
                    </section>	
                    
                    	<center>
                        {{ Form::submit('Submit', array('class' => 'btn btn-9 text-uppercase')) }}
                        </center>
                    @endif
                        
                            
                            {{ Form::close() }}
                                                    
                                                    </div>
                                                </div>
                                        	</div>
                                        
                                        	<div class=" panel panel-default">
                                            	<div class="panel-heading">
                                                	<h2 class="panel-title">
                                                    	<a data-toggle="collapse" data-parent="#accordion" href="#accordionFour" style="font-size:16px;">
                                                    	<i class="fa fa-plus">
                                                        </i>
                                                        </a>
                                                        Skills
                                                        &nbsp;&nbsp;&nbsp;<b style="color:green;">{{Session::get('skills_status')}}</b>
                                                    
                                                    </h2>
                                                
                                                </div>
                                                <div class="panel-collapse collapse" id="accordionFour">
                                                	<div class="panel-body">
                                                    
                        {{ Form::open(array('url' => 'skills','class'=>'form-group', 'files'=>'true')) }}
                    
                    @if($skills)
                    <section class="form-group">
                       <div style="text-align:center;">
                         
                        <label id="bold">SKILLS <sup>*</sup></label>
						{{ Form::textarea('skills', $skills, array('maxlength'=>'1000','placeholder'=>'Update/Edit Your Technical Skills e.g 1. Proficiency in HTML and CSS', 'required'=>'required', 'class'=>'form-control')) }}
                            
                        
                       </div>
                    </section>
                    
                    	<center>
                        {{ Form::submit('Update', array('class' => 'btn btn-9 text-uppercase')) }}
                        </center>
                    @else
                    <section class="form-group">
                       <div style="text-align:center;">
                         
                        <label id="bold">SKILLS <sup>*</sup></label>
						{{ Form::textarea('skills', '', array('maxlength'=>'1000','placeholder'=>'Enter Your Technical Skills e.g 1. Proficiency in HTML and CSS', 'required'=>'required', 'class'=>'form-control')) }}
                            
                        
                       </div>
                    </section>
                    
                    	<center>
                        {{ Form::submit('Submit', array('class' => 'btn btn-9 text-uppercase')) }}
                        </center>
                    @endif
                    
                            
                        {{ Form::close() }}
                                                    
                                                    </div>
                                                </div>
                                            </div>
                                                                              	

                                		</div>
                                				<!-- END PANEL -->
                                	</div>
                                </div>
                                                    
                                    
                                    
                                    
                                </div>
                            </div>
                        </div>
                        <div class="left-sidebar-block">							
							<div class="sidepanel widget_categories">
                            	@if(Session::has('uid'))
								<h6 class="title">{{Session::get('lastname')}} {{Session::get('firstname')}}</h6>
                                @endif
								<ul>
									<li class="cat-item"><a href="{{URL::to('professional/add-project')}}">Add Project/Work</a></li>
									<li class="cat-item"><a href="{{URL::to('logout')}}">Logout</a></li>
								</ul>
							</div>
							
							
		
                        </div>
                    </div>
                </div>                                
                
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