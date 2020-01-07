<?php 


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*Route::get('/', 'WelcomeController@index');
*/

/*Route::controllers(array(
	auth' => 'Auth\AuthController',
	password' => 'Auth\PasswordController',
));*/
/*App::missing(function($exception)
{
	//return Response::make(View::make('error404'),404);
	return response('errorpage',array(),404);
});*/

Route::get('/welcome', 'ProfessionalController@showHello');




Route::get('/', 'HomeController@showIndex');
Route::get('index', 'HomeController@showIndex');

Route::get('professionals/{prof_name}', 'HomeController@showProfessionals');


				/* REGISTER */
Route::get('register', 'ProfessionalController@showRegister');
Route::post('prof-register', 'ProfessionalController@doRegister');

				/* LOGIN */
Route::get('login', 'ProfessionalController@showLogin');
Route::post('prof-login', 'ProfessionalController@doLogin');

Route::get('state', 'ProfessionalController@getState');

Route::get('logout', 'ProfessionalController@doLogout');


Route::get('professional/profile',array('middleware'=>'auth','uses'=>'ProfessionalController@showProfile'));


Route::post('back_photo','ProfessionalController@backImage');
Route::post('photo','ProfessionalController@photoImage');
Route::post('aboutme','ProfessionalController@aboutMe');
Route::post('skills','ProfessionalController@skillS');

Route::get('professional/add-project',array('middleware'=>'auth','uses'=>'ProfessionalController@showAddproject'));
Route::post('project_upload','ProfessionalController@addProject');
Route::post('work_upload','ProfessionalController@addWork');
Route::post('url_upload','ProfessionalController@addUrl');

Route::get('professional/edit-proj-work',array('middleware'=>'auth','uses'=>'ProfessionalController@showEditProjWork'));
Route::post('professional/edit-proj-work','ProfessionalController@editWork');
Route::post('url_edit','ProfessionalController@editUrl');
Route::get('professional/delete_work/{projId}/{work_id}',array('middleware'=>'auth','uses'=>'ProfessionalController@deleteWork'));
	

Route::get('aboutme/{puid}','HomeController@showAboutme');

Route::get('admin','AdminController@showLogin');
Route::post('admin/login','AdminController@doLogin');
Route::get('admin/index',array('middleware'=>'auth','uses'=>'AdminController@showIndex'));
Route::get('admin/add-admin',array('middleware'=>'auth','uses'=>'AdminController@showAddadmin'));
Route::post('admin/add-admin','AdminController@doAddadmin');
Route::get('admin/view_professionals',array('middleware'=>'auth','uses'=>'AdminController@viewProfessional'));
Route::get('admin/activate_professionals/{profId}',array('middleware'=>'auth','uses'=>'AdminController@activateProf'));
Route::get('admin/deactivate_professionals/{profId}',array('middleware'=>'auth','uses'=>'AdminController@deactivateProf'));
Route::get('admin/delete_professionals/{profId}',array('middleware'=>'auth','uses'=>'AdminController@deleteProf'));
Route::get('logoutadmin','AdminController@logoutAdmin');

Route::get('password/reset', function(){
	
	return View::make('password/remind');
	
	});
Route::get('password/reset/{token}','RemindersController@getReset' );
Route::post('postRemind','RemindersController@postRemind' );
Route::post('postReset','RemindersController@postReset' );
Route::get('password/success', function(){
	
	return View::make('password/success');
	
	});