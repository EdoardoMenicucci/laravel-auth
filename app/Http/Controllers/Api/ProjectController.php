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
            //::whit('technologies','type') se vuoi importare anche i collegamenti alle altre tabelle del database EAGER LOADING
            'projects' => $projects
        ]);
    }
}
