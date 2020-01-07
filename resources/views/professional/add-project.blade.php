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
                                    
                                
                                
                                <div class="row">
                                    <div class="col-sm-12 module_cont module_blog">
                                    <!--
                                    <p style="color:green;">{{Session::get('photo_status')}}</p>
              						-->
                                                                        
                                    	<!-- PANEL --> 
                                    	<div class="panel-group" id="accordion">
                                        
                                        	<div class=" panel panel-default">
                                            	<div class="panel-heading">
                                                	<h2 class="panel-title">
                                                    	<a data-toggle="collapse" data-parent="#accordion" href="#accordionOne" style="font-size:16px;">
                                                    	<i class="fa fa-plus">
                                                        </i>
                                                        </a>
                                                        Add Project
                                                        &nbsp;&nbsp;&nbsp;<b style="color:green;">{{Session::get('project_status')}}</b>
                                                    
                                                    </h2>
                                                
                                                </div>
                                                <div class="panel-collapse collapse" id="accordionOne">
                                                	<div class="panel-body">
                        {{ Form::open(array('url' => 'project_upload','class'=>'form-group', 'files'=>'true')) }}
                            
                     
                     <section class="form-group">
                       <div style="text-align:center;">
                         
                        <label id="bold">PROJECT NAME <sup>*</sup></label>
                        
						{{ Form::text('project_name',Input::old('project_name'), array('placeholder'=>'Enter Project Name', 'required'=>'required', 'class'=>'form-control')) }}
                            
                        
                        </div>
                    </section>
                    
                    
                    	<center>
                        {{ Form::submit('Submit', array('class' => 'btn btn-9 text-uppercase')) }}
                        </center>
                    
                        
                            
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
                                                        Add URL
                                                        &nbsp;&nbsp;&nbsp;<b style="color:green;">{{Session::get('url_status')}}</b>
                                                    
                                                    </h2>
                                                
                                                </div>
                                                <div class="panel-collapse collapse" id="accordionTwo">
                                                	<div class="panel-body">
                        {{ Form::open(array('url' => 'url_upload','class'=>'form-group', 'files'=>'true')) }}
                            
                     
                    
                    <section class="form-group">
                       <div style="text-align:center;">
                         
                        <label id="bold">PROJECT<sup>*</sup></label>
                        
						{{ Form::select('project_id', $projects, Input::old('project_id'), array('placeholder'=>'Select Project Name', 'required'=>'required', 'class'=>'form-control')) }}
                            
                        
                        </div>
                    </section>
                    
                    <section class="form-group">
                       <div style="text-align:center;">
                         
                        <label id="bold">PROJECT URL <sup></sup></label>
                        
						{{ Form::text('project_url',Input::old('project_url'), array('placeholder'=>'Enter Project URL (optional for software developer only)', 'class'=>'form-control')) }}
                            
                        
                        </div>
                    </section>	
                    
                    	<center>
                        {{ Form::submit('Submit', array('class' => 'btn btn-9 text-uppercase')) }}
                        </center>
                    
                        
                            
                            {{ Form::close() }}
                                                    
                                                    </div>
                                                </div>
                                        	</div>
                                            
                                            
                                            <div class=" panel panel-default">
                                            	<div class="panel-heading">
                                                	<h2 class="panel-title">
                                                    	<a  data-toggle="collapse" data-parent="#accordion" href="#accordionThree" style="font-size:16px;">
                                                    	<i class="fa fa-plus">
                                                        </i>
                                                        </a>
                                                        Add work done in the project&nbsp;&nbsp;&nbsp;
                                                        <b style="color:green;">{{Session::get('work_status')}}</b>
                                                        <b style="color:red;">{{Session::get('workimg_error')}}</b>
                                                    </h2>                                                
                                                </div>
                                                <div class="panel-collapse collapse" id="accordionThree">
                                                	<div class="panel-body">
                                                    
                     
                            {{ Form::open(array('url' => 'work_upload','class'=>'form-group', 'files'=>'true')) }}
                            
       
                  <section class="form-group">
                       <div style="text-align:center;">
                         
                        <label id="bold">PROJECT NAME <sup>*</sup></label>
                        
						{{ Form::select('projectid', $projects, Input::old('projectid'), array('placeholder'=>'Select Project', 'required'=>'required', 'class'=>'form-control')) }}
                            
                        
                        </div>
                    </section>
                    
                   <section class="form-group">
                       <div style="text-align:center;">
                         
                        <label id="bold"> WORK NAME <sup>*</sup></label>
                        
						{{ Form::text('work_name', Input::old('work_name'), array('placeholder'=>'Enter Work Name', 'required'=>'required', 'class'=>'form-control')) }}
                            
                        
                        </div>
                    </section>	
                    
                    
                    <section class="form-group">
                       <div style="text-align:center;">
                         
                        <p> <label id="bold">WORK IMAGE (Dimension = 500px &times; 500px) </label> </p>
                      <div class="pic-box3" style="margin:0 auto;">
                   <img id="image-file1" src="{{URL::asset('img/icons2/default.png')}}"/>
                      </div>        
                        {{ Form::button('Select', array('class' => 'button text-uppercase','style'=>'margin-top:15px;background:#000000;','onClick'=> "crpwork.show(this,'work_image1')")) }}
                        {{ Form::hidden('work_image1', 'secret', array('id' => 'work_image1')) }}
                        
                        </div>
                    </section>	
                    
                    <section class="form-group">
                       <div style="text-align:center;">
                         
                        <label id="bold">DESCRIPTION <sup>*</sup></label>
                        
						{{ Form::textarea('work_desc','', array('maxlength'=>'350','placeholder'=>'Enter Work Description', 'required'=>'required', 'class'=>'form-control')) }}
                            
                        
                        </div>
                    </section>		
                        
                        
                            <center>
                            {{ Form::submit('Upload', array('class' => 'btn btn-9 text-uppercase')) }}
                            </center>
                    
                            
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
									<li class="cat-item"><a href="{{URL::to('professional/edit-proj-work')}}">Edit Project/Work</a></li>
									<li class="cat-item"><a href="{{URL::to('logout')}}">Logout</a></li>
								</ul>
							</div>
							
							
		
                        </div>
                    </div>
                </div>                                
                
            </div>
        </div> 
    </div>
    
    <div class="footer" style="margin-top:170px;">
    	

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