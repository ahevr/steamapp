<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Shop Item - Start Bootstrap Template</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="{{asset("app/data/detail")}}/assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{asset("app/data/detail")}}/css/styles.css" rel="stylesheet" />
</head>
<body>
<!-- Navigation-->


<!-- Product section-->

{{--@foreach($posts as $steamRow)--}}
{{--    <div class="container">--}}
{{--        <div class="card  mt-5">--}}
{{--            <div class="card-body">--}}
{{--                <h5 class="card-title">{{$steamRow["data"]["name"]}}</h5>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--@endforeach--}}



<section class="py-5">
    <div class="container px-4 px-lg-5 my-5">
        <div class="row gx-4 gx-lg-5 align-items-center">
            @foreach($posts as $steamRow)
                <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="{{$steamRow["data"]["screenshots"][0]["path_full"]}}" alt="..." /></div>

                <div class="col-md-6">
{{--                    <div class="small mb-1"> Metacritic Puanı : {{$steamRow["data"]["metacritic"]["score"]}}</div>--}}
                    <h1 class="display-5 fw-bolder">{{$steamRow["data"]["name"]}}</h1>
                    <div class="fs-5 mb-5">
                        Toplam Fiyat<span class="text-decoration-line-through"> {{$steamRow["data"]["price_overview"]["initial_formatted"]}}</span>
                        <br>

                        İndirim Oranı<span>% {{$steamRow["data"]["price_overview"]["discount_percent"]}}</span>
                        <br>

                        İndirimli Fiyat<span> {{$steamRow["data"]["price_overview"]["final_formatted"]}}</span>
                    </div>
                    <p class="lead">{{$steamRow["data"]["short_description"]}}</p>

                </div>
                <div class="col d-flex justify-content-between">
                   <p>
                       {{ strip_tags(trim($steamRow ["data"]["pc_requirements"]["minimum"]))}}
                   </p>
                    <p>
                        {{ strip_tags(trim($steamRow ["data"]["pc_requirements"]["recommended"]))}}
                    </p>

                </div>
            @endforeach
        </div>
    </div>
</section>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="{{asset("app/data/detail")}}/js/scripts.js"></script>
</body>
</html>
