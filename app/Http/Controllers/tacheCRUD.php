<?php

namespace App\Http\Controllers;

use App\Models\tache;
use Illuminate\Http\Request;

class tacheCRUD extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = tache::latest()->get();
        return view("tasks.index", compact("tasks"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tache  $tache
     * @return \Illuminate\Http\Response
     */
    public function show(tache $task)
    {
        return view('tasks.show', compact('task'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tache  $tache
     * @return \Illuminate\Http\Response
     */
    public function edit(tache $task)
    {
        return view('tasks.edit', compact('task'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tache  $tache
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tache $task)
    {
        $validated = $request->validate([
            'titre' => 'required',
            'description' => 'required',
        ]);
    
        $task->update($validated);
    
        return redirect()->route('tasks.index')->with('success', 'tache mis à jour avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tache  $tache
     * @return \Illuminate\Http\Response
     */
    public function destroy(tache $task)
    {
    // On les informations du $post de la table "tasks"
        $task->delete();
    // Redirection route "tasks.index"
        return redirect(route('tasks.index'));
    }

    public function store(Request $request){
        $validated = $request->validate([
            'titre' => 'required',
            'description' => 'required',
        ]);
    
        tache::create($validated);
    
        return redirect()->route('tasks.index')->with('success', 'tache créé avec succès');
    
        } 
}
