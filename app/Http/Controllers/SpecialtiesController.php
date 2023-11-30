<?php

namespace App\Http\Controllers;

use App\Models\Specialties;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SpecialtiesController extends Controller
{

    public function index()
    {
        $specialties = Specialties::all();
        return view('Specialties.index' ,compact('specialties'));
    }


    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),

        [
            'specialty_name'=>'required',
        ]
        ,
        [
            'specialty_name'=>'spécialité et obligatoire',
            ]
    );
            if($validator->fails()){
                return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
            }

        $specialtie = new Specialties();
        $specialtie->specialty_name= $request->specialty_name;
        $specialtie->description= $request->description;
        $specialtie->save();
        toastr()->closeOnHover(true)->closeDuration(10)->addSuccess('Your account has been restored.');
        return  redirect()->back();
    }


    public function update(Request $request)
    {
        $validator = Validator::make($request->all(),

        [
            'specialty_name'=>'required'
        ]
        ,
        ['specialty_name'=>'spécialité et obligatoire']
    );
            if($validator->fails()){
                return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
            }

        $specialtie =  Specialties::where('id',$request->id)->first();
        $specialtie->specialty_name= $request->specialty_name;
        $specialtie->save();
        toastr()->closeOnHover(true)->closeDuration(10)->addSuccess('Your account has been restored.');
        return  redirect()->back();
    }


    public function destroy(Request $request)
    {
        try{
        $specialtie = Specialties::findOrFail($request->id);
        $specialtie->delete();
        toastr()->closeOnHover(true)->closeDuration(20)->addWarning('Your account has been restored.');
        return  redirect()->back();
    } catch (Exception $e) {
        return redirect()
            ->back()
            ->withErrors($e)
            ->withInput();
        }
    }
}
