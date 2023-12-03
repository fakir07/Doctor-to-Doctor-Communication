<?php

namespace App\Http\Controllers;

use App\Models\Medcine;
use App\Models\Specialties;
use App\Models\demandeDavis;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DemandeDavisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $specialties = Specialties::all();
         if($request){
            $medcines = Medcine::where('specialties',$request->id_specialties)->get();
         }else{
            $medcines = Medcine::all();
         }
        return view('demandedavis.index',compact('medcines','specialties'));
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
