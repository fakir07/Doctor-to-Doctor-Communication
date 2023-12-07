<?php

namespace App\Http\Controllers;

use App\Models\demandeDavis;
use App\Models\ImagesDavis;
use App\Models\Medcine;
use App\Models\Specialties;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use PDF;

class DemandeDavisController extends Controller
{
    public function index(Request $request)
    {
        $specialties = Specialties::all();
        if (auth()->user()->roles[0]->id == 1) {
            $medcines = Medcine::all();
            if ($request->id_specialties && $request->id_specialties != 'all') {
                $medcines = Medcine::where('specialties', $request->id_specialties)->get();
            }
        } else {
            $medcines = Medcine::where('user_id', '<>', auth()->user()->id)->get();
            if ($request->id_specialties && $request->id_specialties != 'all') {
                $medcines = Medcine::where('specialties', $request->id_specialties)
                    ->where('user_id', '<>', auth()->user()->id)
                    ->get();
            }
        }

        return view('demandedavis.index', compact('medcines', 'specialties'));
    }

    public function create($medcine_1, $medcine_2)
    {

        $medcine_send = Medcine::where('user_id', $medcine_1)->first();
        $medcine_to = Medcine::where('id', $medcine_2)->first();
        // dd($medcine_to);

        return view('demandedavis.create', compact('medcine_send', 'medcine_to'));
    }

    public function store(Request $request)
    {

        try {
            $validator = Validator::make($request->all(),
                [
                    'title' => 'required',
                    'description' => 'required',
                    'medcine_1' => 'required',
                    'medcine_2' => 'required',
                    'date_end' => 'required',
                    'date_start' => 'required',
                ]);

            if ($validator->fails()) {
                return redirect()
                    ->back()
                    ->withErrors($validator)
                    ->withInput();
            }

            $davis = new demandeDavis();
            $davis->title = $request->title;
            $davis->description = $request->description;
            $davis->medcine_1 = $request->medcine_1;
            $davis->medcine_2 = $request->medcine_2;
            $davis->name_medcine_1 = $request->name_medcine_1;
            $davis->name_medcine_2 = $request->name_medcine_2;
            $davis->date_start = $request->date_start;
            $davis->date_end = $request->date_end;
            $davis->question_1 = $request->question_1;
            $davis->userID_action = $request->userID_action;
            $davis->question_2 = $request->question_2;
            $davis->question_3 = $request->question_3;
            $davis->status = '0';
            $davis->save();

            if ($request->hasfile('files')) {
                foreach ($request->file('files') as $file) {
                    $name_files = $file->getclientoriginalname();
                    $imagePath = $file->storeAs('Piece_De_jointe/Image_davis/'.$davis->id, $name_files, 'upload_PieceDejointe');

                    $imagedavis = new ImagesDavis();
                    $imagedavis->Nom_image = $name_files;
                    $imagedavis->imagePath = $imagePath;
                    $imagedavis->davis_id = $davis->id;
                    $imagedavis->save();
                }

            }

            toastr()->closeOnHover(true)->closeDuration(10)->addSuccess('Your account has been restored.');

            return redirect()->route('demandeDavis.index');

        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }

    }

    public function show()
    {

        if (auth()->user()->roles[0]->id == 1) {
            $dAvis = demandeDavis::all();
            $medc = Medcine::all();
        } else {
            $medc = Medcine::where('user_id', '<>', auth()->user()->id)->first();
            $dAvis = demandeDavis::where('medcine_1', $medc->id)
                ->orWhere('medcine_2', $medc->id)->get();

            // $dAvis = demandeDavis::where('userID_action', auth()->user()->id)->get();
            // $davis = demandeDavis::join('medcines', 'demande_davis.userID_action', '=', 'medcines.user_id')
            //     ->select('demande_davis.*', 'medcines.*')
            //     ->where('demande_davis.userID_action', auth()->user()->id)
            //     ->get();

            // /////
            // $dAvis = demandeDavis::where('userID_action', '<>', auth()->user()->id)->get();
            // // dd($dAvis, $medc);
        }

        return view('demandedavis.show', compact('dAvis'));

    }

    public function affiche($id)
    {
        $dDavis = demandeDavis::where('id', $id)->first();
        $imagedavis = ImagesDavis::where('davis_id', $dDavis->id)->get();

        // dd($dDavis->title);

        return view('demandedavis.affiche', compact('dDavis', 'imagedavis'));

    }

    public function edit($id)
    {

        $davis = demandeDavis::where('id', $id)->first();

        return view('demandedavis.edite', compact('davis'));

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

    public function telecharge_picesjoint($id,$imagePath)
    {

        return response()->download(public_path('public/Piece_De_jointe/Image_davis/'.$id.'/'.$imagePath));


    }
    public function telecharge_pdf_davis($id){
        // dd($id);

        $dDavis = demandeDavis::where('id', $id)->first();
        $medcine_send = Medcine::where('id', $dDavis->medcine_1)->first();
        $medcine_to = Medcine::where('id', $dDavis->medcine_2)->first();

        $pdf = PDF::loadView('demandedavis.dDavisPdf', compact('dDavis','medcine_send','medcine_to'));
        return $pdf->stream('dDavisPdf.pdf');
    }
}
