@extends("masterpage")
    @section("title",$result["data"]["displayName"]." | Loottr.com")
    @section("metaImage",$result["data"]["displayIconSmall"])
    @section("metaTitle",$result["data"]["displayName"]."Hakkında")
    @section("metaDescription",$result["data"]["description"])
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
    <section class="player_details_section mb-125">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="single-player-details">
                        <div class="side__left">
                            <div class="image">
                                <img class="img-fluid" src="{{$result["data"]["fullPortraitV2"]}}" alt="">
                            </div>
                            <div class="player-profile">
                                <h4 class="title">{{$result["data"]["displayName"]}}</h4>
                                <h5 class="level-text">Rol : {{$result["data"]["role"]["displayName"]}} </h5>
                                <div class="content-shape-img">
                                    <img src="{{asset("app/data")}}/master//img/others/tam-text-shape2.webp" alt="">
                                </div>
                            </div>
                        </div>

                        <div class="side__right">
                            <div class="content">
                                <span class="title-tag">PLAYER PROFILE</span>
                                <h4 class="title">{{$result["data"]["displayName"]}}</h4>
                                <p>{{$result["data"]["description"]}}</p>
                                <div class="comments_title">
                                    <h2>Yetenekler</h2>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="comments_box">
                                            <div class="comment_list d-flex">
                                                <div class="comment_thumb">
                                                    <img src="{{$result["data"]["abilities"][0]["displayIcon"]}}" alt="">
                                                </div>
                                                <div class="comment_content">
                                                    <h3>{{$result["data"]["abilities"][0]["displayName"]}}</h3>
                                                    <span> {{$result["data"]["abilities"][0]["slot"]}}</span>
                                                    <p>{{$result["data"]["abilities"][0]["description"]}}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="comments_box">
                                            <div class="comment_list d-flex">
                                                <div class="comment_thumb">
                                                    <img src="{{$result["data"]["abilities"][1]["displayIcon"]}}" alt="">
                                                </div>
                                                <div class="comment_content">
                                                    <h3>{{$result["data"]["abilities"][1]["displayName"]}}</h3>
                                                    <span> {{$result["data"]["abilities"][1]["slot"]}}</span>
                                                    <p>{{$result["data"]["abilities"][1]["description"]}}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="comments_box">
                                            <div class="comment_list d-flex">
                                                <div class="comment_thumb">
                                                    <img src="{{$result["data"]["abilities"][2]["displayIcon"]}}" alt="">
                                                </div>
                                                <div class="comment_content">
                                                    <h3>{{$result["data"]["abilities"][2]["displayName"]}}</h3>
                                                    <span> {{$result["data"]["abilities"][2]["slot"]}}</span>
                                                    <p>{{$result["data"]["abilities"][2]["description"]}}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="comments_box">
                                            <div class="comment_list d-flex">
                                                <div class="comment_thumb">
                                                    <img src="{{$result["data"]["abilities"][3]["displayIcon"]}}" alt="">
                                                </div>
                                                <div class="comment_content">
                                                    <h3>{{$result["data"]["abilities"][3]["displayName"]}}</h3>
                                                    <span> {{$result["data"]["abilities"][3]["slot"]}}</span>
                                                    <p>{{$result["data"]["abilities"][3]["description"]}}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mascot-logo">
                            <img class="img-fluid" src="{{$result["data"]["displayIconSmall"]}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
