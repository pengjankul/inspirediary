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

Route::get('/', [
    'uses' => 'Homepage\FirstlookController@Index'
]);

 Route::group(['middleware' => ['admin'],'prefix'=>'admins'], function () {

 
       //Route::controller('/', 'Admins\DashboardController');
	Route::get('calendar',['as'=>'calendar','uses'=>'Admins\CalendarController@getIndex']);
	Route::get('/',['as' => 'home', function() {
		return view ('admin.dashboard.index');
	}]);

	Route::group(['prefix'=>'calendar'],function(){
		Route::post('/save','Admins\CalendarController@addEvent');
	});
	

 });




/*Route::group(['prefix'=>'admin','middleware'=>'auth','namespace'=>'Admins'],function(){
		Route::get('index',function(){
		 return 'Login Success!!';
		 });
	});*/

//Route::controller('admins','Admins\CalenderController');
/*Route::get('admins', [
    'middleware' => 'admin',
    'uses' => 'Admins\DashboardController@getIndex'
]);*/


//Route::controller('admins/index','Admins\DashboardController');


/*Route::get('check-connect',function(){ // check database connent
 if(DB::connection()->getDatabaseName())
 {
 return "Yes! successfully connected to the DB: " . DB::connection()->getDatabaseName();
 }else{
 return 'Connection False !!';
 }*/

/*	Route::controller('admin/login','Admins\LoginController');
	 
	// Start Online Page

});*/

Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');


/*Route::resource('projects','ProjectsController');
//Route::resource('tasks','TasksController');
Route::resource('projects.tasks', 'TasksController');

Route::bind('tasks', function($value, $route) {
	return App\Task::whereSlug($value)->first();
});
Route::bind('projects', function($value, $route) {
	return App\Project::whereSlug($value)->first();
});
Route::model('tasks', 'Tasks');
Route::model('projects', 'Projects');*/
//Route::controller('admins/calendar','Admins\CalenderController');

//Route::get('admins/calendar','Admins\CalenderController@getIndex');


//Route::get('test','TestController@index');

//Route::get('test-route',function(){ return View::make('test'); });

//Route::get('test-method1','TestController@getIndex');

//Route::controller('test-controller','TestController');

//Route::get('check-model','ProfileController@getIndex');

//Route::resource('admins','Admins\DashboardController');

