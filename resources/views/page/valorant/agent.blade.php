@extends("masterpage")
@section("title","Loottr | Valorant")
@section("metaDescription","Valorant API")
@section("metaImage",asset("app/data/master/img/logo/logo.png"))
@section("banner")
    <div class="breadcrumbs_aree breadcrumbs_bg mb-140" data-bgimg="{{asset("app/data")}}/master/img/bg/breadcrumbs-bg.webp">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumbs_text text-center">
                        <h1>Valorant</h1>
                        <ul class="d-flex justify-content-center">
                            <li><a href="{{route("index")}}">Ana Sayfa </a></li>
                            <li> <span>//</span></li>
                            <li>  Valorant Api</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section("categories")
    <div class="container yeni">
        <div class="row text-center">
            <div class="col-sm-3 col-4">
                <a href="{{route("valorant.index")}}">Ajanlar</a>
            </div>
            <div class="col-sm-3 col-4">
                <a href="{{route("valorant.maps.index")}}">Haritalar</a>
            </div>
            <div class="col-sm-3 col-4">
                <a href="{{route("valorant.weapons.index")}}">Silahlar</a>
            </div>
        </div>
    </div>
@endsection
@section("content")
    <!-- player list section start -->

    <section class="player_list_section mb-125">
        <div class="container">
            <div class="gaming_page_header mb-70">
                <form>
                    <div class="gaming_header_inner d-flex justify-content-center">
                        <div class="gaming_form_search">
                            <input placeholder="Ara" id="myInput" onkeyup="myFunction()" type="text">
                        </div>
                    </div>
                </form>
            </div>
            <div class="row mb-n50">
                @foreach($result["data"] as $valorantRaw)
                    <div class="col-lg-6 col-md-6 col-12 mb-50" id="myUL">
                        <!--  Single Player List Start-->
                        <div class="player_list_single_item wow fadeInLeft" data-wow-delay="0.1s" data-wow-duration="1.1s">
                            <div class="top">
                                @if(isset($valorantRaw["fullPortraitV2"]))
                                    <a class="image" href=""><img src=" {{$valorantRaw["fullPortraitV2"]}}" alt=""></a>
                                @else
                                    <a class="image" href=""><img src=" {{$valorantRaw["displayIcon"]}}" alt=""></a>
                                @endif
                                <div class="overlay">
                                    <div class="social-link">
                                        <img src="{{ $valorantRaw["abilities"][0]["displayIcon"]}}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="content">
                                <h4 class="title"><a href="{{route("valorant.show",$valorantRaw["uuid"])}}">{{$valorantRaw  ["displayName"]}}</a></h4>
                                <div class="content-shape-img">
                                    <img src="{{asset("app/data")}}/master/img/others/tam-text-shape.webp" alt="">
                                    <img src="{{asset("app/data")}}/master/img/others/tam-text-shape2.webp" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
