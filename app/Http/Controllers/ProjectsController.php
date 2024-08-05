<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Project;

class ProjectsController extends Controller
{
    public function index(){
        $projects = Project::all();
        return view('dashboard.bashboard-tables', compact('projects'));
    }

    public function add(){
        $project = new Project();
        $categories = Category::all();
        return view('dashboard.project_edit', compact('project', 'categories'));
    }

    public function store(Request $request)
    {
        $project = new Project();
        $project->name = $request->name;
        $project->description = $request->description;
        $project->category_id = $request->category_id;
        $project->save();

        return redirect()->route('projects')->with('success', 'Project created successfully');
    }

    public function edit($id){
        $project = Project::findOrFail($id);
        $categories = Category::all();
        return view('dashboard.project_edit', compact('project', 'categories'));
    }

    public function update(Request $request, $id){
        $project = Project::findOrFail($id);
        $project->update($request->all());
        return redirect()->route('project')->with('success', 'Project updated successfully');
    }
}
