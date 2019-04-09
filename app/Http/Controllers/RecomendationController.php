<?php

namespace App\Http\Controllers;
use Illuminate\Support\Collection;
use Illuminate\Http\Request;
use App\Topic;
use App\pekerjaan;
use App\karakteristik;
use Session;


class RecomendationController extends Controller
{
    // public function topic(){
    //     session()->flush();
    //     $topic = Topic::all();
    //     return view('recomendation.topic' , ["topics"=> $topic]);
    // }

    // public function index(Topic $topic){
    //     session(['recomendation_list'=>$topic->pekerjaans->sortBy('label')]);
    //     return $this->pertanyaan();

    // }

    public function index(){
        $pekerjaans = pekerjaan::all()->sortBy('label');
        session(['recomendation_list'=>$pekerjaans]);
        return $this->pertanyaan();
    }

    public function yesAnswer(Request $request , Topic $topic){
        $yesLabel = session('yes');
        $yesLabel = $yesLabel.$request->karakteristik_code;
        session(['yes'=>$yesLabel]);
        $pekerjaans = session('recomendation_list');
        $pekerjaans = $pekerjaans->filter(function ($pekerjaan) use ($yesLabel){
            return stristr($pekerjaan->label, $yesLabel) ? true : false;
        });
        session(['recomendation_list'=>$pekerjaans->sortBy('label')]);
        return $this->pertanyaan();
        
    }

    public function noAnswer(Request $request , Topic $topic){
        $noLabel = $request->karakteristik_code;
        $pekerjaans = session('recomendation_list');
        $pekerjaans = $pekerjaans->filter(function ($pekerjaan) use ($noLabel){
            return stristr($pekerjaan->label, $noLabel) ? false : true;
        });
        session(['recomendation_list'=>$pekerjaans->sortBy('label')]);
        return $this->pertanyaan();
       
    }

    public function done(){
        session()->flush();
        return redirect('/');
    }

    private function pertanyaan(){
        $codeQuestion = $this->getQuestion();
        if(is_null($codeQuestion)){
            return $this->result();
        }
        $pertanyaan = karakteristik::where('code',$codeQuestion)->first();
        return view('recomendation.pertanyaan',['pertanyaan'=>$pertanyaan]);

    }

    private function result(){
        $pekerjaan = collect(session('pekerjaan'))->reverse();
        $result = $pekerjaan->map(function($pekerjaan_id){
            return pekerjaan::find($pekerjaan_id);
        })->unique();
     
        return view('recomendation.result',['pekerjaans'=>$result]);

    }


    


    // fungsi pendukung
    private function getNextCode($pekerjaan){
        $label = str_split($pekerjaan->label);
        $status = false;
        $code = null;
        for($startIndex = strlen(session('yes')); $startIndex < strlen($pekerjaan->label) ; $startIndex++){
            if($status && ctype_alpha($label[$startIndex])){
                return $code;
            }
            if(ctype_alpha($label[$startIndex])){
                $status = true;
            }
            $code = $code.$label[$startIndex]; 
        }
        return $code;
        
    }


    private function getQuestion(){
        $codeQuestion = null;
        $pekerjaans = session('recomendation_list');
        foreach($pekerjaans as $pekerjaan){
            if($pekerjaan->label == session('yes')){
                session()->push('pekerjaan',$pekerjaan->id);
                continue;
            }else{
                $codeQuestion = $this->getNextCode($pekerjaan);
                return $codeQuestion;
            }
        }
        return $codeQuestion;
    }
}
