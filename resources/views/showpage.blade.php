<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Full Width Pics - Start Bootstrap Template</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{asset("app/data")}}/detail/css/styles.css" rel="stylesheet" />
</head>
<body>


@foreach($result as $steamRow )

<header class="py-5 bg-image-full" style="background-image: url('{{$steamRow->data->screenshots[2]->path_full}}');opacity: 0.3;height: 600px;"></header>

@endforeach

@foreach($result as $steamRow )
    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4">
                    <div class="card border-0">
                        <img src="{{$steamRow->data->header_image}}" class="card-img-top" alt="...">
                        <div class="card-body">
{{--                            <h5 class="card-title text-black">{{$steamRow->data->name}}</h5>--}}
                            <div class="col-md-6">
                            </div>
                            @if(isset($steamRow->data->metacritic))
                            <p class="card-text text-black"> Metacritic Puanı: {{$steamRow->data->metacritic->score}}</p>
                            @else
                            @endif
                            <p class="card-text text-black"> Çıkış Tarihi: {{$steamRow->data->release_date->date}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mt-2">
                    <h2>{{$steamRow->data->name}}</h2>
                    <p class="lead">{{$steamRow->data->short_description}}.</p>
                    <p class="mb-0">Desteklenen Dil: {{ strip_tags(trim(substr($steamRow->data->supported_languages,0,60)))}}... </p>
                </div>


            </div>
        </div>
    </section>
@endforeach















<!-- Image element - set the background image for the header in the line below-->
<div class="py-5 bg-image-full" style="background-image: url('https://source.unsplash.com/4ulffa6qoKA/1200x800')">
    <!-- Put anything you want here! The spacer below with inline CSS is just for demo purposes!-->
    <div style="height: 20rem"></div>
</div>
<!-- Content section-->
<section class="py-5">
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <h2>Engaging Background Images</h2>
                <p class="lead">The background images used in this template are sourced from Unsplash and are open source and free to use.</p>
                <p class="mb-0">I can't tell you how many people say they were turned off from science because of a science teacher that completely sucked out all the inspiration and enthusiasm they had for the course.</p>
            </div>
        </div>
    </div>
</section>
<!-- Footer-->
<footer class="py-5 bg-dark">
    <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2022</p></div>
</footer>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="{{asset("app/data")}}/detail/js/scripts.js"></script>
</body>
</html>
