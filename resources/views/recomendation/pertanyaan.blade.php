<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h3>apakah anda {{$pertanyaan->karakter}} ?</h3>
    <form action={{Route('recomendation.yes')}} method="post">
        @csrf
        <input type="hidden" name="karakteristik_code" value={{ $pertanyaan->code}}>
        <button type="submit">Yes</button>
    </form>
    <form action={{Route('recomendation.no')}} method="post">
        @csrf
        <input type="hidden" name="karakteristik_code" value={{ $pertanyaan->code}}>
        <button type="submit">No</button>
    </form>
</body>
</html>