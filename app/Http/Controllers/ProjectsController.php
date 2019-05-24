<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Project;

class ProjectsController extends Controller
{
    public function index(){
        $projects = Project::all();
        //return $projects;
       //return view('projects.index', ['projects' => $projects]);
        return view('projects.index', compact('projects'));
    }

    public function create(){
        return view('projects.create');
    }

    public function show(Project $project){
       // $project = Project::findOrFail($id);
        //return $project;
        return view('projects.show', compact('project'));
    }

    public function edit($id){
        $project = Project::findOrFail($id);
        return view('projects.edit', compact('project'));

    }

    public function update(Project $project){
        //$project = Project::find($id);
        /*$project->title = request('title');
        $project->description = request('description');
        $project->save();*/
        $project->update(request(['title', 'description']));

        return redirect('/projects');
    }

    public function destroy(Project $project){
        $project->delete();
        return redirect('/projects');
    }

    public function store(){
        Project::create([
            'title'=> request('title'),
            'description' => request('description')
        ]);
        /*$project = new Project();
        $project->title = request('title');
        $project->description = request('description');
        $project->save();*/

        return redirect('/projects');
        //return request()->all();
    }
}
