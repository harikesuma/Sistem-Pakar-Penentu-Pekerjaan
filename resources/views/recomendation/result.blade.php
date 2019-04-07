<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Pilih Topic</title>
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center my-5">
                <h3>Pekerjaan yang cocok buat kamu</h3>
            </div>
        </div>
            @foreach ($pekerjaans as $pekerjaan)
                <div class="row">
                    <div class="col-3">
                        <a  href="{{ asset('/storage/pekerjaan/'.$pekerjaan->image) }}" target="_blank">
                            <img src="{{ asset('/storage/pekerjaan/'.$pekerjaan->image) }}"   alt="gambarnya gak mau muncul -_-"  width="200px" height="200px">
                        </a>
                    </div>
                    <div class="col-9">
                        <div class="row">
                            <div class="col-12">
                                <h3>{{$pekerjaan->pekerjaan}}</h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <p class="mb-1">{{$pekerjaan->deskripsi}}</p>
                                <h6>karakteristik yang memenuhi : </h6>
                                <ul>
                                    @foreach ($pekerjaan->karakteristik as $karakter)
                                        <li>{{ $karakter->karakter}}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
            @endforeach
            <div class="row">
                <div class="col-12 text-center">
                    <a href="/done" class="btn btn-lg btn-primary">Selesai</a>
                </div>
            </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>












{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h3>pekerjaan yang cocok buat kamu</h3>
    <ul>
        @foreach ($pekerjaans as $pekerjaan)
            <li>{{$pekerjaan->pekerjaan}}</li>
        @endforeach
    </ul>
    <a href="/done"> done</a>
</body>
</html> --}}