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
                        <h1>Valorant Maps</h1>
                        <ul class="d-flex justify-content-center">
                            <li><a href="{{route("index")}}">Ana Sayfa </a></li>
                            <li> <span>//</span></li>
                            <li><a href="{{route("valorant.index")}}">Valorant </a></li>
                            <li> <span>//</span></li>
                            <li> <span>Maps</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section("content")
    <div class="gaming_page_section mb-125">
        <div class="container">
            <div class="gaming_page_inner">
                <div class="row">
                    @foreach($resultMap["data"] as $mapsRow)
                        <div class="col-lg-6 col-md-6">
                            <div class="popular_gaming_thumb wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="1.1s">
                                <a href="game-details.html"><img src="{{$mapsRow["listViewIcon"]}}" alt=""></a>
                                <div class="gaming_details_btn">
                                    <a class="btn btn-link" href="javascript:void(0)">{{$mapsRow["displayName"]}} <img src="" alt=""> </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
