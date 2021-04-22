<?php

namespace App\Http\Controllers;

use App\Models\Sgo;
use Illuminate\Http\Request;

class SgoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sgos = Sgo::latest()->paginate(5);

        return view('sgo.index', compact('sgos'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sgo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'cpf' => 'required',
            'unidade' => 'required',
            'status' => 'required'
        ]);

        Sgo::create($request->all());

        return redirect()->route('sgo.index')
            ->with('success', 'Project created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sgo  $sgo
     * @return \Illuminate\Http\Response
     */
    public function show(Sgo $sgo)
    {
        return view('sgo.show', compact('sgo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sgo  $sgo
     * @return \Illuminate\Http\Response
     */
    public function edit(Sgo $sgo)
    {
        return view('sgo.edit', compact('sgo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sgo  $sgo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sgo $sgo)
    {
        $request->validate([
            'nome' => 'required',
            'cpf' => 'required',
            'unidade' => 'required',
            'status' => 'required'
        ]);
        $sgo->update($request->all());

        return redirect()->route('sgo.index')
            ->with('success', 'Project updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sgo  $sgo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sgo $sgo)
    {
        $sgo->delete();
        return redirect()->route('sgo.index')
            ->with('success', 'Project deleted successfully');
    }
}
