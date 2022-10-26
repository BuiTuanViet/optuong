@extends('site.layout.site')

@section('type_meta', 'article')
@section('title', isset($product->meta_title) ? $product->meta_title : $product->title )
@section('meta_description',  !empty($product->meta_description) ? $product->meta_description : $product->description)
@section('keywords', $product->meta_keyword)
@section('meta_image', !empty($product->image) ? asset($product->image) : $information['logo'] )
@section('meta_url', route('product', [ 'post_slug' => $product->slug]) )

@section('content')
    <div class="breadCrumbs">
        <div class="wrap-content">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class="text-decoration-none" href=""><span>Trang chủ</span></a></li>
                <li class="breadcrumb-item ">
                    <a class="text-decoration-none" href="{{ route('product', [ 'post_slug' => $product->slug]) }}">
                        <span>{{ $product->title }}</span>
                    </a>
                </li>

            </ol>
        </div>
    </div>

    <div class="wrap-main w-clear">
        <div class="grid-pro-detail w-clear">
            <div class="left-pro-detail w-clear">
                <a id="Zoom-1" class="MagicZoom"
                   data-options="zoomMode: off; hint: off; rightClick: true; selectorTrigger: hover; expandCaption: false; history: false;"
                   href="{{ $product->image }}"
                   title="GM4014"><img onerror="this.src='{{ $product->image }}';"
                                       src="{{ $product->image }}"
                                       alt="{{ $product->title }}"></a>
                <div class="gallery-thumb-pro">
                    <p class="control-carousel prev-carousel prev-thumb-pro transition"><i
                                class="fas fa-chevron-left"></i></p>
                    <div class="owl-carousel owl-theme owl-thumb-pro">
                        @if($product->image_list != '')
                            @foreach(explode(',', $product->image_list) as $id => $item)
                                <a class="thumb-pro-detail" data-zoom-id="Zoom-1"
                                   href="{{$item}}"
                                   title="{{ $product->title }}"><img
                                            onerror="{{$item}}';"
                                            src="{{$item}}"
                                            alt="{{ $product->title }}"></a>
                            @endforeach
                        @endif
                    </div>
                    <p class="control-carousel next-carousel next-thumb-pro transition"><i
                                class="fas fa-chevron-right"></i></p>
                </div>
            </div>

            <div class="right-pro-detail w-clear">
                <p class="title-pro-detail">{{ $product->title }}</p>
                <div class="social-plugin social-plugin-pro-detail w-clear">
                    <div class="addthis_inline_share_toolbox_qj48"></div>
                    <div class="zalo-share-button" data-href="gm4014" data-oaid="0981627248" data-layout="1"
                         data-color="blue" data-customize=false></div>
                </div>
                <div class="desc-pro-detail">
                    {{ $product->description }}
                </div>
                <div class="desc-pro-content">
                    {!! $product->content !!}
                </div>
                <ul class="attr-pro-detail">
                    <li class="w-clear">
                        <label class="attr-label-pro-detail">Mã sản phẩm:</label>
                        <div class="attr-content-pro-detail">{{ $product->code }}</div>
                    </li>
                    <li class="w-clear">
                        <label class="attr-label-pro-detail">Giá:</label>
                        <div class="attr-content-pro-detail">
                            @if($product->price == 0)
                                <span class="price-new-pro-detail">Liên hệ</span>
                            @else
                                <span class="price-new-pro-detail">{{ $product->price }} đ</span>
                            @endif
                        </div>
                    </li>
                    <li class="w-clear cart-hidden">
                        <label class="attr-label-pro-detail d-block">Màu sắc:</label>
                        <div class="attr-content-pro-detail d-block">
                        </div>
                    </li>
                    <li class="w-clear cart-hidden">
                        <label class="attr-label-pro-detail d-block">Kích thước:</label>
                        <div class="attr-content-pro-detail d-block">
                        </div>
                    </li>
                    <li class="w-clear cart-hidden">
                        <label class="attr-label-pro-detail d-block">Số lượng:</label>
                        <div class="attr-content-pro-detail d-block">
                            <div class="quantity-pro-detail">
                                <span class="quantity-minus-pro-detail">-</span>
                                <input type="number" class="qty-pro" min="1" value="1" readonly/>
                                <span class="quantity-plus-pro-detail">+</span>
                            </div>
                        </div>
                    </li>
                    <li class="w-clear">
                        <label class="attr-label-pro-detail">Lượt xem:</label>
                        <div class="attr-content-pro-detail">{{ isset($product->view) ? $product->view : 0 }}</div>
                    </li>
                </ul>
                <div class="cart-pro-detail cart-hidden">
                    <a class="transition addnow addcart text-decoration-none" data-id="38" data-action="addnow"><i
                                class="fas fa-shopping-bag"></i><span>Thêm vào giỏ hàng</span></a>
                    <a class="transition buynow addcart text-decoration-none" data-id="38" data-action="buynow"><i
                                class="fas fa-shopping-bag"></i><span>Đặt hàng</span></a>
                </div>
            </div>

            <div class="clear"></div>

            <div class="tags-pro-detail w-clear">
            </div>

            <div class="clear"></div>

            <div class="tabs-pro-detail">
                <ul class="ul-tabs-pro-detail w-clear">
                    <li class="active transition" data-tabs="info-pro-detail">Thông tin sản phẩm</li>
                    <li class="transition" data-tabs="commentfb-pro-detail">Bình luận</li>
                </ul>
                <div class="content-tabs-pro-detail info-pro-detail active">
                    {!! $product->properties !!}
                </div>
                <div class="content-tabs-pro-detail commentfb-pro-detail">
                    <div class="fb-comments" data-href="gm4014" data-numposts="3" data-colorscheme="light"
                         data-width="100%"></div>
                </div>
            </div>
        </div>
        <div class="title-main"><span>Sản phẩm cùng loại</span></div>
        <div class="content-main css_flex_product">
            @foreach(\App\Entity\Product::relativeProduct($product->slug, $product->product_id, 8) as $id => $item)
            <div class="product">
                <a class="box-product text-decoration-none" href="{{ route('product', [ 'post_slug' => $item['slug']]) }}" title="{{ isset($item['title']) ? $item['title'] :'' }}">
                    <h3 class="name-product text-split">{{ isset($item['title']) ? $item['title'] :'' }}</h3>
                    <p class="pic-product scale-img"><img
                                src="{{ isset($item['image']) ? $item['image'] :'' }}"
                                alt="{{ isset($item['title']) ? $item['title'] :'' }}"></p>
                </a>
            </div>
            @endforeach
        </div>
    </div>
@endsection