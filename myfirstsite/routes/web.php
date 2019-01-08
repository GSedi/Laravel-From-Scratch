<?php

use SebastianBergmann\Diff\Output\AbstractChunkOutputBuilder;
use function foo\func;
use function bar\baz\foo;

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


Route::get('/', 'PagesController@home');

Route::get('/about', 'PagesController@about');

Route::get('/contact', 'PagesController@contact');

// Route::get('/', function () {

    // $tasks = [
    //     'Go to the store',
    //     'Go to the market',
    //     'Go to work'
    // ];
    

    // return view('welcome', [
    //     'tasks' => $tasks,
    // ]);

//     // return view('welcome')->withTasks($tasks);

//     // return view('welcome')->with([
//     //     'tasks' => ['some task',]
//     // ]);
// });


// Route::get('/contact', function(){
//     return view('contact');
// });

// Route::get('/about', function(){
//     return view('about');
// });


