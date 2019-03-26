@extends('layout/main')
@section('title','landing page')
@section('content')
    <div class="p-5 rounded-lg" style="background-color:rgba(251,241,236, 0.8)">
        <h1 class="cover-heading text-purple">EXPO</h1>
        <p class="lead text-purple">Expo akan membantu anda dalam mencari jenis pekerjaan yang sesuai dengan kepribadian anda</p>
        <p class="lead">
        <a href="{{route('pertanyaan')}}" class="btn btn-lg bg-purple text-white">Mulai Tes Sekarang</a>
        </p>
    </div>
   
@endsection

  
    
  

 
