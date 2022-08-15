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
                        <h1>{{$result["data"]["displayName"]}}</h1>
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

@section("content")

    <!-- player list section start -->
    <section class="player_details_section mb-125">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="single-player-details">
                        <div class="side__left">
                            <div class="image">
                                <img class="img-fluid" src="{{$result["data"]["displayIcon"]}}" alt="">
                            </div>

                            <div class="player-profile">
                                <h4 class="title">{{$result["data"]["displayName"]}}</h4>
                                <div class="content-shape-img">
                                    <img src="{{asset("app/data")}}/master/img/others/tam-text-shape2.webp" alt="">
                                </div>
                            </div>

                        </div>

                        <div class="side__right">
                            <div class="content">
                                <span class="title-tag">Skın Detayları & Levelleri</span>
                                <h4 class="title">{{$result["data"]["displayName"]}}</h4>
                            </div>
                        </div>
                        <div class="mascot-logo">
                            <img class="img-fluid" src="{{$result["data"]["displayIcon"]}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- player list section end -->


    <!-- player list section start -->
    <section class="player_list_section mb-125">
        <div class="container">
            <div class="row mb-n50">

                @foreach($result["data"]["chromas"] as $weaponslevel )
                    <div class="col-lg-4 col-md-6 col-12 mb-50">
                    <!--  Single Player List Start-->
                    <div class="player_list_single_item wow fadeInLeft" data-wow-delay="0.1s" data-wow-duration="1.1s">
                        <div class="top">
                            @if(isset($weaponslevel["displayIcon"]))
                            <a class="image" href=""><img src="{{$weaponslevel["displayIcon"]}}" alt=""></a>
                            @else
                            <a class="image" href=""><img src="{{$weaponslevel["fullRender"]}}" alt=""></a>
                            @endif
                        </div>
                        <div class="content">
                            <h4 class="title"><a href="player-details.html">{{$weaponslevel["displayName"]}}</a></h4>
                            <div class="content-shape-img">
                                <img src="{{asset("app/data")}}/master/img/others/tam-text-shape.webp" alt="">
                                <img src="{{asset("app/data")}}/master/img/others/tam-text-shape2.webp" alt="">
                            </div>
                        </div>

                    </div>
                    <!--  Single Player List End-->
                </div>
                @endforeach

            </div>
        </div>
    </section>
    <!-- player list section end -->

@endsection
