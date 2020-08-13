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
//use Illuminate\Support\Facades\Input;

use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
 

class ProfessionalController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Default Professional Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'ProfessionalController@showRegister');
	|
	*/

	/*public function __construct()
	{
		$this->beforeFilter('auth', array('only' => 'showProfile'));
		$this->beforeFilter('csrf', array('except' => 'index'));
	}*/
	
	/*public function showHello()
	{
		
		$user=new User();
	   
	  
	   $user->admin_username="admin"; 
	   $user->password=Hash::make("password01");
	  
	   $user->account_type="2";
	   
	   $user->save();
		return view('welcome');
	}*/
	public function showRegister()
	{
		$country = DB::table('country')->lists('country','country_id');
		$profession = DB::table('professions')->lists('profession_name','id');
	
		return view('register')->with(array('country'=>$country,
												  'profession'=>$profession
		
													));
		
	}
	
	public function getState()
	{
		$country_id = Input::get('country_id');
		$resultset = DB::table('state')->where('country_id', '=', $country_id)->get();
		
		return $resultset;
	
	}
	
	public function doRegister()
	{
		//return 'register here';
	$validator = Validator::make(
        Input::all(),
        array(
		  'firstname' => 'required|max:255',
		  'middlename' => 'required|max:255',
		  'lastname' => 'required|max:255',
		  //'pro_name' => array('required'),
		  'email' => 'required|email|unique:users',
		  'password'=>'required',
          'confirm_password' => 'required|same:password',
		  'gender' => 'required',
		  'profession' => 'required',
          'country' => 'required',
		 //'state' => array('required'),
		 'city' => 'required',
		 'address' => 'required',
		  'phone' => 'required',
		 
        )
    );
	
	 //return 'hello';
	
	 if ($validator->passes()){
		 
		
		$professionals=User::where('account_type', '=', '1')->get();
		
		$professionalcount = count($professionals);
		
		$professionalcount++;
		
		$rand_no = rand(5000,900000);
		
		$pro_id = "FFP".date('Y').$rand_no.$professionalcount;
		$background = "background";
		$profile = "profile";
		$projectFolder = "projects";
		
		
		$dirPath = 'ffpimages/' .$pro_id;
		$dirbackPhoto =  $dirPath .'/' .$background;
		$dirprofilePhoto =  $dirPath .'/' .$profile;
		$dirProject =  $dirPath .'/' .$projectFolder;

		
		
		
		Storage::makeDirectory($dirPath);
		Storage::makeDirectory($dirbackPhoto);
		Storage::makeDirectory($dirprofilePhoto);
		Storage::makeDirectory($dirProject);

		
		
		
       $user=new User();
	   
	   $user->pro_id=$pro_id;
	   $user->firstname=Input::get('firstname');
	   $user->middlename=Input::get('middlename');
	   $user->lastname=Input::get('lastname');
	   //$user->artist_name=Input::get('artist_name');
	   $user->email=Input::get('email'); 
	   $user->password=Hash::make(Input::get('password'));
	   $user->gender=Input::get('gender');
	   $user->profession_id=Input::get('profession'); 
	    
	   $prof_country = DB::table('country')->where('country_id', Input::get('country'))->first();
	   //$prof_state = DB::table('state')->where('state_id', Input::get('state'))->first();
	   $professions = DB::table('professions')->where('id', Input::get('profession'))->first();
	   
	   $user->country=$prof_country->country;
	   //$user->state=$prof_state->state;
	   $user->profession=$professions->profession_name;
	   
	   $user->city=Input::get('city');
	   $user->address=Input::get('address');
	   $user->phone=Input::get('phone');
	   $user->alt_phone=Input::get('alt_phone');
	   $user->active="0";
	   $user->account_type="1";
	   
	   $user->save();
	   
	   
	   $firstname=Input::get('firstname');
	   $middlename=Input::get('middlename');
	   $lastname=Input::get('lastname');
	   //$prof_name = Input::get('prof_name');
	   $email = Input::get('email');
	   $gender = Input::get('gender');
	   $profession = Input::get('profession');
	   $country=$prof_country->country; 
	   //$state=$prof_state->state;
	   $city=Input::get('city');
	   $address = Input::get('address');
	   $phone = Input::get('phone');
	   
	   $full_details = array($firstname,$lastname,$email,$gender,$profession,$country,/*$state*/$city,$address,$phone);
	   
	  
	   $admin_email = "yimicsidris@gmail.com";
	   $admin = array('admin_email'=>$admin_email);
		 
		/*Mail::send('emails.professionalRegister',array('full_details'=> $full_details), function($message) use ($admin)
		{
		  $message->to($admin['admin_email'], 'Admin')->to('yimicsidris@gmail.com', 'Admin')->subject('Folioforpro New Professional Registration!');
				 
		});*/
	  
      Session::flash('msg', 'Registration successful! Please wait for activation via your email, this might take some time. Thanks');
	  
		 return redirect('register');
		
		 
		 }else{
		   return redirect('register')->with(
            'error',
            'Please correct the following errors:')
			->withErrors($validator)
			->withInput();
		
		 
		 }
		
	}
	
	public function showLogin()
	{
		return view('login');
	}
	
	public function doLogin()
	{
		$validator = Validator::make(
			Input::all(),
			array(
			  'loginemail' => array('required', 'email'),
			  'password' => array('required')
				 
			)
		);
		
		
		 if ($validator->passes()){
			 
			 
			 $professionaldata = array(
			'email'     => Input::get('loginemail'),
			'password'  => Input::get('password'),
			'active' => "1"
		);
			if (Auth::attempt($professionaldata)) {
				
				//return "Hello";
		
				// validation successful!
				// redirect them to the secure section or whatever
				$professional_email = Input::get('loginemail');
				
				$userresults=User::where('email', '=', $professional_email)->first();
				
				
				 Session::put('firstname', $userresults->firstname);
				 Session::put('lastname', $userresults->lastname);
	             Session::put('email', $userresults->email);
				 Session::put('uid', $userresults->uid);
				 
				
				return redirect('professional/profile');
				
		
			} else {        
		
				// validation not successful, send back to form 
				return redirect('login')->with('flash_error', 'Your username/password combination was incorrect.')
            ->withInput();
				
				
		
			}
			
	
			 
		}else{
			   return redirect('login')->with(
				'error',
				'Please correct the following errors:'
			)->withErrors($validator);
			
			 
			 }
	
	 //return 'Login here';
		
	}
	
	public function doLogout()
	{
		Session::flush();
	
	 	Auth::logout();
	
	  	return redirect('/');
	}
	
	public function showProfile()
	{
		$uid = Session::get('uid');
		$professional = User::where('uid', '=', $uid)->first();
	
	  	return view('professional/profile')->with(array('professional'=>$professional
		
		
													
													));
	}
	
	
	public function aboutMe()
	{
		
	$uid = Session::get('uid');
	
	//return $uid;
	
	$aboutme = Input::get('aboutme');
	
	
	DB::table('users')->where('uid', '=', $uid)->update(array('about_me' =>$aboutme));
	
		Session::flash('aboutme_status','About Me successfully updated!');
	  	return  redirect('professional/profile');
	}

	public function skillS()
	{
		
	$uid = Session::get('uid');
	
	//return $uid;
	
	$skills = Input::get('skills');
	
	
	DB::table('users')->where('uid', '=', $uid)->update(array('skills' =>$skills));
	
		Session::flash('skills_status','Skills successfully updated!');
	  	return  redirect('professional/profile');
	}
	
	public function backImage()
	{
		
	$uid = Session::get('uid');
	//$pro_id = Session::get('pro_id');
	$proff = User::where('uid', '=', $uid)->first();
	
	//return $uid;
	
	$back_image1=Input::get('back_image1');
	

	//return $back_image1;
	
	if($back_image1 == "secret"){
		
		Session::flash('backimg_error', 'Image cannot be left empty.');
		
		return redirect('professional/profile');
		
		}

	//upload image  to server
	
	
	// requires php5
	define('UPLOAD_DIR', 'ffpimages/'.$proff->pro_id.'/background/');
	$back_image1 = str_replace('data:image/png;base64,', '', $back_image1);
	$back_image1 = str_replace(' ', '+', $back_image1);
	$data1 = base64_decode($back_image1);
	$image_name1 = uniqid() . '.png';
	$file1 = UPLOAD_DIR . $image_name1;
	$success1 = Storage::put($file1, $data1);
	
	$imagename1 = $image_name1;
	
	
       
	   DB::table('users')->where('uid', '=', $uid)->update(array('background_photo' => $imagename1));


        Session::flash('back_status', 'Your background image has been uploaded!');
		
		return redirect('professional/profile');
	
	}
	
										/* PROFILE PHOTO */
	public function photoImage()
	{
		
	$uid = Session::get('uid');
	//$pro_id = Session::get('pro_id');
	
	$proff = User::where('uid', '=', $uid)->first();
	
	//return $uid;
	
	$photo_image1=Input::get('photo_image1');
	

	//return $back_image1;
	
	if($photo_image1 == "secret"){
		
		Session::flash('photoimg_error', 'Image cannot be left empty.');
		
		return redirect('professional/profile');
		
		}

	//upload image  to server
	
	
	// requires php5
	define('UPLOAD_DIR', 'ffpimages/'.$proff->pro_id.'/profile/');
	$photo_image1 = str_replace('data:image/png;base64,', '', $photo_image1);
	$photo_image1 = str_replace(' ', '+', $photo_image1);
	$data2 = base64_decode($photo_image1);
	$image_name2 = uniqid() . '.png';
	$file2 = UPLOAD_DIR . $image_name2;
	$success2 = Storage::put($file2, $data2);
	
	$imagename2 = $image_name2;
	
	
       
	   DB::table('users')->where('uid', '=', $uid)->update(array('photo' => $imagename2));


        Session::flash('photo_status', 'Your profile photo has been uploaded!');
		
		return redirect('professional/profile');
	}
	
	public function showAddproject()
	{
		
		$uid = Session::get('uid');
		$proff = User::where('uid','=', $uid)->first();
		
		$projects = Project::where('pro_id', '=', $proff->pro_id)->lists('proj_name', 'pid');
		//$projects = DB::table('projects')->lists('proj_name','proj_id');
	
	  	return view('professional/add-project')->with(array('projects'=>$projects
	
													
													));
	}
	
	
											/*END PROFILE PHOTO */
	
	
	public function addProject()
	{
		
		$uid = Session::get('uid');
		
		$proff = User::where('uid','=', $uid)->first();
		$pro_id = $proff->pro_id;
	
		//return $uid;
	
		$project_name = Input::get('project_name');
		$project_url = Input::get('project_url');
		
	
		$dirPath = 'ffpimages/' .$pro_id .'/projects';
		$dirProjectName =  $dirPath .'/' .$project_name;
		
		Storage::makeDirectory($dirProjectName);
		
	
		DB::table('projects')->insert(array('proj_name' =>$project_name, 'pro_id' =>$pro_id));
	
		Session::flash('project_status','Project successfully added!');
	  	return  redirect('professional/add-project');
	}
	
	
	public function addUrl()
	{
		
		$project_id = Input::get('project_id');
	
		//return $uid;
	
		$project_url = Input::get('project_url');
		
		
		DB::table('projects')->where('pid', '=', $project_id)->update(array('project_url' =>$project_url));
	
		Session::flash('url_status','URL successfully added!');
	  	return  redirect('professional/add-project');
	}
	
	
	public function addWork()
	{
		
	
		$uid = Session::get('uid');
		
		
		$project_id = Input::get('projectid');
		$work_name = Input::get('work_name');
		$work_desc = Input::get('work_desc');
		
		
		$proff = User::where('uid', '=', $uid)->first();
		$projj = Project::where('pid', Input::get('projectid'))->first();
		
		
		
		$work_image1=Input::get('work_image1');
		
	
		//return $back_image1;
		
		if($work_image1 == "secret"){
			
			Session::flash('working_error', 'Image cannot be left empty.');
			
			return redirect('professional/add-project');
			
			}
	
		//upload image  to server
		
		
		// requires php5
		define('UPLOAD_DIR', 'ffpimages/'.$proff->pro_id.'/projects/'.$projj->proj_name.'/');
		$work_image1 = str_replace('data:image/png;base64,', '', $work_image1);
		$work_image1 = str_replace(' ', '+', $work_image1);
		$data3 = base64_decode($work_image1);
		$image_name3 = uniqid() . '.png';
		$file3 = UPLOAD_DIR . $image_name3;
		$success3 = Storage::put($file3, $data3);
		
		$imagename3 = $image_name3;
		
		$pro_id = $proff->pro_id;
		$pro_name = $proff->lastname.' '.$proff->firstname;
		$proj_name = $projj->proj_name;
		
		
		   
		   DB::table('portfolios')->insert(array('proj_id' => $project_id, 'pro_id' => $pro_id, 'proj_name' => $proj_name, 'name' => $work_name, 'pro_name' => $pro_name, 'image' => $imagename3, 'description' => $work_desc ));
	
	
			Session::flash('work_status', 'Your work has been uploaded!');
			
			return redirect('professional/add-project');
		}
		
		
		
		public function showEditProjWork()
	{
		
		$pro_id = Session::get('pro_id');
		
		$table = 'portfolios';
		
		$uid = Session::get('uid');
		
		$proff = User::where('uid','=', $uid)->first();
		
		$projects = Project::where('pro_id', '=', $proff->pro_id)->lists('proj_name', 'pid');
		
		$project_name = Project::where('pro_id', '=', $proff->pro_id)->first();
	
		$work_details = DB::table($table)->where('pro_id', '=', $proff->pro_id)->orderBy('pfid', 'desc')->paginate(12);

		
			
	  	return  view('professional/edit-proj-work')->with(array('work_details'=>$work_details,
																	  'projects'=>$projects,
																	  'project_name'=>$project_name
		
		
		
																	
																	));
	}
	
	
	public function editUrl()
	{
		
		$project_id = Input::get('project_id');
	
		//return $uid;
	
		$project_url = Input::get('project_url');
		
		
		DB::table('projects')->where('pid', '=', $project_id)->update(array('project_url' =>$project_url));
	
		Session::flash('urledit_status','URL successfully updated!');
	  	return  redirect('professional/edit-proj-work');
	}
	
	public function editWork()
	{
		$table = 'portfolios';
		$work_name = Input::get('work_name');
		$work_desc = Input::get('work_desc');
		
		$work_id = Input::get('work_id');
		
		
		DB::table($table)->where('pfid', '=', $work_id)->update(array('name' =>$work_name, 'description' =>$work_desc));
	
		//Session::flash('workedit_status','Work successfully updated!');
	  	//return  Redirect::to('professional/edit-proj-work');
		
		return "success";
	}
	
	
	public function deleteWork($projId,$work_id)
	{
		$table = 'portfolios';
		$id = $work_id;
		$uid = Session::get('uid');
		
		$proff = User::where('uid','=', $uid)->first();
		
		DB::table($table)->where('pfid', '=', $id)->where('pro_id', '=', $proff->pro_id)->delete();

	  	return  redirect('professional/edit-proj-work');
	}
	
	
	
	
}



