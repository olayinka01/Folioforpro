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
                                                        Update URL
                                                        &nbsp;&nbsp;&nbsp;<b style="color:green;">{{Session::get('urledit_status')}}</b>
                                                    
                                                    </h2>
                                                
                                                </div>
                                                <div class="panel-collapse collapse" id="accordionOne">
                                                	<div class="panel-body">
                            
                     {{ Form::open(array('url' => 'url_edit','class'=>'form-group', 'files'=>'true')) }}
                            
                     
                    
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
                                                    	<a  data-toggle="collapse" data-parent="#accordion" href="#accordionTwo" style="font-size:16px;">
                                                    	<i class="fa fa-plus">
                                                        </i>
                                                        </a>
                                                        Edit work done in the project&nbsp;&nbsp;&nbsp;
                                                        <b style="color:green;">{{Session::get('workupdate_status')}}</b>
                                                    </h2>                                                
                                                </div>
                                                <div class="panel-collapse collapse" id="accordionTwo">
                                                	<div class="panel-body">
                                                    
                     
                            <!-- EDIT ARTWORKS -->
                      
                       <div class="box-content">
                       
						@if(isset($work_details))
                   		@foreach($work_details as $work_detail)
										<?php
                                 $img_name=$work_detail->image;
								 $workid=$work_detail->pfid;
								 $projectid=$work_detail->proj_id;
								 //$deleteWork_link = "artist/delete_artwork"				
								 $deleteWork_link = "professional/delete_work/".$projectid."/".$workid;
								
								 ?>
                          <div class='col-md-4 col-sm-4 shop-item-list shop-item-smaller product product-edit'>
									<figure>
				<img  class='img-responsive img'  src='{{URL::asset("ffpimages/$work_detail->pro_id/projects/$work_detail->proj_name/$work_detail->image")}}' width="260px" alt=''/>
									
									</figure>
									<div class='product-info'>
											  {{ Form::open(array('url' => 'professional/edit-proj-work')) }}  
                                      <p class="_inpt"><span>Name</span>{{ Form::text('work_name',$work_detail->name ) }}</p>

                                  
                                   <p class="_inpt"><span>Description</span>{{ Form::textarea('work_desc',$work_detail->description) }}</p>
                       
                                   
                             
                                                {{ Form::hidden('work_id',$workid ) }}
                                     

											<div class="pull-right" style="margin-right:6px;">
                                 {{ Form::button('Update', array('class' 
                                 => 'item_add btn btn-success','style'=>'border-radius:5px;padding:7px', 'type'=>'button', 'id'=>'update','onclick'=>'update_work($(this))')) }}    
                                                {{Form::close()}}
                                                
                               <a class="item_add btn btn-danger" onclick="delete_work(this)" id="delete"  style="margin-left:5px;border-radius:5px" href={{URL::to($deleteWork_link)}}>Delete</a>
                               				</div>
                                            <p class="clearfix" style="margin:0; padding:0;"></p>
								    </div>	
						   </div>
                                 @endforeach
                                 @endif	
						
						</div>
                      

					<!-- END EDIT ARTWORKS -->
                    			<div style="text-align:center">{{$work_details->links()}}</div>
                    
                        
                            
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
									<li class="cat-item"><a href="{{URL::to('logout')}}">Logout</a></li>
								</ul>
							</div>
							
							
		
                        </div>
                    </div>
                </div>                                
                
            </div>
        </div> 
    </div>
    
    <div class="footer" style="margin-top:235px;">
    	

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
    
    
    <script>
  var update_work = function(button)
  {  
    $.ajax({
		url:"{{url('professional/edit-proj-work')}}",
		type:"post",
        data:{
		    work_name:button.parent().parent().find('[name=work_name]').val(),
			 work_desc:button.parent().parent().find('[name=work_desc]').val(),
			   
			   work_id:button.parent().parent().find('[name=work_id]').val()
		  },
      success: function(result){
		  var message = $("<div id = 'update_msg'></div>").html("Work Successfully Updated!");
		  $(button.parent().parent()).append(message);
          $(message).delay(550).fadeOut("slow",
		  function(){
			  message.remove();
			  });
    },
	error: function(res)
	{
		console.error(res);
		alert("Opps! sorry an error occured.")
	}
	});
  }
 var delete_work = function(_link)
 {
	 event.preventDefault();
	 var loc = _link.href;
	 var do_delete= confirm("Are you sure you want to delete?");
	 if(do_delete)
	 {
		 window.location = loc;
	 }
	 
 }
  
  </script>
    
    

@stop