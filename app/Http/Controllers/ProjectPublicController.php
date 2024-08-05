<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectPublicController extends Controller
{
    public function index(){
        $projects = Project::all();
        return view('pages.projects', compact('projects'));
    }

    public function projectDetails($id){
        $project = Project::findOrFail($id);
        return view('pages.project-details', compact('project'));
    }
}
