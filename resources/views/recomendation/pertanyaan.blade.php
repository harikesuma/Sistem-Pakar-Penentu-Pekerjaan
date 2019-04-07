<!doctype html>
  <html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>pertanyaan</title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"/>


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      body{
        background-color: #EACFB1; 
        background-size: cover;
      }
    </style>
    <!-- Custom styles for this template -->
    <link href={{ asset('css/main.css') }} rel="stylesheet">
  </head>
  <body class="text-center" style="">
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
      <header class="masthead mb-auto">
        <div class="inner">
          <h3 class="masthead-brand text-purple">Expo</h3>
          <nav class="nav nav-masthead justify-content-center">
            <a class="nav-link text-purple" href="/">Home</a>
            <a class="nav-link active" href={{ Route('login')}}>Login For Expert</a>
          </nav>
        </div>
      </header>
      <main role="main" class="inner cover">
        <div class="p-5 rounded-lg" style="background-color:rgba(251,241,236, 0.8)">
            <h3 class="cover-heading text-purple">Apakah Anda {{$pertanyaan->karakter}} ?</h3>
            <p class="lead pt-2">
                <div class="row">
                    <div class="col-6 text-right">
                        <form action={{Route('recomendation.yes')}} method="post">
                            @csrf
                            <input type="hidden" name="karakteristik_code" value={{ $pertanyaan->code}}>
                            <button class="btn btn-lg bg-purple text-white" type="submit">Yes</button>
                        </form>
                    </div>
                    <div class="col-6 text-left">
                        <form action={{Route('recomendation.no')}} method="post">
                            @csrf
                            <input type="hidden" name="karakteristik_code" value={{ $pertanyaan->code}}>
                            <button class="btn btn-lg bg-orange text-white" type="submit">No</button>
                        </form>
                    </div>
                </div>
            </p>
        </div>
      </main>
      <footer class="mastfoot mt-auto">
        <div class="inner text-purple">
            <p>Tugas Kecerdasan Tiruan</p>
        </div>
      </footer>
    </div>
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
    <h3>apakah anda {{$pertanyaan->karakter}} ?</h3>
    
   
</body>
</html> --}}