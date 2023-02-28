<?php

namespace App\Http\Controllers;

use App\Models\blandes;
use Illuminate\Http\Request;

class controllerbande extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blandes = blandes::all();
        return view('blandes/index')->with('blandes', $blandes);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('blandes/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        blandes::create($input);
        return redirect('blandes')->with('flash_message','bande added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $bland = blandes::find($id);
        return view('blandes/show')->with('blandes',$bland);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $bland = blandes::find($id);
        return view('blandes/edit')->with('blandes',$bland);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $bland = blandes::find($id);
        $input = $request->all();
        $bland->update($input);
        return redirect('blandes')->with('flash_message','band updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        blandes::destroy($id);
        return redirect('blandes')->with('flash_message','band deleted');
    }
}
