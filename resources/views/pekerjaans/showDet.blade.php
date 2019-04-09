@extends('layouts.app')
@section('title-feature')

@section('content')

<div class="container">
    <div class="row mb-5">
        <div class="col">
            <a href="{{route('pekerjaan.index')}}" class="btn btn-secondary">Kembali</a>
        </div>
    </div>

    <div class="row">
        <div class="col-3">
               <a  href="{{ asset('/storage/pekerjaan/'.$pekerjaan->image) }}" target="_blank">
                        <img src="{{ asset('/storage/pekerjaan/'.$pekerjaan->image) }}"  class="rounded-circle" alt="logo_simple"  width="200px" height="200px">
                </a>
        </div>

        <div class="col table-bordered">
            <p>{{$pekerjaan->deskripsi}}</p>
        </div>
    </div>

    <div class="row mt-5 ">
        <div class="col mt-3">
            <h6>DAFTAR KARAKTERISTIK</h6>
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Karakteristik</th>    
                        <th>Karakteristik</th>  
                    </tr>        
                </thead>
                <tbody>
                    @foreach ($pekerjaan->karakteristik as $kerja)
                        <tr>    
                            <td>{{$loop->iteration}}</td>
                            <td>{{$kerja->karakter}}</td>
                            <td>{{$kerja->code}}</td>
                        </tr>
                    @endforeach
                    
                </tbody>
            </table>
        </div>    
    </div>
    
    <form action="{{route('pekerjaan.karakteristik',['pekerjaan'=>$pekerjaan->id])}}" method="POST">
        @csrf
            <div class="form-group">
                    <label for="pekerjaan">Karakteristik</label>
                    <select class="custom-select" name="karakteristik">
                        <option disabled selected>Pilih Karakteristik</option>
                        @foreach ($karakteristiks as $karakteristik)
                            <option value="{{ $karakteristik->id }}">{{ $karakteristik->karakter }}</option>
                        @endforeach
                    </select>
                    <div class="invalid-feedback">Example invalid custom select feedback</div>
            </div>

            <div class="mt-2 text-center">
                    <input type="submit" class="btn btn-lg btn-primary" value="tambah">
            </div>
    </form>
    
    <form action="{{route('pekerjaan.generate',['pekerjaan'=>$pekerjaan->id])}}" method="GET">
            @csrf
            {{-- <div class="row m-5">
                <div class="col"> --}}
                    <div class="text-center my-2">
                        <input type="submit" class="btn btn-lg btn-success" value="generate">
                    </div>
                {{-- </div>
            </div> --}}
             
        </form>
        

</div>

@endsection
