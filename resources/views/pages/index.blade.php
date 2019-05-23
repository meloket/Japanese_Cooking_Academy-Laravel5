@extends('layouts.app')

@section('content')

    <div class="main_banner">
        <div class="main_banner_span">
            <div class="main_banner_first">The 7th Japanese Culinary Arts Competition </div>
            <div class="main_banner_second"><i>SHOKU no HANAYAGI</i></div>
            <div class="main_banner_third"><img src="{{ asset('image/Top_Prize.png') }}" width="500"></div>
            <div class="main_banner_last">March 2019 - March 2020</div>
            <div class="main_banner_last">Submission Deadline: September 30, 2019</div>
        </div>
    </div>
    <div class="container">
        <div class="mid_sec">
            <div class="mid_para">
                <h4><b>ORGANIZER</b></h4>
                <div class="pixdiv"></div>
                <div class="intro_text">The Japanese Culinary Academy <a href="https://culinary-academy.jp/english" target="_blank"><span class="linkico"><i class="fa fa-external-link" style="font-size:20px;"></i></span></a></div>
            </div>
            <div class="mid_para">
                <h4><b>JAPANESE CULINARY ACADEMY OFFICIAL SPONSORS</b></h4>
                <div class="pixdiv"></div>
                <div class="row">
                    <div class="col-sm-3">
                        <a href="https://www.ajinomoto.co.jp/" target="_blank">
                            <div class="link_label_sp">Ajinomoto Co., Inc.</div>
                            <img src="{{ asset('image/Logo_Official_1_Ajinomoto.png') }}">
                        </a>
                    </div>
                    <div class="col-sm-5">
                        <a href="http://www.osakagas.co.jp/en/index.html" target="_blank">
                            <div class="link_label_sp">Osaka Gas Co., Ltd</div>
                            <img src="{{ asset('image/Logo_Official_2_Daigas.png') }}">
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="https://www.ajinomoto.com/en/?scid=av_ot_pc_cojphead_global" target="_blank">
                            <div class="link_label_sp">Kikkoman Corporation</div>
                            <img src="{{ asset('image/Logo_Official_3_Kikkoman.png') }}">
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="https://gurunavi.com/" target="_blank">
                            <div class="link_label_sp">Gurunavi, Inc.</div>
                            <img src="{{ asset('image/Logo_Official_4_Gurunabi.png') }}">
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="https://www.takarashuzo.co.jp/english/" target="_blank">
                            <div class="link_label_sp">TAKARA SHUZO CO.,LTD.</div>
                            <img src="{{ asset('image/Logo_Official_5_Takara-Shuzo.png') }}">
                        </a>
                    </div>
                </div>
            </div>
            <div class="mid_para">
                <h4><b>THE 7TH JAPANESE CULINARY ART COMPETITION SPONSORS</b></h4>
                <div class="pixdiv"></div>
                <div class="row mid_span">
                    <div class="col-sm-4">
                        <a href="https://www.tanico.co.jp/" target="_blank">
                            <div class="link_label">Tanico Corporation</div>
                            <img src="{{ asset('image/Logo_Co_1_Tanico.png') }}">
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="https://www.tuyahime.jp/" target="_blank">
                            <div class="link_label">Yamagata Tsuyahime Brand Strategy and Promotion Headquarters</div>
                            <img src="{{ asset('image/Logo_Co_2_Tsuyahime.png') }}">
                        </a>
                    </div>
                </div>
                <div class="row mid_span">
                    <div class="col-sm-2">
                        <a href="http://www.asahibeer.com/index.psp.html" target="_blank">
                            <div class="link_label">Asahi Breweries, Ltd.</div>
                            <img src="{{ asset('image/Logo_Co_3_Asahi.png') }}">
                        </a>
                    </div>
                    <div class="col-sm-2">
                        <a href="https://www.uminosei.com/" target="_blank">
                            <div class="link_label">UMINOSEI Co., Ltd.</div>
                            <img src="{{ asset('image/Logo_Co_4_Uminosei.png') }}">
                        </a>
                    </div>
                    <div class="col-sm-2">
                        <a href="https://www.fmi.co.jp/corporate_en/" target="_blank">
                            <div class="link_label">FMI Corporation</div>
                            <img src="{{ asset('image/Logo_Co_5_FMI.png') }}">
                        </a>
                    </div>
                    <div class="col-sm-2">
                        <a href="https://www.konbu.co.jp/" target="_blank">
                            <div class="link_label">Okui Kaiseido. Co. Ltd.</div>
                            <img src="{{ asset('image/Logo_Co_6_Oku-Kaiseido.png') }}">
                        </a>
                    </div>
                    <div class="col-sm-2">
                        <a href="https://www.katsufujiya.com/" target="_blank">
                            <div class="link_label">Katsufujiya Co.Ltd.</div>
                            <img src="{{ asset('image/Logo_Co_7_Katsufujiya.png') }}">
                        </a>
                    </div>
                    <div class="col-sm-2">
                        <a href="https://www.gion-murata.co.jp/" target="_blank">
                            <div class="link_label">Gion.murata.Co., Ltd</div>
                            <img src="{{ asset('image/Logo_Co_8_Gion-murata.png') }}">
                        </a>
                    </div>
                    <div class="col-sm-2">
                        <a href="http://www.kyoto-katsuo.co.jp/" target="_blank">
                            <div class="link_label">Kyoto Katsuobushi Co., ltd.</div>
                            <img src="{{ asset('image/Logo_Co_9_Kyoto-Katsuobushi.png') }}">
                        </a>
                    </div>
                    <div class="col-sm-2">
                        <a href="https://www.kirin.co.jp/company/english/" target="_blank">
                            <div class="link_label">Kirin Brewery Company, Limited</div>
                            <img src="{{ asset('image/Logo_Co_10_Kirin.png') }}">
                        </a>
                    </div>
                    <div class="col-sm-2">
                        <a href="http://www.sakai-tohji.co.jp/" target="_blank">
                            <div class="link_label">SAKAI TOHJI IZUMIRIKI SEISAKUSHO CO., LTD</div>
                            <img src="{{ asset('image/Logo_Co_11_Sakai-Thoji.png') }}">
                        </a>
                    </div>
                    <div class="col-sm-2">
                        <a href="http://www.sapporobeer.jp/" target="_blank">
                            <div class="link_label">SAPPORO BREWERIES LTD.</div>
                            <img src="{{ asset('image/Logo_Co_12_Sapporo.png') }}">
                        </a>
                    </div>
                    <div class="col-sm-2">
                        <a href="https://www.suntory.com/?ke=hd&_ga=2.136800179.226408783.1556124026-423372618.1556124026" target="_blank">
                            <div class="link_label">SUNTORY</div>
                            <img src="{{ asset('image/Logo_Co_13_Suntory.png') }}">
                        </a>
                    </div>
                    <div class="col-sm-2">
                        <a href="https://www.gomaabura.jp/english/index.html" target="_blank">
                            <div class="link_label">TAKEMOTO OIL & FAT Co., Ltd.</div>
                            <img src="{{ asset('image/Logo_Co_14_Takamoto-Oil.png') }}">
                        </a>
                    </div>
                    <div class="col-sm-2">
                        <a href="http://www.fukushima-k.kyoto/en/" target="_blank">
                            <div class="link_label">Fukushima Katsuo Co., LTD.</div>
                            <img src="{{ asset('image/Logo_Co_15_Fukushima-Katsuo.png') }}">
                        </a>
                    </div>
                    <div class="col-sm-2">
                        <a href="https://www.fukusima.co.jp/en.html" target="_blank">
                            <div class="link_label">FUKUSHIMA INDUSTRIES CORP.</div>
                            <img src="{{ asset('image/Logo_Co_16_Fukushima-kogyo.png') }}">
                        </a>
                    </div>
                    <div class="col-sm-2">
                        <a href="https://fujimak.biz/" target="_blank">
                            <div class="link_label">FUJIMAK CORPORATION</div>
                            <img src="{{ asset('image/Logo_Co_17_Fujimak.png') }}">
                        </a>
                    </div>
                    <div class="col-sm-2">
                        <a href="http://www.chidorisu.co.jp/" target="_blank">
                            <div class="link_label">MURAYAMA ZOUSU CO., LTD</div>
                            <img src="{{ asset('image/Logo_Co_18_Murayamazosu.png') }}">
                        </a>
                    </div>
                    <div class="link_label2">
                        <div class="intro_text">The 7th Japanese Culinary Art Competition is supported by Ministry of Agriculture, Forestry and Fisheries; Agency for Cultural Affairs; Kyoto Prefecture, Kyoto City.</div>
                    </div>
                </div>
            </div>
            <div class="mid_para">
                <h4><b>JUDGES</b></h4>
                <div class="pixdiv"></div>
                <div class="row judges">
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-sm-4"><b>Masahiro Kurisu</b></div>
                            <div class="col-sm-8">Tankumakitamis Co., Ltd President</div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-sm-4"><b>Yukio Hattori</b></div>
                            <div class="col-sm-8">Principal of Hattori Nutrition College</div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-sm-4"><b>Motoi Kurisu</b></div>
                            <div class="col-sm-8">Kumahiko Co., Ltd President</div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-sm-4"><b>Masahiro Nakata</b></div>
                            <div class="col-sm-8">Taiwa Gakuen Education Inc. Director</div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-sm-5"><b>Kenichi Hashimoto</b></div>
                            <div class="col-sm-7">Ryozanpaku President</div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-sm-4"><b>Takuji Takahashi</b></div>
                            <div class="col-sm-8">Kinobu President</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mid_para">
                <h4><b>ORGANIZER</b></h4>
                <div class="pixdiv"></div>
                <p class="intro_text">The Japanese Culinary Academy is a non-profit organization based in Kyoto Prefecture, Japan. It was founded in 2004 by chefs and researchers to ensure the steady future of Japanese cuisine. The Japanese Culinary Academy is engaged in a range of activities to popularize and spread Japanese cuisine throughout the world through education, cultural events and research & techniques development. The Japanese Culinary Academy successfully helped to register Washoku (Japanese Cuisine) as UNESCO Intangible Cultural Heritage in 2013.</p>
                <div class="row intro_text">
                    <div class="col-sm-2"><b>Major Activities:</b></div>
                    <div class="col-sm-10">Food Education, Japanese Cuisine Laboratory, Japanese Culinary Fellowship, Japanese Culinary Arts Competition, Cookbook Publication of Japanese Culinary Academy’d COMPLETE JAPANESE CUISINE. </div>
                </div>
                <div class="row intro_text">
                    <div class="col-sm-2"><b>Chairman:</b></div>
                    <div class="col-sm-10">Yoshihiro Murata, owner-chef, Kikunoi Ryotei restaurant, Kyoto, Japan</div>
                </div>
                <div class="row intro_text mid_para_top">
                    <div class="col-sm-12"><b>Inquiries, Entry Applications:<br>Japanese Culinary Academy</b></div>
                    <!-- <div class="col-sm-8"></div> -->
                </div>
                <div class="row intro_text">
                    <div class="col-sm-1"><b>Email:</b></div>
                    <div class="col-sm-10"><a href="mailto:office@culinary-academy.jp">office@culinary-academy.jp</a></div>
                </div>
                <div class="row intro_text">
                    <div class="col-sm-1"><b>URL:</b></div>
                    <div class="col-sm-10"><a href="https://www.culinary-academy.jp/english" target="_blank">https://www.culinary-academy.jp/english</a></div>
                </div>
            </div>
        </div>
    </div>
    
@endsection