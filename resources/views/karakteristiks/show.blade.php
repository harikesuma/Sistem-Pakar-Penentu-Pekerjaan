@extends('layouts.app')
@section('title-feature')
{{$karakteristik->karakter}} (<strong>{{$karakteristik->code}}</strong>)
@endsection
@section('content')
    <div class="container">
        <div class="row mb-3">
            <div class="col-10">
                <form action="{{ Route('karakteristik.update',['karakteristik'=>$karakteristik->id])}}" method="post">
                    <div class="row form-group">
                        <div class="col-1 my-auto">
                            <label class="my-auto" for="karakteristik">karakteristik</label>
                        </div>
                        <div class="col-10 my-auto">
                            @csrf
                            <input type="text" name="karakter" id="karakteristik" value='{{$karakteristik->karakter}}' class="form-control">
                        </div>
                        <div class="col-1 my-auto text-right">
                            <button type="submit" class="btn btn-sm btn-success">edit</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-2">
                <form action="" method="post">
                    @csrf
                    <button type="submit" class="btn btn-sm btn-danger my-1" onclick=" confirm('pengahapusan pada karakter akan mengakibatkan label karaketer ini akan dihapus dari pekerjaan')">hapus</button>
                </form>
            </div>
        </div>
        
        {{-- <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Karakteristik</th>
                    <th>code</th>
                    <th>#</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pekerjaans as $pekerjaan)
                    <tr>
                        <td>{{ $loop->iteration}}</td>
                        <td>{{ $pekerjaan->pekerjaan}}</td>
                        <td>{{ $pekerjaan->label}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table> --}}
    </div>
@endsection