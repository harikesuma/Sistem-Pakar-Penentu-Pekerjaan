<!doctype html>
  <html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
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
        background-image: url("/images/icons8-team-649367-unsplash.jpg"); 
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
          <h3 class="masthead-brand">Expo</h3>
          <nav class="nav nav-masthead justify-content-center">
            <a class="nav-link active" href="#">Home</a>
            <a class="nav-link" href={{ Route('login')}}>Login For Expert</a>
          </nav>
        </div>
      </header>
      <main role="main" class="inner cover">
        @yield('content')
      </main>
      <footer class="mastfoot mt-auto">
        <div class="inner">
            <p>Tugas Kecerdasan Tiruan</p>
        </div>
      </footer>
    </div>
  </body>
</html>