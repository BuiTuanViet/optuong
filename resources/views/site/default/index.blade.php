@extends('site.layout.site')

@section('title', isset($information['meta_title']) ? $information['meta_title'] : '')
@section('meta_description', isset($information['meta_description']) ? $information['meta_description'] : '')
@section('keywords', isset($information['meta_keyword']) ? $information['meta_keyword'] : '')

@section('content')
    <div class="wap_1200 w-clear">
        <div class="slogan">
            @foreach(\App\Entity\SubPost::showSubPost('slogan', 3) as $id => $item)
                <marquee behavior="" direction=""><p><span style="font-family:Times New Roman,Times,serif;"><span
                                    style="color:#d35400;"><span style="font-size:20px;"><strong><span
                                                style="background-color:#ffffff;">
                                        {{ isset($item['description'])  ? $item['description'] : '' }}
                   </span></strong></span></span></span>
                    </p>
                </marquee>
            @endforeach
        </div>
    </div>
    <div class="wap_1200 w-clear">
        <div class="slideshow">
            <p class="control-slideshow prev-slideshow transition"><i class="fas fa-chevron-left"></i></p>
            <div class="owl-carousel owl-theme owl-slideshow">
                @foreach(\App\Entity\SubPost::showSubPost('slide', 3) as $id => $item)
                <div>
                    <a href="{{ isset($item['link']) ? $item['link'] : '' }}" target="_blank" title="">
                        <img  class="lazy"
                                data-src="{{ isset($item['image']) ? $item['image'] : '' }}"
                                alt="" title=""></a>
                </div>
                @endforeach
            </div>
            <p class="control-slideshow next-slideshow transition"><i class="fas fa-chevron-right"></i></p>
        </div>
    </div>
    <div class="wrap-main wrap-home w-clear">
        <div class="wap_1200 w-clear">
            <div class="chay_tc">
            </div>
        </div>
        <div class="box_video">
            <div class="wap_1200 w-clear">
                <div class="box_vd">
                </div>
            </div>
        </div>
        <div class="box-sanpham-tc">
            <div class="wap_1200 w-clear">
                <div class="tdtc"><span> Vật liệu</span></div>
                <div class="tdctc"><span> </span></div>
                <div class="box_sp1">
                    @foreach(\App\Entity\Category::getCate('product', 8) as $id => $item)
                    <a class="productc1 text-decoration-none w-clear" href="{{ route('site_category_product', ['slug' => $item->slug]) }}"
                       title="Tấm ốp tường đa năng">
                        <h3 class="name-productc1 text-split">{{ $id + 1 }}.{{ isset($item['title']) ? $item['title'] : '' }}</h3>
                        <p class="pic-productc1 scale-img"><img
                                    src="{{ isset($item['image']) ? $item['image'] : '' }}"
                                    alt="{{ isset($item['title']) ? $item['title'] : '' }}"></p>
                        <span class="view-productc1">Xem tất cả</span>
                    </a>
                    @endforeach
                </div>

            </div>

        </div>


        <div class="box_duan">

            <div class="wap_1200 w-clear">

                <div class="tdtc">Tin tức sự kiện</div>

                <div class="tdctc">Mô tả thi công</div>

                <div class="chay_da">
                    @foreach(\App\Entity\Post::newPost('tin-tuc', 8) as $id => $item)
                    <a class="newsda text-decoration-none w-clear"
                       href="{{ route('post', ['cateSlug' => 'tin-tuc', 'slug' => $item->slug]) }}"
                       title="{{ isset($item['title']) ? $item['title'] : '' }}">

                        <p class="pic-newsda scale-img"><img
                                    src="{{ isset($item['image']) ? $item['image'] : '' }}"
                                    alt="{{ isset($item['title']) ? $item['title'] : '' }}"></p>

                        <div class="info-newsda">
                            <h3 class="name-newsda text-split">{{ isset($item['title']) ? $item['title'] : '' }}</h3>
                            <p class="desc-newsda text-split"></p>
                        </div>
                    </a>
                    @endforeach
                </div>

            </div>

        </div>
        <div class="wrap-partner">
            <div class="wap_1200">
                <div class="tdtc">Đối tác chúng tôi</div>
                <div class="tdctc">Mô tả đối tác</div>
            </div>
            <div class="wrap-content d-flex align-items-center justify-content-between">
                <p class="control-carousel prev-carousel prev-partner transition"><i class="fas fa-chevron-left"></i>
                </p>
                <div class="owl-carousel owl-theme owl-partner">
                    @foreach(\App\Entity\SubPost::showSubPost('doi-tac', 10) as $id => $item)
                    <div>
                        <a class="partner text-decoration-none" href="" target="_blank" title="">
                            <img src="{{ isset($item['image']) ? $item['image'] : '' }}" alt="">
                        </a>
                    </div>
                    @endforeach
                </div>

                <p class="control-carousel next-carousel next-partner transition"><i class="fas fa-chevron-right"></i>
                </p>
            </div>
        </div>
    </div>
@endsection
