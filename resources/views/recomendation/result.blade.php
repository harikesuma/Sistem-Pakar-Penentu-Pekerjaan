<!DOCTYPE html>
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
</html>