<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Images;
use App\Models\Medcine;
use App\Models\Specialties;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class MedcineController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $medcines= Medcine::all();
        return view('Medcine.index',compact('medcines'));
    }

    public function create()
    {        
    
        $specialties= Specialties::all();
        return view('Medcine.create',compact('specialties'));

    }


    public function store(Request $request)
    {

        // dd($request);

        try{
            $validator = Validator::make($request->all(),
            [
                'email' => 'required|unique:medcines,email',
                'password' => 'required| min:6|',
                'name' => 'required',
                'ville' => 'required',
                'nationalite' => 'required',
                'specialties' => 'required',
                'telephone' => 'required',
                'adresse' => 'required',
                'experience' => 'required',
                'date_debut' => 'required',
                'profile_img' => 'required',
            ],
            [

            ]
        );
                if($validator->fails()){
                    return redirect()
                    ->back()
                    ->withErrors($validator)
                    ->withInput();
                }
                $medcine = new Medcine();
                $medcine->name = $request->name;
                $medcine->prenom = $request->prenom;
                $medcine->email = $request->email;
                $medcine->password =bcrypt($request->password);
                $medcine->ville = $request->ville;
                $medcine->nationalite = $request->nationalite;
                $medcine->specialties = $request->specialties;
                $medcine->telephone = $request->telephone;
                $medcine->adresse = $request->adresse;
                $medcine->experience = $request->experience;
                $medcine->description = $request->description;
                $medcine->website = $request->website;
                $medcine->date_debut = $request->date_debut;
                // $medcine->save();

                if($request->hasfile('profile_img'))
                {
                        $name_files= $request->file('profile_img')->getclientoriginalname();
                        $imagePath =  $request->file('profile_img')->storeAs('Piece_De_jointe/Medcine/'.$medcine->name,$name_files,'upload_PieceDejointe');
                 }
                 $medcine->profile_img = $imagePath;

                   // craetion users 

               $users = new User();
               $users->email=$request->email;
               $users->password=bcrypt($request->password);
               $users->name=$request->name;
               $users->assignRole(2);
               $users->save();
               
               $medcine->user_id =$users->id;
               $medcine->save();  

                 toastr()->closeOnHover(true)->closeDuration(10)->addSuccess('Your account has been restored.');
                 return  redirect()->back();

 



        }catch (\Exception $e) {
            return redirect()->back()->withErrors(['error'=>$e->getMessage()]);
        }
    }


    public function show(Medcine $medcine)
    {
        //
    }


    public function edit(Medcine $medcine)
    {
        //
    }

    public function update(Request $request, Medcine $medcine)
    {
        //
    }


    public function destroy(Medcine $medcine)
    {
        //
    }
}
