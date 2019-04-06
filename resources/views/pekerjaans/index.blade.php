@extends('layouts.app')
@section('title-feature','Pekerjaan')
@section('content')

<div class="container">
<form class="mb-3" action="{{Route('pekerjaan.create')}}" method="GET">
        @csrf
        <div class="row form-group">            
            <div class="col-4 my-auto">
                <input type="submit" class="btn btn-sm btn-primary" value="tambah">
            </div>
        </div>
</form>


    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Pekerjaan</th>
                {{-- <th>image</th> --}}
                <th>Topik</th>
                <th>Label</th>
                {{-- <th>Label</th>
                <th>Deskripsi</th> --}}
                {{-- <th>Tambah Karakteristik</th> --}}
                <th>EDIT</th>
                <th>DELETE</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pekerjaans as $pekerjaan)
                <tr>
                    <td>{{ $loop->iteration}}</td>
                    <td>{{ $pekerjaan->pekerjaan}}</td>
                    {{-- <td><a  href="{{ asset('/storage/pekerjaan/'.$pekerjaan->image) }}" target="_blank">
                        <img src="{{ asset('/storage/pekerjaan/'.$pekerjaan->image) }}"  class="rounded-circle" alt="logo_simple"  width="55px" height="55px">
                    </a></td> --}}
                    <td>{{ $pekerjaan->topik_id}}</td>
                <td>{{$pekerjaan->label}}</td>
                    {{-- <td>{{ $pekerjaan->label}}</td> --}}
                    {{-- <td>{{ $pekerjaan->deskripsi}}</td> --}}
                    {{-- <td> <a href="{{route('pekerjaan.karakteristik',['pekerjaan'=>$pekerjaan->id])}}"class="btn btn-sm btn-secondary">Label</a></td> --}}
                    <td> <a href="{{route('pekerjaan.showDet',['pekerjaan'=>$pekerjaan->id])}}" class="btn btn-sm btn-secondary">Detail</a></td>
                    <td>

                    <form action="{{route('pekerjaan.delete',['pekerjaan'=>$pekerjaan->id])}}" method="POST">
                        @method('DELETE')
                            @csrf
                            <input type="submit" class="btn btn-sm btn-primary" value="Hapus">
                    </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection