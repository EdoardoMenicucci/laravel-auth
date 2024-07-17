<?php

namespace App\Http\Controllers;

use App\Models\Tecnology;
use Illuminate\Http\Request;

class TecnologyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$tecnologies = Tecnology::all();
        //$data = ['tecnologies' => $tecnologies];
        //return view('tecnology.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //return view('tecnology.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //    $data = $request->all();
        //    $newTecnology = new Tecnology();
        //    $newTecnology->name = $data['name'];
        //    $newTecnology->description = $data['description'];
        //    $newTecnology->save();
        //    return redirect()->route('tecnology.show', $newTecnology);
    }

    /**
     * Display the specified resource.
     */
    public function show(Tecnology $tecnology)
    {
        //    return view('tecnology.show', compact('tecnology'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tecnology $tecnology)
    {
        //    return view('tecnology.edit', compact('tecnology'));  
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tecnology $tecnology)
    {
        //    $data = $request->all();
        //    $tecnology->update($data);
        //    return redirect()->route('tecnology.show', $tecnology);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tecnology $tecnology)
    {
        //    $tecnology->delete();
        //    return redirect()->route('tecnology.index');
    }
}
