@extends('layout/layout_test')
@section('title','Quiz')
@section('content')
    
<div class="container">
    <div class="row m-5">
        <div class="col-12 text-center text-coklat">
            <h3>Apakah Gus Agung Ganteng ?</h3>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-6 p-5">
            <div class="bg-orange py-3 rounded-lg">
                <div class="row">
                    <div class="col-12 text-center">
                        <img class="" src="{{ asset('images/undraw_game_day_ucx9.svg')}}" alt="" height="80%" width="80%">
                    </div>
                    <div class="row">
                        <div class="col-12 px-5 text-center mt-3">
                            <p>Sangat Ganteng sekali , tidak ada yang mengalahkan. semua cewek mengidamkan laki laki seperti dia</p>
                        </div>
                    </div>
                    <div class="col-12 text-center">
                            <a href="jawaban/" class="btn btn-lg bg-putih">submit</a>
                    </div>
                </div>
            </div>   
        </div>
        <div class="col-6 p-5">
            <div class="bg-purple py-3 rounded-lg">
                <div class="row">
                    <div class="col-12 text-center">
                        <img class="" src="{{ asset('images/undraw_game_day_ucx9.svg')}}" alt="" height="80%" width="80%">
                    </div>
                    <div class="row">
                        <div class="col-12 px-5 text-center mt-3">
                            <p>Sangat Ganteng sekali , tidak ada yang mengalahkan. semua cewek mengidamkan laki laki seperti dia</p>
                        </div>
                    </div>
                    <div class="col-12 text-center">
                            <a href="jawaban/" class="btn btn-lg bg-putih">submit</a>
                    </div>
                </div>
            </div>
        </div> 
    </div>

    <div class="row">
        <div class="col-12 px-5">
            <a href="" class="btn btn-lg bg-putih">previous</a>
        </div>
    </div>

</div>
@endsection
