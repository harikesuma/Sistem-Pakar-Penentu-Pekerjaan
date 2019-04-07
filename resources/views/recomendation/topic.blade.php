<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Pilih topic</h1>
    <ul>
        @foreach ($topics as $topic)
            <li><a href={{ Route('recomendation.index',["topic"=>$topic->id])}}>{{ $topic->nama_topic}}</a></li>
        @endforeach
    </ul>
    
</body>
</html>


