@extends('layouts.app')
@section('title-feature')

@section('content')
    <div class="container">
        <div class="row mb-3">
            <div class="col-10">
                <form action="{{ Route('pekerjaan.update',['pekerjaan'=>$pekerjaan->id])}}" method="post">
                        @csrf
                    <div class="form-group">
                        <label for="pekerjaan">Pekerjaan</label>
                        <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" value="{{$pekerjaan->pekerjaan}}"  placeholder="">
                    </div>

                    <div class="form-group">
                        <label for="pekerjaan">Topik</label>
                        <select class="custom-select" name="topik" required>
                            <option value="">Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                        <div class="invalid-feedback">Example invalid custom select feedback</div>
                    </div>
            

                    <div class="form-group">
                        <label for="pekerjaan">Deskripsi</label>
                        <input type="text" class="form-control" id="pekerjaan" name="deskripsi" value="{{$pekerjaan->deskripsi}}"  placeholder="">
                    </div>

                   
                    <button type="submit" class="btn btn-primary">Update</button>

                 </form> 
            </div>
        </div>
@endsection