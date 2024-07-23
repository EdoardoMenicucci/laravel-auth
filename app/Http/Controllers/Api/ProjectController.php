<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Type;

class ProjectController extends Controller
{

    public function index()
    {
        $projects = Project::with('type')->orderByDesc('id')->paginate(10);

        return response()->json([
            'success' => true,
            //::with('technologies','type') se vuoi importare anche i collegamenti alle altre tabelle del database EAGER LOADING
            'projects' => $projects
        ]);
    }

    public function show($id)
    {
        $project = Project::with('type')->where('id', $id)->first();
        if ($project) {
            return response()->json([
                'success' => true,
                'project' => $project
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Project not found'
            ]);
        }
    }
}
