<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;


class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();

        return response()->json([
            'message' => 'projects retreived successfully!',
            'projects' => $projects
        ], 200);
    }

    public function index_dash()
    {
        $projects = Project::orderBy('created_at', 'DESC')->paginate(6);
        return view('back.projects.index_dash', compact('projects'));
    }


    public function store(Request $request)
    {

        $projects = Project::create($request->all());

        return response()->json([
            'message' => 'projects created successfully!',
            'projects' => $projects
        ], 200);
    }

    public function show($id)
    {
        $projects = Project::find($id);

        return response()->json([
            'message' => 'projects retreived successfully!',
            'projects' => $projects
        ], 200);
    }

    public function update(Request $request,$id)
    {
        $project = Project::find($id);
        $project->update($request->all());

        return response()->json([
            'message' => 'project updated successfully!',
            'project' => $project
        ], 200);
    }
 
    public function destroy($id)
    {
        $project = Project::destroy($id);

        return response()->json([
            'message' => 'project deleted successfully!',
            'project' => $project
        ], 200);
    }
}
