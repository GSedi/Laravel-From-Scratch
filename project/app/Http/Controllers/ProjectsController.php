<?php

namespace App\Http\Controllers;

use App\{
    Project
};
use App\Mail\ProjectCreated;

class ProjectsController extends Controller
{

    public function __construct()
    {
        // $this->middleware('auth')->only(['methodname']);
        // $this->middleware('auth')->except(['methodname']);
        $this->middleware('auth');
    }


    public function index(){

        #auth()->id(); // authenticated user id or null

        #auth()->user(); // authenticated user

        #auth()->check(); //boolean

        // $projects = Project::where('owner_id', auth()->id())->get();

        $projects = auth()->user()->projects;

        // returns JSON format
        // return $projects;

        return view('project.index', with([
            'projects' => $projects,
        ]));

    }

    public function show(/*laravel route model binding*/Project $project){

        // if ($project->owner_id != auth()->id()){
        //     abort(403);
        // }
        #// abort_if($project->owner_id != auth()->id(), 403);
        $this->authorize('update', $project);


        return view('project.show', compact('project'));

    }

    public function create(){

        return view('project.create');

    }

    public function store(){
        
        $validated = request()->validate([

            'title' => [
                'required',
                'min:3',
                'max:255',
            ],
            'description' => [
                'required',
                'min:3',
            ],

        ]);

        $validated['owner_id'] = auth()->id();

        Project::create($validated);

        return redirect('/projects');
    }

    public function edit(Project $project){

        $this->authorize('update', $project);
        return view('project.edit', compact('project'));
    }

    public function update(Project $project){

        $this->authorize('update', $project);

        $validated = request()->validate([

            'title' => [
                'required',
                'min:3',
                'max:255',
            ],
            'description' => [
                'required',
                'min:3',
            ],

        ]);

        $project->update(request($validated)); 

        return redirect('/projects');
    }

    public function destroy(Project $project){

        $this->authorize('update', $project);
        $project->delete();

        return redirect('/projects');
    }


}


// public function index(){

//     $projects = Project::all();

//     // returns JSON format
//     // return $projects;

//     return view('project.index', with([
//         'projects' => $projects,
//     ]));

// }

// public function show($id){

//     $project = Project::findOrFail($id);

//     return view('project.show', compact('project'));

// }

// public function create(){

//     return view('project.create');

// }

// public function store(){
    
//     $project = new Project;

//     $project->title = request('title');

//     $project->description = request('description');

//     $project->save();

//     // return $project;
//     return redirect('/projects');
// }

// public function edit($id){

//     $project = Project::findOrFail($id);

//     return view('project.edit', compact('project'));
// }

// public function update($id){

//     $project = Project::findOrFail($id);

//     $project->title = request('title');

//     $project->description = request('description');

//     $project->save();

//     return redirect('/projects');
// }

// public function destroy($id){

//     Project::findOrFail($id)->delete();

//     return redirect('/projects');
// }
