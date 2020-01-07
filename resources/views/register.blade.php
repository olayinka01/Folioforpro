@extends('layouts.main')


@section('title')
Folioforpro: Register
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
                    <h2 style="color:#ffffff;">PROFESSIONAL REGISTER PAGE</h2>
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
					
					
					<!-- REGISTER -->
					<div class="col-md-6">
						{{ Form::open(array('url'=>'prof-register', 'class'=>'form-group')) }}
					  <div class="heading _two text-left panel">
							<h2>New Professional</h2>
						</div>
                        
						<div class="form ">
							<section class="form-group">
							<label>First Name<sup>*</sup></label>
							{{ Form::text('firstname', Input::old('firstname'), array('placeholder'=>'First Name','required'=>'required', 'class'=>'form-control')) }}
                            </section>
                            
                            <section class="form-group">
                            <label>Middle Name<sup>*</sup></label>
							{{ Form::text('middlename', Input::old('middlename'), array('placeholder'=>'Middle Name','required'=>'required', 'class'=>'form-control')) }}
                            </section>
                            
                            <section class="form-group">
                            <label>Last Name<sup>*</sup>
                            </label>
							{{ Form::text('lastname', Input::old('lastname'), array('placeholder'=>'Last Name','required'=>'required', 'class'=>'form-control')) }}
                            </section>
                                                       
                            <section class="form-group">
                            <label>Email Address <sup>*</sup></label>
							{{ Form::email('email', Input::old('email'), array('placeholder'=>'Email address','required'=>'required', 'class'=>'form-control')) }}
                            </section>
                            
                            <section class="form-group">
						  <label>Password <sup>*</sup></label>
							{{ Form::password('password', array('placeholder'=>'Password','required'=>'required', 'class'=>'form-control')) }}
                            </section>
                            
                            <section class="form-group">
							<label>Confirm Password <sup>*</sup></label>
							{{ Form::password('confirm_password', array('placeholder'=>'Confirm Password','required'=>'required', 'class'=>'form-control')) }}
                            </section>
                            
                            <section class="form-group">
                            <label>Gender <sup>*</sup></label>
							{{ Form::select('gender', array('unspecified'=>'Unspecified', 'male'=>'Male', 'female'=>'Female'), array('unspecified'=>'Unspecified', 'male'=>'Male', 'female'=>'Female'), array('placeholder'=>'Gender', 'required'=>'required', 'class'=>'form-control')) }}
                            </section>
                            
                             <!--<section class="form-group">
                            <label>Date Of Birth<sup>*</sup>
                            </label>
                            	<div class="input-group date" id="datepicker">
							{{ Form::text('dobirth', '', array('placeholder'=>'Date Of Birth','required'=>'required', 'class'=>'form-control')) }}
                            	
                            	<span class="input-group-addon addon">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                            
                            	</div>
                            </section>-->
                                             
                             <section class="form-group">
                            <label>Profession<sup>*</sup>
                            </label>
							{{ Form::select('profession', $profession , Input::old('profession'), array('placeholder'=>'Profession', 'required'=>'required', 'class'=>'form-control')) }}
                            </section>
                            
                            <section class="form-group">
                            <label>Country Of Residence<sup>*</sup>
                            </label>
							{{ Form::select('country', $country , Input::old('country'), array('required'=>'required', 'id'=>'country', 'class'=>'form-control')) }}
                            </section>
                            
                            <p id="loader" style="display:none;" >please wait...</p>
                            
                            <section class="form-group"  id="state">
                          <label>State Of Residence<sup>*</sup>
                            </label>
							{{ Form::select('state', array(), 'None', array('class'=>'form-control')) }}
                            </section>
                            
                            <section class="form-group">
                             <label>City<sup>*</sup></label>
							{{ Form::text('city', Input::old('city'), array('placeholder'=>'City','required'=>'required', 'class'=>'form-control')) }}
                            </section>
                            
                            <section class="form-group">
                            <label>Residential Address<sup>*</sup></label>
                            {{ Form::textarea('address', '', array('placeholder'=>'Residential Address','class'=>'form-control','size' => '30x3','required'=>'required')) }}
                            </section>
                            
                            <section class="form-group">
                            <label>Phone Number<sup>*</sup>
                            </label>
							{{ Form::text('phone', Input::old('phone'), array('placeholder'=>'Phone Number','required'=>'required', 'class'=>'form-control')) }}
                            </section>
                            <section class="form-group">
                            <label>Alternate Number<sup>*</sup>
                            </label>
							{{ Form::text('alt_phone', Input::old('alt_phone'), array('placeholder'=>'Alternate Number', 'class'=>'form-control')) }}
                            </section>
                            
                            <section class="form-group">
                            <label for="remember"> 
                               {{ Form::checkbox('Accept', 'yes', array('required'=>'required', 'checked'=>'checked', 'disabled'=>'disabled',  'class'=>'checkbox')) }} I have read and accepted the <a href="#">terms of service</a></label>
                               {{ Form::submit('Register', array('class'=>'btn btn-13 btn-submit text-uppercase')) }}
                               </section>

						</div>
                        {{ Form::close() }}

					</div>

					<!-- END REGISTER -->
                    
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
    
	<script type="text/javascript" src="{{URL::asset('js/jquery.min.js')}}"></script>	
	<script type="text/javascript" src="{{URL::asset('js/jquery-ui.min.js')}}"></script>    
    <script type="text/javascript" src="{{URL::asset('js/bootstrap.min.js')}}"></script>
    
    <script type='text/javascript'>
		
	var cloud = {
	get:function(country_id){
		$("#loader").css({display:"block"});
		$("#state").css("display","none").find("select").empty();
			 $.ajax({
			  type:"GET",
			  url:"state",
			  data:{
				  country_id:country_id
				  },
				success: function(res){
					 $("#loader").css({display:"none"});
					 var contents = [];
					for (var a in res)
					{
						var option = $("<option></option>");
						option.attr({value:res[a].state_id});
						option.html(res[a].state);
						contents.push(option);
					}
					$("#state").css("display","block").find("select").append(contents);
					},
					error:function(res){
					$("#loader").css({display:"none"});
					console.log(res);
					}
			  });
	
			  
			  }
	
	}


$("#country").change(function(){
	
	cloud.get(this.value);
	});
	
	/*$(function() {
			$("#datepicker").datepicker();
		});*/

	
		
        
        </script>     
   

@stop