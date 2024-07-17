<?php

namespace App\Http\Controllers\Admin;

use App\Models\Project;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;


class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::all();
        $data = ['projects' => $projects];
        //$user = Auth::user();

        // if ($user) {
        return view('admin.project.index', $data);
        // } else {
        //     return view('welcome', $data);
        // }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.project.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProjectRequest $request)
    {
        $data = $request->all();

        $newProject = new Project();
        $newProject->name = $data['name'];
        $newProject->description = $data['description'];
        $newProject->start_date = $data['start_date'];

        if ($request->has('img')) {
            // Salvo l'immagine nella cartella public/uploads
            $image_path = Storage::put('uploads', $request->img);
            $newProject->img = $image_path;
        }

        if (empty($data['end_date'])) {
            $newProject->status = 0;
        } else {
            $newProject->end_date = $data['end_date'];
            $newProject->status = 1;
        }

        $newProject->save();

        return redirect()->route('admin.project.show', $newProject);
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        $data = ['project' => $project];

        return view('admin.project.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        $data = ['project' => $project];
        return view('admin.project.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProjectRequest $request, Project $project)
    {
        $data = $request->all();

        $project->name = $data['name'];
        $project->description = $data['description'];
        $project->start_date = $data['start_date'];

        if ($request->has('img')) {
            // Salvo l'immagine nella cartella public/uploads
            $image_path = Storage::put('uploads', $request->img);
            $project->img = $image_path;

            if ($project->img && !Str::start($project->img, 'http')) {
                //Elimino dalla cartella public la vecchia immagine se esiste
                Storage::delete($project->img);
            }
        }

        if (empty($data['end_date'])) {
            $project->status = 0;
        } else {
            $project->end_date = $data['end_date'];
            $project->status = 1;
        }

        $project->save();

        return redirect()->route('admin.project.show', $project);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        if ($project->img && !Str::start($project->img, 'http')) {
            //Elimino dalla cartella public la vecchia immagine se esiste
            Storage::delete($project->img);
        }
        $project->delete();
        return redirect()->route('admin.project.index');
    }
}
