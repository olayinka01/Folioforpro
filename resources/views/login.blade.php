@extends('layouts.main')


@section('title')
Folioforpro: Login
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
                    <h2 style="color:#ffffff;">LOGIN PAGE</h2>
                    </div>
                    <div class="clear"></div>  
                </div>
            </header>
        </div>
    </div>

@stop

@section('body')
	
    <!-- BREAKCRUMB -->
		<section class="breadcrumb bg-grey">
			<div class="container">
				<span class="pull-right"><a href="{{URL::to('index')}}">Home</a></span>
					<span style="font-size:24px;">Register</span>
				
                

			</div>
		</section>
		<!-- END BREAKCRUMB -->
        
        
        <!-- REGISTER -->
        
        <section class="log_in_out">
			<div class="container">
				<div class="row">
                <center><label style="color:#FF0000; display:block;" class="bold">{{ HTML::ul($errors->all()) }}</label><label style="color:green; display:block;" class="bold">{{Session::get('msg')}}</label></center><br/>

					
					<div class="col-md-3"></div>
					
					
					<!-- LOGIN -->
					<div class="col-md-6">
					{{ Form::open(array('url'=>'prof-login', 'class'=>'form login')) }}
					  <div class="heading _two text-left panel">
							<h2>Existing Professional</h2>
						</div>
                        
                        <center> <span style="color:red;font-weight:bold">{{ Session::get('flash_error') }}</span></center>
						
						<div class="form panel">
							
                            <section class="form-group">
							<label>Email Address <sup>*</sup></label>
							{{ Form::email('loginemail', Input::old('loginemail'), array('placeholder'=>'Email Address','required'=>'required', 'class'=>'form-control')) }}
                            </section>
							
							<section class="form-group">
                            <label>Password <sup>*</sup></label>
							{{ Form::password('password', array('placeholder'=>'Password','required'=>'required', 'class'=>'form-control')) }}
                            </section>
							
							<div>
                               {{ Form::checkbox('remember', 'yes', array('class'=>'checkbox')) }}
								<label for="remember">Remember Me</label>
							</div>

							<p>
								<a href={{URL::to('password/reset')}}>Forgot your Password?</a>
							</p>

							{{ Form::submit('Log In', array('class'=>'btn btn-13 btn-submit text-uppercase')) }}
						</div>
                        {{ Form::close() }}

					</div>
					<!-- END LOGIN -->
                    
                    <div class="col-md-3"></div>

				</div>
			</div>
		</section>

        <!-- END REGISTER FORM -->	
        
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