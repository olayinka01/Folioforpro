@extends('layouts.main')


@section('title')
Folioforpro: Admin-Login
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
                    <h2 style="color:#ffffff;">ADMIN LOGIN PAGE</h2>
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
					<span style="font-size:24px;">Login</span>
				
                

			</div>
		</section>
		<!-- END BREAKCRUMB -->
        
        
        <!-- LOGIN -->
        
        <section class="log_in_out">
			<div class="container">
				<div class="row">
                <center><label style="color:#FF0000; display:block;" class="bold">{{ HTML::ul($errors->all()) }}</label><label style="color:green; display:block;" class="bold">{{Session::get('msg')}}</label></center><br/>

					
					<div class="col-md-3"></div>
					
					
					<!-- LOGIN FORM -->
					<div class="col-md-6">
					{{ Form::open(array('url'=>'admin/login', 'class'=>'form login')) }}
					  <div class="heading _two text-left panel">
							<h2>Existing Admin</h2>
						</div>
                        
                        <center> <span style="color:red;font-weight:bold">{{ Session::get('flash_error') }}</span></center>
						
						<div class="form panel">
							
                            <section class="form-group">
							<label>Email Address <sup>*</sup></label>
							{{ Form::text('username', Input::old('username'), array('placeholder'=>'Enter Username','required'=>'required', 'class'=>'form-control')) }}
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
								<a href="#">Forgot your Password?</a>
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

        <!-- END LOGIN FORM -->	
        
        

    
    <div class="fixed-menu"></div>
        
   

@stop