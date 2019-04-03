@extends('layouts.app')
@section('title-feature','Karakteristik')
@section('content')
    <div class="container">
        <form class="mb-3" action="{{ Route('karakteristik.store')}}" method="post">
            <div class="row form-group">
                <div class="col-1 my-auto">
                    <label for="karakteristik">karakteristik</label>
                </div>
                <div class="col-9 my-auto">
                    @csrf
                    <input type="text" name="karakter" id="karakteristik" class="form-control">
                </div>
                <div class="col-2 my-auto">
                    <input type="submit" class="btn btn-sm btn-primary my-auto">
                </div>
            </div>
        </form>
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Karakteristik</th>
                    <th>code</th>
                    <th>#</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($karakteristiks as $karakteristik)
                    <tr>
                        <td>{{ $loop->iteration}}</td>
                        <td>{{ $karakteristik->karakter}}</td>
                        <td>{{ $karakteristik->code}}</td>
                        <td> <a href="{{route('karakteristik.show',['karakteristik'=>$karakteristik->id])}}" class="btn btn-sm btn-secondary">Detail</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection