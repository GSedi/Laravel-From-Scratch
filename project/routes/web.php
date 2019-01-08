<?php

use App\Services\Twitter;
use App\Repositories\UserRepository;


### Service Container ----------------------------
// app()->bind('example', function(){

// 	return new \App\Example;
// 	# dd(app('example'), app('example')) different instances
// });

// app()->singleton('example', function(){

// 	return new \App\Example;
// 	# dd(app('example'), app('example')) same instances
// });



// dd(app('App\Example')); # Autoresolving instead of bind



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

Route::get('/', function (UserRepository $users) {

	// dd(app(Twitter::class));

	dd($users);

    return view('welcome');
});

/*

    GET	/projects		(index)
		
	GET	/projects/create	(create) form

	GET	/projects/1		(show)

	GET	/projects/1/edit 	(edit)	form

	POST	/projects		(store)

	PATCH	/projects/1		(update)

	PUT	/projects/1		(update)

	DELETE	/projects/1		(destroy)

*/


/*Route::get('/projects', 'ProjectsController@index');

Route::get('/projects/create', 'ProjectsController@create');

Route::get('/projects/{project}', 'ProjectsController@show');

Route::post('/projects', 'ProjectsController@store');

Route::get('/projects/{project}/edit', 'ProjectsController@edit');

Route::patch('/projects/{project}', 'ProjectsController@update');

Route::delete('/projects/{project}', 'ProjectsController@destroy');
*/

Route::resource('projects', 'ProjectsController');


Route::post('/projects/{project}/tasks', 'ProjectTasksController@store');

Route::patch('/tasks/{task}', 'ProjectTasksController@update');