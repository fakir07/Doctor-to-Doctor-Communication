<?php

namespace App\Http\Controllers;

use App\Models\demandeDavis;
use App\Models\Medcine;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DemandeDavisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $medcines = Medcine::all();
        return view('demandedavis.index',compact('medcines'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(demandeDavis $demandeDavis)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(demandeDavis $demandeDavis)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, demandeDavis $demandeDavis)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(demandeDavis $demandeDavis)
    {
        //
    }
}
