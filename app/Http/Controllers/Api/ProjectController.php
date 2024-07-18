<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{

    public function index()
    {
        return response()->json([
            'success' => true,
            //::whit('technologies','type') se vuoi importare anche i collegamenti alle altre tabelle del database EAGER LOADING
            'projects' => Project::orderByDesc('id')->paginate(10)
        ]);
    }
}
