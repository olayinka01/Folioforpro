<?php
namespace App\Http\Controllers;

use DB;
use Auth;
use Validator;
use App\User;
use App\Project;
use App\Profession;
use App\Portfolio;
use Input;
use Storage;
use Hash;
use Mail;
use Session;
use App\Http\Controllers\Controller;

class AdminController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	
	public function showIndex()
	{
		
		$arch_eng = DB::table('users')->where('profession_id', '=', '1')->get();
		$prod_eng = DB::table('users')->where('profession_id', '=', '2')->get();
		$soft_eng = DB::table('users')->where('profession_id', '=', '4')->get();
		$auto_eng = DB::table('users')->where('profession_id', '=', '5')->get();
		$civi_eng = DB::table('users')->where('profession_id', '=', '6')->get();
		$elec_eng = DB::table('users')->where('profession_id', '=', '7')->get();
		$indu_eng = DB::table('users')->where('profession_id', '=', '8')->get();
		$comp_eng = DB::table('users')->where('profession_id', '=', '9')->get();
		$micr_eng = DB::table('users')->where('profession_id', '=', '10')->get();
		$food_eng = DB::table('users')->where('profession_id', '=', '11')->get();
		$geol_eng = DB::table('users')->where('profession_id', '=', '12')->get();
		$envi_eng = DB::table('users')->where('profession_id', '=', '13')->get();
		
  		

		$total_archengs = count($arch_eng);
		$total_prodengs = count($prod_eng);
		$total_softengs = count($soft_eng);
		$total_autoengs = count($auto_eng);
		$total_civiengs = count($civi_eng);
		$total_elecengs = count($elec_eng);
		$total_induengs = count($indu_eng);
		$total_compengs = count($comp_eng);
		$total_micrengs = count($micr_eng);
		$total_foodengs = count($food_eng);
		$total_geolengs = count($geol_eng);
		$total_enviengs = count($envi_eng);
		
		$professionals = User::where('account_type', '=', '1')->orderBy('uid', 'desc')->paginate(20);
	  

		return view('admin/index')->with(array('total_archengs'=>$total_prodengs,'total_prodengs'=>$total_archengs,'total_softengs'=>$total_softengs,'total_autoengs'=>$total_autoengs,'total_civiengs'=>$total_civiengs,'total_elecengs'=>$total_elecengs,'total_induengs'=>$total_induengs,'total_compengs'=>$total_compengs,'total_micrengs'=>$total_micrengs,'total_foodengs'=>$total_foodengs,'total_geolengs'=>$total_geolengs,'total_enviengs'=>$total_enviengs,'professionals'=>$professionals
	 
	 
	 																	));	
	 
	 }
	
	
	public function showLogin()
	{
		return view('admin/login');
	}
	
	
	public function doLogin()
	{
		
		
	$validator = Validator::make(
			Input::all(),
			array(
			  'username' => 'required',
			  'password' => 'required'
				 
			)
		);
		
		
		 if ($validator->passes()){
			 
			 
			 $admindata = array(
			'admin_username'     => Input::get('username'),
			'password'  => Input::get('password')
		);
			if (Auth::attempt($admindata)) {
				
				//return "Hello";
		
				// validation successful!
				// redirect them to the secure section or whatever
				$username = Input::get('username');
				
				$userresults=User::where('admin_username', '=', $username)->first();
				
			//return('hello');
				
				return redirect('admin/index');
				
		
			} else {        
		
				// validation not successful, send back to form 
				return redirect('admin')->with('flash_error', 'Your username/password combination was incorrect.')
            ->withInput();
				
				
		
			}
			
	
			 
		}else{
			   return redirect('admin')->with(
				'error',
				'Please correct the following errors:'
			)->withErrors($validator);
			
			 
			 }
	}
	
	
	public function showAddadmin()
	{
		return view('admin/add-admin');
	}
	
	public function doAddadmin()
	{
		$validator = Validator::make(
			Input::all(),
			array(
			  'admin_username' =>  'required|unique:users',
			  'password' => 'required'
				 
			)
		);
		
		
			  if ($validator->passes()){
			 
			
		   $user = new User();
		   
		  
		   $user->admin_username=Input::get('admin_username'); 
		   $user->password=Hash::make(Input::get('password'));
		  
		   $user->account_type="2";
		   
		   $user->save();
		   
		  Session::flash('admin_msg','Admin successfully created!');
		  
			 return redirect('admin/add-admin');
			
			 
			 }else{
			   return redirect('admin/add-admin')->with(
				'error',
				'Please correct the following errors:'
			)->withErrors($validator);
		
		 
		 }
	}
	
	public function viewProfessional()
	{
		 $professional_details = DB::table('users')->where('account_type', '=', '1')->orderBy('uid', 'desc')->paginate(20);
	  

	 return view('admin/view_professionals')->with(array('professional_details'=>$professional_details));
	}
	
	
	public function activateProf($profId)
	{
		$prof_id = $profId;
	   
	  // return($vendor_id);
	   
	   DB::table('users')->where('uid', '=', $prof_id)->update(array('active'=>'1'));
	   
	   $professional_details = DB::table('users')->where('uid', '=', $prof_id)->first();
		
		//return $vendor_details->vend_email;
		
		  $professional_email = $professional_details->email;
	      $professional = array('professional_email'=>$professional_email);
		 
		/*Mail::send('emails.activate_professional',array('professional_details'=>$professional_details), function($message) use ($professional)
		{
		  $message->to($professional['professional_email'], 'Professional')
				  ->subject('Folioforpro Activation!');
		});*/
	   
	   Session::flash('active_msg','Professional successfully activated!');
	  return redirect('admin/view_professionals');
	}
	
	
	public function deactivateProf($profId)
	{
		$prof_id = $profId;
	   
	  // return($vendor_id);
	   
	   DB::table('users')->where('uid', '=', $prof_id)->update(array('active'=>'0'));
	   
	   $professional_details = DB::table('users')->where('uid', '=', $prof_id)->first();
		
	   
	   Session::flash('deactive_msg','Professional successfully deactivated!');
	  return redirect('admin/view_professionals');
	}
	
	
	public function deleteProf($profId)
	{
		$prof_id = $profId;
	   
	  // return($vendor_id);
	   
	   DB::table('users')->where('uid', '=', $prof_id)->delete();
	   
	   $professional_details = DB::table('users')->where('uid', '=', $prof_id)->first();
		
	   
	   Session::flash('delete_msg','Professional successfully deleted!');
	  return redirect('admin/view_professionals');
	}
	
	
	public function logoutAdmin()
	{
		Session::flush();
	
	 	Auth::logout();
	
	  	return redirect('admin');
	}
	
	
	
	
	
}
