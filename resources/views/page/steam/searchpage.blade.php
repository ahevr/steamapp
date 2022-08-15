@extends("masterpage")
@section("title","Arama Sonuçları")
@section("banner")
    <div class="breadcrumbs_aree breadcrumbs_bg mb-140" data-bgimg="{{asset("app/data")}}/master/img/bg/breadcrumbs-bg.webp">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumbs_text text-center">
                        <h1>Arama</h1>
                        <ul class="d-flex justify-content-center">
                            <li><a href="{{route("index")}}">Ana Sayfa </a></li>
                            <li> <span>//</span></li>
                            <li>  Arama Sonuçları</li>
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
            <div class="gaming_page_header mb-70">
                <form>
                    <div class="gaming_header_inner d-flex justify-content-center">
                        <div class="gaming_form_search">
                            <input placeholder="Ara" id="text" type="text">
                            <button id="btn"><i class="icofont-search-1"></i></button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="gaming_page_inner">
                <div class="row">
                    @foreach($results as $row)
                        <div class="col-lg-4 col-md-4">
                            <div class="popular_gaming_thumb wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="1.1s">
                                <a href="{{route("getData.show",$row->appid)}}"><img src="{{$row->logo}}" alt=""></a>
                                <div class="gaming_details_btn">
                                    <a class="btn btn-link" href="{{route("getData.show",$row->appid)}}">Game Details <img src="{{$row->logo}}" alt=""> </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection



