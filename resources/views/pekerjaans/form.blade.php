@extends('layouts.app')
@section('title-feature','Pekerjaan')
@section('content')

<div class="container">
<form action="{{Route('pekerjaan.store')}}" method="POST"  enctype="multipart/form-data">
    @csrf
        <div class="form-group">
            <label for="pekerjaan">Pekerjaan</label>
            <input type="text" class="form-control" id="pekerjaan" name="pekerjaan"  placeholder="">
        
        </div>
        <div class="form-group">
            <label for="pekerjaan">Topik</label>
            <select class="custom-select" name="topik" required>
                @foreach ($topics as $topic)
                    <option value={{ $topic->id }}>{{ $topic->nama_topic}}</option>
                @endforeach
            </select>
            <div class="invalid-feedback">Example invalid custom select feedback</div>
        </div>

        <div class="form-group">
                <label for="pekerjaan">Deskripsi</label>
                <input type="text-area" class="form-control" id="pekerjaan" name="deskripsi"  placeholder="">    
        </div>

        <div class="custom-file my-4">
            <input type="file" class="custom-file-input" name="foto"  required>
            <label class="custom-file-label" for="validatedCustomFile">Pilih Foto</label>
            <div class="invalid-feedback">Example invalid custom file feedback</div>
        </div>
      

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
        
</div> 

@endsection
