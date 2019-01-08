<?php

use App\Services\Twitter;
use App\Repositories\UserRepository;
use App\Notifications\SubscriptionRenewableFailed;
/*
------------------------------------------------------

		Sedvice Provider is a class that bootstraps a particular feature
		or component of the Laravel Framework

------------------------------------------------------
*/

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function (Twitter $twitter) {

	

	$user = auth()->user();

	$user->notify(new SubscriptionRenewableFailed);

    return view('welcome');
});

Route::get('/session', function(Request $request){

	$request->session()->put('foobaar', 'aasdfadsf');

	$request->session()->get('foobaar', 'default');

	// save all data at the form on page only for next request
	$request->flash();

});

Route::resource('projects', 'ProjectsController');
// Route::resource('projects', 'ProjectsController')->middleware('can:update,project');


Route::post('/projects/{project}/tasks', 'ProjectTasksController@store');

Route::patch('/tasks/{task}', 'ProjectTasksController@update');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
