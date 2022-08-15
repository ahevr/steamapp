@extends("masterpage")
@foreach($result as $steamRow )
@section("title",strip_tags(trim($steamRow->data->name))." | Loottr.com")
@section("metaImage",$steamRow->data->header_image)
@section("metaTitle",$steamRow->data->name." Steamde Kaç Para ?")
@section("metaDescription",$steamRow->data->short_description)
@endforeach

@section("banner")
    @foreach($result as $steamRow )
        <div class="breadcrumbs_aree breadcrumbs_bg mb-140" data-bgimg="{{$steamRow->data->screenshots[1]->path_full}}">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumbs_text text-center">
                            <h1>{{$steamRow->data->name}}</h1>
                            <ul class="d-flex justify-content-center">
                                <li><a href="{{route("index")}}">Ana Sayfa </a></li>
                            </ul>
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
                                    @if(isset($steamRow->data->price_overview->final_formatted))
                                        <a class="btn btn-link"  href="https://store.steampowered.com/app/{{$steamRow->data->steam_appid}}"target="_blank"  ><img src="assets/img/icon/arrrow-icon.webp" alt=""> {{$steamRow->data->price_overview->final_formatted}}</a>
                                        <div class="comment_thumb">
                                            <img src="https://store.akamai.steamstatic.com/public/shared/images/header/logo_steam.svg?t=962016" width="100px" alt="">
                                        </div>
                                    @else
                                        <a class="btn btn-link"><img src="assets/img/icon/arrrow-icon.webp" alt="">Free</a>

                                    @endif

                                </div>
                                <span></span>
                                <br>
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
                                       <p>{{strip_tags(trim( $steamRow->data->about_the_game))}}</p>
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
                                <div class="blog_comment_wrapper match_details_comment">
                                    <div class="comments_box">
                                        <div class="comments_title">
                                            <h2>Oyun Fiyatları</h2>
                                        </div>
                                        @foreach($result as $steamRow )
                                            <div class="comment_list d-flex">
                                                <div class="comment_thumb">
                                                    <img src="https://store.akamai.steamstatic.com/public/shared/images/header/logo_steam.svg?t=962016" alt="">
                                                </div>
                                                <div class="comment_content">
                                                    <a href="#"> <img src="assets/img/icon/reply.webp" alt=""> </a>

                                                    @if(isset($steamRow->data->price_overview->final_formatted))
                                                    <p><b>{{$steamRow->data->price_overview->final_formatted }}</b></p>
                                                    @else
                                                       <p><b>Ücretsiz</b></p>
                                                    @endif

                                                    <br>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="blog_comment_wrapper match_details_comment">
                                    <div class="comments_box">
                                        <div class="comments_title">
                                            <h2>Yorumlar</h2>
                                        </div>
                                        @foreach($commentR as $row)
                                            <div class="comment_list d-flex">
                                                <div class="comment_thumb">
                                                    <img src="https://store.akamai.steamstatic.com/public/shared/images/header/logo_steam.svg?t=962016" alt="">
                                                </div>
                                                <div class="comment_content">
                                                    <a href="#"> <img src="assets/img/icon/reply.webp" alt=""> </a>
                                                    <span>Yayınlanma: {{date('d.m.Y', ($row->timestamp_created))}}</span>
                                                    <br>
                                                    <p style="font-size: 11px">
                                                        Kayıtlarda: {{$hours = floor($row->author->playtime_forever / 60).'.'.($row->author->playtime_forever -   floor($row->author->playtime_forever / 60) * 60)}} saat
                                                        (İnceleme Gönderildiğinde: {{$hours = floor($row->author->playtime_at_review / 60).'.'.($row->author->playtime_at_review - floor($row->author->playtime_at_review / 60) * 60)}} saat) </p>
                                                    <p>{{$row->review }}</p>
                                                    <hr>
                                                    <p style="font-size: 10px">Hesabında {{$row->author->num_games_owned }} ürün var , Toplam {{$row->author->num_reviews}} inceleme</p>
                                                    <i class="fa-solid fa-thumbs-up"></i> {{$row->votes_up}} |
                                                    <i class="fa-solid fa-face-smile"></i> {{$row->votes_funny}}
                                                </div>
                                            </div>
                                        @endforeach

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endforeach
@endsection
