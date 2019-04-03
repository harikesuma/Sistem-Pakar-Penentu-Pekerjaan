<?php

namespace App\Http\Controllers;

use App\karakteristik;
use Illuminate\Http\Request;

class KarakteristikController extends Controller
{
    public $alfabets = ['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z'];
    public function __construct()
    {
        $this->middleware('auth');        
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $karakteristiks = karakteristik::all()->sortByDesc('id');
        return view('karakteristiks.index' , ['karakteristiks'=>$karakteristiks]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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
            'karakter'=>'required'
        ]);
        $karakteristik = karakteristik::create([
            'karakter' => $request->karakter
        ]);
        $id = $karakteristik->id;
        $index = ($id - 1)% 26;   
        $abjad = $this->alfabets[$index];
        $counter = karakteristik::where('karakter','like','%'.$abjad)->count();
        $code = $abjad.$counter;
        $karakteristik->code = $code;
        $karakteristik->save();
        return redirect()->route('karakteristik.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\karakteristik  $karakteristik
     * @return \Illuminate\Http\Response
     */
    public function show(karakteristik $karakteristik)
    {
        
        return view('karakteristiks.show',['karakteristik'=>$karakteristik]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\karakteristik  $karakteristik
     * @return \Illuminate\Http\Response
     */
    public function edit(karakteristik $karakteristik)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\karakteristik  $karakteristik
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, karakteristik $karakteristik)
    {
        $karakteristik->karakter = $request->karakter;
        $karakteristik->save();
        return redirect()->route('karakteristik.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\karakteristik  $karakteristik
     * @return \Illuminate\Http\Response
     */
    public function destroy(karakteristik $karakteristik)
    {
        //
    }
}
