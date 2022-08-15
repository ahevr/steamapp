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
                        <h1>Valorant Silahlar</h1>
                        <ul class="d-flex justify-content-center">
                            <li><a href="{{route("index")}}">Ana Sayfa </a></li>
                            <li> <span>//</span></li>
                            <li><a href="{{route("valorant.index")}}">Valorant </a></li>
                            <li> <span>//</span></li>
                            <li> <span>VALORANT SİLAHLAR</span></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section("content")
    <!-- player list section start -->
    <section class="player_list_section mb-125">
        <div class="container">
            <div class="row mb-n50">
                @foreach($result["data"] as $weaponsRow)
                    <div class="col-lg-4 col-md-6 col-12 mb-50">
                        <div class="player_list_single_item wow fadeInLeft" data-wow-delay="0.1s" data-wow-duration="1.1s">
                            <div class="top">
                                <a class="image" href=""><img src="{{$weaponsRow["displayIcon"]}}" alt=""></a>
                            </div>
                            <div class="content">
                                <h4 class="title"><a href="{{route("valorant.weapons.detail",$weaponsRow["uuid"])}}">{{$weaponsRow["displayName"]}} </a></h4>
                                <h5 class="level-text">{{$weaponsRow["shopData"]["categoryText"]}}</h5>
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
