@extends('layouts.pro-main')


@section('title')
Folioforpro: Add Admin
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
                                
                                    <div class=" box col-md-12 panel panel-primary">
                                   
                                  <center><h1 style="color:green">Folioforpro Professionals</h1>
                                  <p style="color:green">{{Session::get('del_msg')}}</p>
                                  <p style="color:green">{{Session::get('active_msg')}}</p>
                                  <p style="color:green">{{Session::get('deactive_msg')}}</p>
                                  </center>
                                      
                                      <div class="table-responsive"> 
                                 <table class="table table-bordered" >
                                      <tr>
                                      <!-- <th >S/N</th>-->
                                        <th >Prof Id</th>
                                        <th >Professional Name</th>
                                        <th >Email</th>
                                        <th >Phone</th>
                                        
                                      
                                        <th >Address</th>
                                        
                                       
                                        <!-- <th >View Products</th>-->
                                        <th >Active</th>
                                         <th ><center>Actions</center></th>
                                      </tr>
                                      <?php $i = 1; ?>
                                       @foreach($professional_details as $professional_detail)
                                      <tr>
                                    <!-- <td >{{$i}}</td> -->
                                        <td >{{$professional_detail->pro_id}}</td>
                                        <td >{{$professional_detail->lastname}} &nbsp;{{$professional_detail->firstname}}</td>
                                        <td >{{$professional_detail->email}}</td>
                                        <td >{{$professional_detail->phone}}</td>
                                       
                        <td >{{$professional_detail->address}} {{$professional_detail->city}}, {{$professional_detail->state }}</td>
                                       
                                        <td >{{$professional_detail->active}}</td>
                                       
                                       <?php 
                                       $view_professionslink = "";
                                       $delete_professionallink = "admin/delete_professionals/".$professional_detail->uid;
                                       $activate_professionallink = "admin/activate_professionals/".$professional_detail->uid;
                                       $deactivate_professionallink = "admin/deactivate_professionals/".$professional_detail->uid;
                                       ?>
                                      <!-- <td ><a href={{URL::to($view_professionslink)}} class="btn btn-success">View Products</a></td>-->
                                      
                                   
                                        <td ><a onclick="activate_professional(this)" href={{URL::to($activate_professionallink)}} class="btn  btn-success">Activate</a>&nbsp;<a onclick="deactivate_professional(this)" href={{URL::to($deactivate_professionallink)}} class="btn btn-success">De-activate</a>&nbsp;<a onclick="delete_prof(this)" href={{URL::to($delete_professionallink)}} class="btn btn-danger">Delete</a></td> 
                                       
                                      </tr>
                                      <?php $i++; ?>
                                      @endforeach
                                    </table>
                                		</div>  
                                  
                                  </div>
                                  
                              
    					</div>
                        
                                                    
                                    
                                    
                                    
                                </div>
                            </div>
                        </div>
                        <div class="left-sidebar-block">							
							<div class="sidepanel widget_categories">
                            	@if(Session::has('uid'))
								<h6 class="title">{{Session::get('admin_username')}}</h6>
                                @endif
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
    
    <div class="footer" style="margin-top:155px;">
    	

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
 var delete_prof = function(_link)
 {
	 event.preventDefault();
	 var loc = _link.href;
	 var do_delete= confirm("Are you sure you want to delete?");
	 if(do_delete)
	 {
		 window.location = loc;
	 }
	 
 }
  
  var activate_professional = function(_link)
 {
	 event.preventDefault();
	 var loc = _link.href;
	 var do_activate= confirm("Are you sure you want to activate?");
	 if(do_activate)
	 {
		 window.location = loc;
	 }
	 
 }
  
    var deactivate_professional = function(_link)
 {
	 event.preventDefault();
	 var loc = _link.href;
	 var do_deactivate= confirm("Are you sure you want to de-activate?");
	 if(do_deactivate)
	 {
		 window.location = loc;
	 }
	 
 }
  
  
  </script>      
    
    

@stop