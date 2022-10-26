<?php

namespace App\Http\Controllers;

use App\Models\Carier;
use Illuminate\Http\Request;

class CarierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function c()
    {
        return view('c');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'name' => 'required',
            'email' => 'required',
            'phone_number' => 'required',
            'job_position' => 'required',
            'qualification' => 'required',
            // 'file' => 'required',
        ]);
        Carier::create($request->all());

        return redirect()->route('career')->with('Success', 'Career created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Carier  $carier
     * @return \Illuminate\Http\Response
     */
    public function show(Carier $carier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Carier  $carier
     * @return \Illuminate\Http\Response
     */
    public function edit(Carier $carier)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Carier  $carier
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Carier $carier)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Carier  $carier
     * @return \Illuminate\Http\Response
     */
    public function destroy(Carier $carier)
    {
        //
    }
}
