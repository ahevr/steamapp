@extends("masterpage")
@section("title","Loottr | Oyun Fiyatların Kolayca Öğren")
@section("metaTitle","Loottr | Oyun Fiyatların Kolayca Öğren")
@section("metaDescription","Steamde Olan Oyunları Aratıp Fiyatlarını Kolayca Öğrenebilirsiniz")
@section("banner")
    <div class="breadcrumbs_aree breadcrumbs_bg mb-140" data-bgimg="{{asset("app/data")}}/master/img/bg/breadcrumbs-bg.webp">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumbs_text text-center mt-10">
                        <h1>Loottr</h1>
                        <ul class="d-flex justify-content-center">
                            <li><a href="{{route("index")}}">Ana Sayfa </a></li>
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
                steam
            </div>
            <div class="col-sm-3 col-4">
                <a href="{{route("valorant.index")}}">Valorant</a>
            </div>
            <div class="col-sm-3 col-4">
                steam
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
                            <button id="btn"><i class="icofont-search-1" onclick="javascript: window.open('/' + document.getElementById('text').value);" ></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <section class="faq_page_section mb-140">
            <div class="container">
                <div class="faq_page_inner">
                    <div class="accordion" id="accordionExample">
                        <div class="faq_question_list">
                            <h2 class="questions__title accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Biz Kimiz?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="frequently_desc accordion-body">
                                    <p>Loottr oyun fiyatları oyun bilgileri oyun hakkında içerikler ve çok daha fazlasının bulunduğu bir platformdur.</p>
                                </div>
                            </div>
                        </div>
                        <div class="faq_question_list">
                            <h2 class="questions__title accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Hangi Oyunlar Var?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="frequently_desc accordion-body">
                                    <p>Steamde olan bütün oyunlar (şuan için toplam 595 bin civarında içerik ) mevcuttur.</p>
                                </div>
                            </div>
                        </div>
                        <div class="faq_question_list">
                            <h2 class="questions__title accordion-header" id="headingthree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsethree" aria-expanded="false" aria-controls="collapsethree">
                                    Nasıl Çalışır?
                                </button>
                            </h2>
                            <div id="collapsethree" class="accordion-collapse collapse" aria-labelledby="headingthree" data-bs-parent="#accordionExample">
                                <div class="frequently_desc accordion-body">
                                    <p>Dilediğiniz oyunu yukarıdaki arama çubuğuna yazıp aratabilirsiniz.</p>
                                </div>
                            </div>
                        </div>
                        <div class="faq_question_list">
                            <h2 class="questions__title accordion-header" id="headingfour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                    Oyun İçerikleri Neler?
                                </button>
                            </h2>
                            <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="headingfour" data-bs-parent="#accordionExample">
                                <div class="frequently_desc accordion-body">
                                    <p>Sadece oyunların fiyatları değil sistem gereksinimleri,oyun hikayesi,geliştirici firma,çıkış tarihi,steam yorumları gibi pek çok detaylı içerik bulabilirsiniz.</p>
                                </div>
                            </div>
                        </div>
                        <div class="faq_question_list">
                            <h2 class="questions__title accordion-header" id="headingfive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                                    Nasıl Satın Alınır?
                                </button>
                            </h2>
                            <div id="collapsefive" class="accordion-collapse collapse" aria-labelledby="headingfive" data-bs-parent="#accordionExample">
                                <div class="frequently_desc accordion-body">
                                    <p>Fiyatların üzerine tıkladığınız zaman sizi steamın ilgili sayfasına yönlendirmesini yapacaktır.</p>
                                </div>
                            </div>
                        </div>
                        <div class="faq_question_list">
                            <h2 class="questions__title accordion-header" id="headingsix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesix" aria-expanded="false" aria-controls="collapsesix">
                                    Hangi Platformlar Var?
                                </button>
                            </h2>
                            <div id="collapsesix" class="accordion-collapse collapse" aria-labelledby="headingsix" data-bs-parent="#accordionExample">
                                <div class="frequently_desc accordion-body">
                                    <p>Şuan sadece steam içerikleri olan sitemizde geliştirici ekibimiz şuan gamepass ve epic game üzerinde geliştirmeleri yapmaktadır.Çok yakın bir zamanda oyunlar gamepasste var mı epic gamede kaç para görülebilecektir.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection


