<?php

namespace App\Http\Controllers;

use App\Models\Type;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $types = Type::all();
        // $data = ['types' => $types];
        // return view('type.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //    return view('type.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //    $data = $request->all();
        //    $newType = new Type();
        //    $newType->name = $data['name'];
        //    $newType->description = $data['description'];
        //    $newType->save();
        //    return redirect()->route('type.show', $newType);
    }

    /**
     * Display the specified resource.
     */
    public function show(Type $type)
    {
        //    return view('type.show', compact('type'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Type $type)
    {
        //    return view('type.edit', compact('type'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Type $type)
    {
        // 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Type $type)
    {
        //    $type->delete(); 
    }
}
