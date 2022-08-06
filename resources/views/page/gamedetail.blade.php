@extends("masterpage")
@foreach($result as $steamRow )
@section("title",strip_tags(trim($steamRow->data->name)))
@endforeach

@section("banner")
    @foreach($result as $steamRow )
        <div class="breadcrumbs_aree breadcrumbs_bg mb-140" data-bgimg="{{$steamRow->data->screenshots[1]->path_full}}">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumbs_text text-center">
                            <h1>{{$steamRow->data->name}}</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
@section("content")

    @foreach($result as $steamRow )
        <!--game details section area start-->
        <section class="game_details_section mb-125">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="game_details_inner">
                            <div class="game_details_content top">
                                <div class="start_now_btn">
                                    <a class="btn btn-link"><img src="assets/img/icon/arrrow-icon.webp" alt=""> {{$steamRow->data->price_overview->final_formatted}}</a>
                                </div>
                                <span>Geliştirici : {{$steamRow->data->developers[0] }}</span>
                                <br>
                                <span> Çıkış Tarihi : {{$steamRow->data->release_date->date}}</span>
                                <h2 class="game_details_title">{{$steamRow->data->name}}</h2>
                                <small>
                                    Kategori:
                                    {{$steamRow->data->categories[0]->description}}
                                    @if(isset($steamRow->data->categories[1]->description))
                                    @endif
                                    @if(isset($steamRow->data->categories[2]->description))
                                    @endif

                                </small>
                                |
                                <small>
                                    Tür:
                                    @if(isset($steamRow->data->genres[1]->description))
                                        {{$steamRow->data->genres[1]->description}}
                                    @else
                                    Belirtilmemiş
                                    @endif
                                </small>
                                <br>
                                <div class="game_details_desc">
                                    <p>{{$steamRow->data->short_description}}</p>
                                    <p>Desteklenen Diller : {{ strip_tags(trim($steamRow->data->supported_languages)) }}</p>
                                </div>

                            </div>
                            <div class="game_details_thumb_inner slick__activation slick_navigation" data-slick='{
                                    "slidesToShow": 1,
                                    "slidesToScroll": 1,
                                    "arrows": false,
                                    "dots": false,
                                    "autoplay": true,
                                    "speed": 250,
                                    "infinite": true ,
                                    "responsive":[
                                    {"breakpoint":576, "settings": { "slidesToShow": 1 } }
                                    ]
                                }'>
                                <div class="game_details_thumb">
                                    <img src="{{$steamRow->data->screenshots[0]->path_full}}" alt="">
                                </div>
                                <div class="game_details_thumb">
                                    <img src="{{$steamRow->data->screenshots[1]->path_full}}" alt="">
                                </div>
                                <div class="game_details_thumb">
                                    <img src="{{$steamRow->data->screenshots[2]->path_full}}" alt="">
                                </div>
                                <div class="game_details_thumb">
                                    <img src="{{$steamRow->data->screenshots[3]->path_full}}" alt="">
                                </div>
                            </div>


                            <div class="game_details_content bottom">
                                <div class="game_details_content_step">
                                    <h2>Oyun Hakkında:</h2>
                                    <div class="game_details_desc">
                                       <p>{{ strip_tags(trim( $steamRow->data->about_the_game))}}</p>
                                    </div>
                                </div>

                                <div class="gam_additional_information">
                                    <h3 class="additional_information_title">Sistem Özellikleri:</h3>
                                    <div class="gam_additional_inner d-flex ">
                                        <div class="additional_information_text">
                                            <h4>Minimum:</h4>
                                            <span>{{ strip_tags(trim( $steamRow->data->pc_requirements->minimum))}}</span>
                                        </div>
                                        <div class="additional_information_text">
                                            <h4>Önerilen:</h4>
                                            @if(isset($steamRow->data->pc_requirements->recommended))
                                                <span>{{strip_tags(trim( $steamRow->data->pc_requirements->recommended))}}</span>
                                            @else
                                            Belirtilmemiş
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--game details section area end-->
    @endforeach

@endsection
