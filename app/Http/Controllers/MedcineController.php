<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Images;
use App\Models\Medcine;
use App\Models\Specialties;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;


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
                 return redirect()->route('medcine.index');






        }catch (\Exception $e) {
            return redirect()->back()->withErrors(['error'=>$e->getMessage()]);
        }
    }

    public function edit($id)
    {
        $medcine = Medcine::findorfail($id);
        $specialties = Specialties::all();
        return view('Medcine.edit' ,compact('medcine','specialties'));
     }

    public function update(Request $request)
    {
        // $medcine =Medcine::where('id',$request->id)->first();
        // if ($request->profile_img) {
        // dd('deleete_old');
        // }elseif($medcine->profile_img){
        //     dd('no deleete old');
        // }

        try{
            $validator = Validator::make($request->all(),
            [
                'email' => 'required|unique:medcines,email,'.$request->id,
                'password' => 'required| min:6|',
                'name' => 'required',
                'ville' => 'required',
                'nationalite' => 'required',
                'specialties' => 'required',
                'telephone' => 'required',
                'adresse' => 'required',
                'experience' => 'required',
                'date_debut' => 'required',
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
                $medcine =Medcine::where('id',$request->id)->first();
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


                // Remove the old image
                if ($request->profile_img) {
                    File::delete(public_path($medcine->profile_img));
                }

                if($request->hasfile('profile_img'))
                {
                        $name_files= $request->file('profile_img')->getclientoriginalname();
                        $imagePath =  $request->file('profile_img')->storeAs('Piece_De_jointe/Medcine/'.$medcine->name,$name_files,'upload_PieceDejointe');
                 }else{
                    $imagePath = $medcine->profile_img;
                 }

                 $medcine->profile_img = $imagePath;


                 $users = User::where('id',$medcine->user_id)->first();
                 $users->email=$request->email;
                 $users->password=bcrypt($request->password);
                 $users->name=$request->name;
                 $users->save();
                 $medcine->save();

                   toastr()->closeOnHover(true)->closeDuration(10)->addSuccess('Your account has been restored.');
                   return redirect()->route('medcine.index');

        }catch (\Exception $e) {
            return redirect()->back()->withErrors(['error'=>$e->getMessage()]);
        }

    }


    public function destroy(Request $request)
    {
        try {
            $medcine = Medcine::where('id',$request->id)->first();
            $uers_id= $medcine->user_id;
            $medcine->delete();
            $user= User::where('id',$uers_id)->first();
            $user->delete();
            toastr()->closeOnHover(true)->closeDuration(20)->addWarning('Your account has been restored.');
            return  redirect()->back();
        }catch (\Exception $e) {
            return redirect()->back()->withErrors(['error'=>$e->getMessage()]);
        }
    }
}
