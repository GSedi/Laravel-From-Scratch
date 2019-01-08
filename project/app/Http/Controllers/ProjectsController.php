<?php

namespace App\Http\Controllers;

use App\{
    Project
};

class ProjectsController extends Controller
{
    public function index(){

        $projects = Project::all();

        // returns JSON format
        // return $projects;

        return view('project.index', with([
            'projects' => $projects,
        ]));

    }

    public function show(/*laravel route model binding*/Project $project){

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

        // Project::create([
        //     'title' => request('title'),

        //     'description' => request('description')
        // ]);

        // Project::create(request(['title', 'description']));
        Project::create($validated);

        // return $project;
        return redirect('/projects');
    }

    public function edit(Project $project){


        return view('project.edit', compact('project'));
    }

    public function update(Project $project){

        $project->update(request(['title', 'description']));

        return redirect('/projects');
    }

    public function destroy(Project $project){

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
