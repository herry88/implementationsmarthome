<?php

namespace App\Http\Controllers;

use App\Models\Light;
use Illuminate\Http\Request;

class LightController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lights = Light::all();
        return view('lights.index', compact('lights'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //create a new light
        return view('lights.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // return 'hello';
        $this->validate(
            $request,
            [
                'nm_lamp' => 'required',
                'status' => 'required',
            ]
        );
        Light::create($request->all());
        return redirect()->route('light.index')->with('success', 'Light created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Light  $light
     * @return \Illuminate\Http\Response
     */
    public function show(Light $light)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Light  $light
     * @return \Illuminate\Http\Response
     */
    public function edit(Light $light)
    {
        //edit a light
        return view('lights.edit', compact('light'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Light  $light
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Light $light)
    {
        //update light
        $this->validate($request,[
            'nm_lamp' => 'required',
            'status' => 'required',
        ]);
        $light->update($request->all());
        return redirect()->route('light.index')->with('success', 'Light updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Light  $light
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //light destroy
        Light::destroy($id);
        return redirect()->route('light.index')->with('success', 'Light deleted successfully');
    }
}
