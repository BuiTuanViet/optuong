@extends('site.layout.site')

@section('title', isset($information['meta_title']) ? $information['meta_title'] : '')
@section('meta_description', isset($information['meta_description']) ? $information['meta_description'] : '')
@section('keywords', isset($information['meta_keyword']) ? $information['meta_keyword'] : '')

@section('content')
{{--    <div class="wap_1200">--}}
{{--        <div class="row">--}}
{{--            <div class="col-md-3 p-0">--}}
{{--            </div>--}}
{{--            <div class="col-md-9 float-right p-0">--}}
{{--                <div class="slideshow">--}}
{{--                    <p class="control-slideshow prev-slideshow transition">--}}
{{--                        <i class="fas fa-chevron-left"></i>--}}
{{--                    </p>--}}
{{--                    <div class="owl-carousel owl-theme owl-slideshow">--}}
{{--                        @foreach(\App\Entity\SubPost::showSubPost('slide', 3) as $id => $item)--}}
{{--                            <div>--}}
{{--                                <a href="{{ isset($item['link']) ? $item['link'] : '' }}" target="_blank" title="">--}}
{{--                                    <img class="lazy"--}}
{{--                                         data-src="{{ isset($item['image']) ? $item['image'] : '' }}"--}}
{{--                                         alt="" title=""></a>--}}
{{--                            </div>--}}
{{--                        @endforeach--}}
{{--                    </div>--}}
{{--                    <p class="control-slideshow next-slideshow transition">--}}
{{--                        <i class="fas fa-chevron-right"></i>--}}
{{--                    </p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
    <div class="section-content relative wap_1200 pt-5">
        <div class="row">
            <div class="box_item p-3">
                <div class="row row-dashed top-footer" id="row-203053751">
                    <div id="col-473247603" class="col medium-3 small-6 large-3">
                        <div class="col-inner">
                            <div class="icon-box featured-box icon-box-left text-left row">
                                <div class="col-md-4">
                                    <div class="icon-box-img" style="width: 60px">
                                        <div class="icon">
                                            <div class="icon-inner">
                                                <img width="229" height="229"
                                                     src="https://sangotoanthang.com/wp-content/uploads/2021/07/icon-chat-luong.png"
                                                     class="attachment-medium size-medium entered lazyloaded" alt=""
                                                     data-lazy-srcset="https://sangotoanthang.com/wp-content/uploads/2021/07/icon-chat-luong.png 229w, https://sangotoanthang.com/wp-content/uploads/2021/07/icon-chat-luong-100x100.png 100w, https://sangotoanthang.com/wp-content/uploads/2021/07/icon-chat-luong-150x150.png 150w, https://sangotoanthang.com/wp-content/uploads/2021/07/icon-chat-luong-50x50.png 50w, https://sangotoanthang.com/wp-content/uploads/2021/07/icon-chat-luong-45x45.png 45w"
                                                     data-lazy-sizes="(max-width: 229px) 100vw, 229px"
                                                     data-lazy-src="https://sangotoanthang.com/wp-content/uploads/2021/07/icon-chat-luong.png"
                                                     data-ll-status="loaded" sizes="(max-width: 229px) 100vw, 229px"
                                                     srcset="https://sangotoanthang.com/wp-content/uploads/2021/07/icon-chat-luong.png 229w, https://sangotoanthang.com/wp-content/uploads/2021/07/icon-chat-luong-100x100.png 100w, https://sangotoanthang.com/wp-content/uploads/2021/07/icon-chat-luong-150x150.png 150w, https://sangotoanthang.com/wp-content/uploads/2021/07/icon-chat-luong-50x50.png 50w, https://sangotoanthang.com/wp-content/uploads/2021/07/icon-chat-luong-45x45.png 45w">
                                                <noscript><img width="229" height="229"
                                                               src="https://sangotoanthang.com/wp-content/uploads/2021/07/icon-chat-luong.png"
                                                               class="attachment-medium size-medium" alt=""
                                                               srcset="https://sangotoanthang.com/wp-content/uploads/2021/07/icon-chat-luong.png 229w, https://sangotoanthang.com/wp-content/uploads/2021/07/icon-chat-luong-100x100.png 100w, https://sangotoanthang.com/wp-content/uploads/2021/07/icon-chat-luong-150x150.png 150w, https://sangotoanthang.com/wp-content/uploads/2021/07/icon-chat-luong-50x50.png 50w, https://sangotoanthang.com/wp-content/uploads/2021/07/icon-chat-luong-45x45.png 45w"
                                                               sizes="(max-width: 229px) 100vw, 229px"/></noscript>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="icon-box-text last-reset ">
                                        <p><span style="font-size: 120%; color: #000000;"><span style="color: #008000;">Sản phẩm chất lượng</span><span
                                                        style="line-height: 1.5;"><br>
                                </span></span><span style="font-size: 85%;">Sàn gỗ được tuyển chọn kĩ lưỡng, tỷ lệ đồng màu đạt trên 90% đối với gỗ tự nhiên.</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="col-262140228" class="col medium-3 small-6 large-3">
                        <div class="col-inner">
                            <div class="icon-box featured-box icon-box-left text-left row">
                                <div class="col-md-4">
                                    <div class="icon-box-img" style="width: 60px">
                                        <div class="icon">
                                            <div class="icon-inner">
                                                <img width="230" height="229"
                                                     src="https://sangotoanthang.com/wp-content/uploads/2021/07/icon-vc.png"
                                                     class="attachment-medium size-medium entered lazyloaded" alt=""
                                                     data-lazy-srcset="https://sangotoanthang.com/wp-content/uploads/2021/07/icon-vc.png 230w, https://sangotoanthang.com/wp-content/uploads/2021/07/icon-vc-100x100.png 100w, https://sangotoanthang.com/wp-content/uploads/2021/07/icon-vc-150x150.png 150w, https://sangotoanthang.com/wp-content/uploads/2021/07/icon-vc-50x50.png 50w, https://sangotoanthang.com/wp-content/uploads/2021/07/icon-vc-45x45.png 45w"
                                                     data-lazy-sizes="(max-width: 230px) 100vw, 230px"
                                                     data-lazy-src="https://sangotoanthang.com/wp-content/uploads/2021/07/icon-vc.png"
                                                     data-ll-status="loaded" sizes="(max-width: 230px) 100vw, 230px"
                                                     srcset="https://sangotoanthang.com/wp-content/uploads/2021/07/icon-vc.png 230w, https://sangotoanthang.com/wp-content/uploads/2021/07/icon-vc-100x100.png 100w, https://sangotoanthang.com/wp-content/uploads/2021/07/icon-vc-150x150.png 150w, https://sangotoanthang.com/wp-content/uploads/2021/07/icon-vc-50x50.png 50w, https://sangotoanthang.com/wp-content/uploads/2021/07/icon-vc-45x45.png 45w">
                                                <noscript><img width="230" height="229"
                                                               src="https://sangotoanthang.com/wp-content/uploads/2021/07/icon-vc.png"
                                                               class="attachment-medium size-medium" alt=""
                                                               srcset="https://sangotoanthang.com/wp-content/uploads/2021/07/icon-vc.png 230w, https://sangotoanthang.com/wp-content/uploads/2021/07/icon-vc-100x100.png 100w, https://sangotoanthang.com/wp-content/uploads/2021/07/icon-vc-150x150.png 150w, https://sangotoanthang.com/wp-content/uploads/2021/07/icon-vc-50x50.png 50w, https://sangotoanthang.com/wp-content/uploads/2021/07/icon-vc-45x45.png 45w"
                                                               sizes="(max-width: 230px) 100vw, 230px"/></noscript>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="icon-box-text last-reset">
                                        <p><span style="font-size: 120%; color: #000000;"><span
                                                        style="line-height: 1.5;"><span
                                                            style="color: #008000;">Giao hàng miễn phí</span><br>
                            </span></span><span style="font-size: 85%;">Chúng tôi hỗ trợ giao hàng miễn phí với những đơn hàng &gt;50m2 trong bán kính 30km.</span>
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="col-78830378" class="col medium-3 small-6 large-3">
                        <div class="col-inner">
                            <div class="icon-box featured-box icon-box-left text-left row">
                                <div class="col-md-4">
                                    <div class="icon-box-img" style="width: 60px">
                                        <div class="icon">
                                            <div class="icon-inner">
                                                <img width="229" height="229"
                                                     src="https://sangotoanthang.com/wp-content/uploads/2021/07/icon-cskh-Copy.png"
                                                     class="attachment-medium size-medium entered lazyloaded" alt=""
                                                     data-lazy-srcset="https://sangotoanthang.com/wp-content/uploads/2021/07/icon-cskh-Copy.png 229w, https://sangotoanthang.com/wp-content/uploads/2021/07/icon-cskh-Copy-100x100.png 100w, https://sangotoanthang.com/wp-content/uploads/2021/07/icon-cskh-Copy-150x150.png 150w, https://sangotoanthang.com/wp-content/uploads/2021/07/icon-cskh-Copy-50x50.png 50w, https://sangotoanthang.com/wp-content/uploads/2021/07/icon-cskh-Copy-45x45.png 45w"
                                                     data-lazy-sizes="(max-width: 229px) 100vw, 229px"
                                                     data-lazy-src="https://sangotoanthang.com/wp-content/uploads/2021/07/icon-cskh-Copy.png"
                                                     data-ll-status="loaded" sizes="(max-width: 229px) 100vw, 229px"
                                                     srcset="https://sangotoanthang.com/wp-content/uploads/2021/07/icon-cskh-Copy.png 229w, https://sangotoanthang.com/wp-content/uploads/2021/07/icon-cskh-Copy-100x100.png 100w, https://sangotoanthang.com/wp-content/uploads/2021/07/icon-cskh-Copy-150x150.png 150w, https://sangotoanthang.com/wp-content/uploads/2021/07/icon-cskh-Copy-50x50.png 50w, https://sangotoanthang.com/wp-content/uploads/2021/07/icon-cskh-Copy-45x45.png 45w">
                                                <noscript><img width="229" height="229"
                                                               src="https://sangotoanthang.com/wp-content/uploads/2021/07/icon-cskh-Copy.png"
                                                               class="attachment-medium size-medium" alt=""
                                                               srcset="https://sangotoanthang.com/wp-content/uploads/2021/07/icon-cskh-Copy.png 229w, https://sangotoanthang.com/wp-content/uploads/2021/07/icon-cskh-Copy-100x100.png 100w, https://sangotoanthang.com/wp-content/uploads/2021/07/icon-cskh-Copy-150x150.png 150w, https://sangotoanthang.com/wp-content/uploads/2021/07/icon-cskh-Copy-50x50.png 50w, https://sangotoanthang.com/wp-content/uploads/2021/07/icon-cskh-Copy-45x45.png 45w"
                                                               sizes="(max-width: 229px) 100vw, 229px"/></noscript>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="icon-box-text last-reset">


                                        <p><span style="font-size: 120%; color: #000000;"><span
                                                        style="line-height: 1.5;"><span
                                                            style="color: #008000;">Dịch vụ khách hàng</span><br>
</span></span><span style="font-size: 85%;">Chúng tôi luôn có những chính sách tốt nhất dành cho khách hàng thân thiết.</span>
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="col-409220389" class="col medium-3 small-6 large-3">
                        <div class="col-inner">
                            <div class="icon-box featured-box icon-box-left text-left row">
                                <div class="col-md-4">
                                    <div class="icon-box-img" style="width: 60px">
                                        <div class="icon">
                                            <div class="icon-inner">
                                                <img width="229" height="229"
                                                     src="https://sangotoanthang.com/wp-content/uploads/2021/07/icon-anh-Copy.png"
                                                     class="attachment-medium size-medium entered lazyloaded" alt=""
                                                     data-lazy-srcset="https://sangotoanthang.com/wp-content/uploads/2021/07/icon-anh-Copy.png 229w, https://sangotoanthang.com/wp-content/uploads/2021/07/icon-anh-Copy-100x100.png 100w, https://sangotoanthang.com/wp-content/uploads/2021/07/icon-anh-Copy-150x150.png 150w, https://sangotoanthang.com/wp-content/uploads/2021/07/icon-anh-Copy-50x50.png 50w, https://sangotoanthang.com/wp-content/uploads/2021/07/icon-anh-Copy-45x45.png 45w"
                                                     data-lazy-sizes="(max-width: 229px) 100vw, 229px"
                                                     data-lazy-src="https://sangotoanthang.com/wp-content/uploads/2021/07/icon-anh-Copy.png"
                                                     data-ll-status="loaded" sizes="(max-width: 229px) 100vw, 229px"
                                                     srcset="https://sangotoanthang.com/wp-content/uploads/2021/07/icon-anh-Copy.png 229w, https://sangotoanthang.com/wp-content/uploads/2021/07/icon-anh-Copy-100x100.png 100w, https://sangotoanthang.com/wp-content/uploads/2021/07/icon-anh-Copy-150x150.png 150w, https://sangotoanthang.com/wp-content/uploads/2021/07/icon-anh-Copy-50x50.png 50w, https://sangotoanthang.com/wp-content/uploads/2021/07/icon-anh-Copy-45x45.png 45w">
                                                <noscript><img width="229" height="229"
                                                               src="https://sangotoanthang.com/wp-content/uploads/2021/07/icon-anh-Copy.png"
                                                               class="attachment-medium size-medium" alt=""
                                                               srcset="https://sangotoanthang.com/wp-content/uploads/2021/07/icon-anh-Copy.png 229w, https://sangotoanthang.com/wp-content/uploads/2021/07/icon-anh-Copy-100x100.png 100w, https://sangotoanthang.com/wp-content/uploads/2021/07/icon-anh-Copy-150x150.png 150w, https://sangotoanthang.com/wp-content/uploads/2021/07/icon-anh-Copy-50x50.png 50w, https://sangotoanthang.com/wp-content/uploads/2021/07/icon-anh-Copy-45x45.png 45w"
                                                               sizes="(max-width: 229px) 100vw, 229px"/></noscript>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="icon-box-text last-reset">
                                        <p><span style="font-size: 120%; color: #000000;"><span
                                                        style="line-height: 1.5;"><span
                                                            style="color: #008000;">Mẫu mã đa dạng</span><br>
</span></span><span style="font-size: 85%;">Liên tục cho ra đời những sản phẩm đẹp nhất, nhằm đáp ứng mọi nhu cầu khách hàng.</span>
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--    <div class="wap_1200 w-clear">--}}
    {{--        <div class="slogan">--}}
    {{--            @foreach(\App\Entity\SubPost::showSubPost('slogan', 3) as $id => $item)--}}
    {{--                <marquee behavior="" direction=""><p><span style="font-family:Times New Roman,Times,serif;"><span--}}
    {{--                                    style="color:#d35400;"><span style="font-size:20px;"><strong><span--}}
    {{--                                                style="background-color:#ffffff;">--}}
    {{--                                        {{ isset($item['description'])  ? $item['description'] : '' }}--}}
    {{--                   </span></strong></span></span></span>--}}
    {{--                    </p>--}}
    {{--                </marquee>--}}
    {{--            @endforeach--}}
    {{--        </div>--}}
    {{--    </div>--}}
    <div class="wrap-main wrap-home w-clear">
        <div class="box_video">
            <div class="row">
                <div class="wap_1200 w-clear">
                    <div class="box_vd">
                    </div>
                </div>
            </div>
        </div>
        @foreach(\App\Entity\Category::getCate('product', 5) as $id => $itemCate)
            <div class="box-sanpham-tc">
                <div class="wap_1200 w-clear">
                    <div class="row">
                        <div class="box_item pt-3">
                            <div class="tdtc"><span> {{ $itemCate['title'] }}</span></div>
                            <div class="tdctc"><span> </span></div>
                            <div class="box_sp1">
                                @foreach(\App\Entity\Product::showProduct($itemCate['slug'], 4) as $id => $item)
                                    <a class="productc1 text-decoration-none w-clear"
                                       href="{{ route('product', ['slug' => $item->slug]) }}"
                                       title="Tấm ốp tường đa năng">
                                        <h3 class="name-productc1 text-split">{{ $id + 1 }}
                                            .{{ isset($item['title']) ? $item['title'] : '' }}</h3>
                                        <p class="pic-productc1 scale-img"><img
                                                    src="{{ isset($item['image']) ? $item['image'] : '' }}"
                                                    alt="{{ isset($item['title']) ? $item['title'] : '' }}"></p>
                                        <span class="view-productc1">Chi tiết</span>
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        <div class="box_duan">
            <div class="wap_1200 w-clear">
                <div class="row">
                    <div class="box_item pt-3" >
                        <div class="tdtc">Tin tức sự kiện</div>

                        <div class="tdctc">Mô tả thi công</div>

                        <div class="box_sp1">
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
            </div>
        </div>
        <div class="wrap-partner">
            <div class="wap_1200">
                <div class="tdtc">Đối tác chúng tôi</div>
                <div class="tdctc">Mô tả đối tác</div>
            </div>
            <div class="wrap-content d-flex align-items-center justify-content-between">
                <p class="control-carousel prev-carousel prev-partner transition"><i
                            class="fas fa-chevron-left"></i>
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

                <p class="control-carousel next-carousel next-partner transition"><i
                            class="fas fa-chevron-right"></i>
                </p>
            </div>
        </div>
    </div>
@endsection
