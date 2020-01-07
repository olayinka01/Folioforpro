<?php 

namespace App\Http\Controllers;

use DB;
use App\User;
use App\Project;
use App\Profession;
use App\Portfolio;
use App\Http\Controllers\Controller;

class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	/*public function __construct()
	{
		$this->middleware('auth');
	}*/

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	/*public function index()
	{
		return view('index');
	}*/
	
	public function showIndex()
	{
		
		  $menutype2 = DB::table('professions')->where('id','2')->get();
		  $menutype3 = DB::table('professions')->where('id','3')->get();
		  $menutype4 = DB::table('professions')->where('id','4')->get();
		  $menutype5 = DB::table('professions')->where('id','5')->get();
		  $menutype6 = DB::table('professions')->where('id','6')->get();
		  $menutype7 = DB::table('professions')->where('id','7')->get();
		  $menutype8 = DB::table('professions')->where('id','8')->get();
		  $menutype9 = DB::table('professions')->where('id','9')->get();
		  $menutype10 = DB::table('professions')->where('id','10')->get();
		  $menutype11 = DB::table('professions')->where('id','11')->get();
		  $menutype12 = DB::table('professions')->where('id','12')->get();
		  $menutype13 = DB::table('professions')->where('id','13')->get();

		
	 	  $professionals = DB::table('users')->where('account_type', '=', '1')->orderBy('uid', 'desc')->paginate(12);
		  $works = DB::table('portfolios')->first();
		  
		return view('index')->with(array(
											   'professionals'=>$professionals,
											   'menutype2'=>$menutype2,
											   'menutype3'=>$menutype3,
											   'menutype4'=>$menutype4,
											   'menutype5'=>$menutype5,
											   'menutype6'=>$menutype6,
											   'menutype7'=>$menutype7,
											   'menutype8'=>$menutype8,
											   'menutype9'=>$menutype9,
											   'menutype10'=>$menutype10,
											   'menutype11'=>$menutype11,
											   'menutype12'=>$menutype12,
											   'menutype13'=>$menutype13,
											   
											   ));

}

public function showAboutme($puid)
	{
		
		
		$uid = $puid;
		
		
	 	$proff_details = User::where('uid', '=', $uid)->first();
		
		$project_details = Project::where('pro_id', '=', $proff_details->pro_id)->orderBy('pid', 'desc')->paginate(12);
		$work_details = Portfolio::where('pro_id', '=', $proff_details->pro_id)->orderBy('pfid', 'desc')->paginate(12);
		
		  
		return view('aboutme')->with(array('proff_details'=>$proff_details,
												 //'proj'=>$proj,
												 'project_details'=>$project_details,
												 'work_details'=>$work_details
												 
											   											   
											   ));
	}
	
	
	public function showProfessionals($prof_name)
	{
		
		  $profession_name = $prof_name;
		
		  $menutype2 = DB::table('professions')->where('id','2')->get();
		  $menutype3 = DB::table('professions')->where('id','3')->get();
		  $menutype4 = DB::table('professions')->where('id','4')->get();
		  $menutype5 = DB::table('professions')->where('id','5')->get();
		  $menutype6 = DB::table('professions')->where('id','6')->get();
		  $menutype7 = DB::table('professions')->where('id','7')->get();
		  $menutype8 = DB::table('professions')->where('id','8')->get();
		  $menutype9 = DB::table('professions')->where('id','9')->get();
		  $menutype10 = DB::table('professions')->where('id','10')->get();
		  $menutype11 = DB::table('professions')->where('id','11')->get();
		  $menutype12 = DB::table('professions')->where('id','12')->get();
		  $menutype13 = DB::table('professions')->where('id','13')->get();

		
	 	  $profesnals = DB::table('users')->where('profession', '=', $profession_name)->where('account_type', '=', '1')->orderBy('uid', 'desc')->paginate(12);
		  
		return view('professionals')->with(array(
											   'profesnals'=>$profesnals,
											   'menutype2'=>$menutype2,
											   'menutype3'=>$menutype3,
											   'menutype4'=>$menutype4,
											   'menutype5'=>$menutype5,
											   'menutype6'=>$menutype6,
											   'menutype7'=>$menutype7,
											   'menutype8'=>$menutype8,
											   'menutype9'=>$menutype9,
											   'menutype10'=>$menutype10,
											   'menutype11'=>$menutype11,
											   'menutype12'=>$menutype12,
											   'menutype13'=>$menutype13,
											   
											   ));
	}

}
