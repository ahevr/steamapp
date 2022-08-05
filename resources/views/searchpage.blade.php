<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Arama Sonuç</title>
</head>
<body>

<div class="container">

    <h1 class="text-center mt-5">Sonuçlar</h1>
    <div class="card mt-5">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Oyun Adı</th>
                    <th scope="col">İncele</th>
                </tr>
            </thead>
            <tbody>
            @foreach($posts as $row)
                <tr>
                    <td>{{$row["name"]}}</td>
                    <td><a href="{{route("getData.show",$row["appid"])}}">Detaylar</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>


</body>
</html>
