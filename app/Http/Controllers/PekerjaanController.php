<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pekerjaan;
use App\karakteristik;
use App\Topic;



class PekerjaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');        
    }
    
    public function index()
    {
        $pekerjaans = pekerjaan::all()->sortByDesc('id');
        return view('pekerjaans.index' , ['pekerjaans'=>$pekerjaans]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $topics = Topic::all();
        return view('pekerjaans.form' , ['topics'=>$topics]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $this->validate($request,[
            'pekerjaan'=>'required',
            'topik'=>'required',
            'deskripsi'=>'required',
        ]);

        if($request->foto){
            $folderName = 'pekerjaan';
            $fileName = $request->pekerjaan.'_image';
            $fileExtension = $request->foto->getClientOriginalExtension();
            $fileNameToStorage = $fileName.'_'.time().'.'.$fileExtension;
            $filePath = $request->foto->storeAs('public/'.$folderName , $fileNameToStorage); 
        } 
        else {
            $fileNameToStorage = 'null.jpg';
        }
    
          $pekerjaan =  new pekerjaan();
          $pekerjaan->pekerjaan = $request->pekerjaan;
          $pekerjaan->image = $fileNameToStorage;
          $pekerjaan->topik_id = 1;
          $pekerjaan->deskripsi = $request->deskripsi;

          $pekerjaan->save();
          
    
        return redirect()->route('pekerjaan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(pekerjaan $pekerjaan)
    {
        $karakteristiks = karakteristik::all();
        // $getKarakterItems = pekerjaan::with('karakteristik')->get();

        return view('pekerjaans.showDet',['pekerjaan'=>$pekerjaan,'karakteristiks'=>$karakteristiks]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pekerjaan $pekerjaan)
    {
        $pekerjaan->pekerjaan = $request->pekerjaan;
        $pekerjaan->topik_id = $request->topik;
        $pekerjaan->deskripsi = $request->deskripsi;

        $pekerjaan->save();
        return redirect()->route('pekerjaan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(pekerjaan $pekerjaan)
    {
        $pekerjaan->delete();
        return redirect()->route('pekerjaan.index');
    }


    public function tambahKarakteristik(pekerjaan $pekerjaan, request $request){
        
        $karakteristik_code = karakteristik::where('id','=',$request->karakteristik)->value('code');

        foreach ($pekerjaan->karakteristik->sortBy('code') as $label){
            $labels[] = $label->code; 
      }
     
        // $labelImplode =  implode($labels);

        // $pekerjaan->label = $labelImplode;
        $pekerjaan->save();
        $pekerjaan->karakteristik()->attach($request->karakteristik);

        return redirect()->route('pekerjaan.showDet',['pekerjaan'=>$pekerjaan->id]);
        // $user->roles()->attach($roles);

    }

    public function generateLabel(pekerjaan $pekerjaan){
        
        foreach ($pekerjaan->karakteristik->sortBy('code') as $label){
              $labels[] = $label->code; 
        }
       
       $labelImplode =  implode($labels);

        $pekerjaan->label = $labelImplode;
        $pekerjaan->save();
        return redirect()->route('pekerjaan.index');

    }
    // public function showKarakteristikForm()
    // {
    //     $karakteristiks = karakteristik::all();
    //     return view('pekerjaans.label',['karakteristiks'=>$karakteristiks]);
    // }

    // public function forLabel(Request $request){

    //     return $request->label;
    // }
}
