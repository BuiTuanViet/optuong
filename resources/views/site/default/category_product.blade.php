@extends('site.layout.site')

@section('type_meta', 'website')
@section('title', isset($category['meta_title']) && !empty($category['meta_title']) ? $category['meta_title'] : $category->title)
@section('meta_description',  isset($category['meta_description']) && !empty($category['meta_description']) ? $category['meta_description'] : $category->description)
@section('keywords', isset($category['meta_keyword']) && !empty($category['meta_keyword']) ? $category['meta_keyword'] : '')
@section('meta_image', isset($category->image) && !empty($category->image) ?  asset($category->image) : $information['logo'] )
@section('meta_url', isset($category->slug) ? '/cua-hang/'.$category->slug : '/cua-hang/san-pham')

@section('content')
    <div class="breadCrumbs">
        <div class="wrap-content">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class="text-decoration-none" href=""><span>Trang chủ</span></a></li>
                <li class="breadcrumb-item "><a class="text-decoration-none"
                                                href="#"><span>{{ $category->title }}</span></a>
                </li>

            </ol>
        </div>
    </div>
    <div class="wrap-main  w-clear">
        <div class="title-main"><span>{{ $category->title }}</span></div>
        <div class="content-main css_flex_product">
            @if(count($products) > 0 )
                @foreach($products as $id => $item)
                    <div class="product">
                        <a class="box-product text-decoration-none"
                           href="{{ route('product', ['slug' => $item['slug']]) }}"
                           title="{{ isset($item['title']) ? $item['title'] : '' }}">
                            <h3 class="name-product text-split">{{ isset($item['title']) ? $item['title'] : '' }}</h3>
                            <p class="pic-product scale-img"><img
                                        src="{{ isset($item['image']) ? $item['image'] : '' }}"
                                        alt="{{ isset($item['title']) ? $item['title'] : '' }}">
                            </p>
                        </a>
                    </div>
                @endforeach
                <div class="clear"></div>
                <div class="pagination-home">
                    <ul class='pagination justify-content-center mb-0'>
                        @if ($products->lastPage() > 1)
                            <li class='page-item'><a class='page-link' href='{{ $products->url(1) }}'><i
                                            class="fas fa-caret-left"></i></a></li>
                            @for ($i = 1; $i <= $products->lastPage(); $i++)
                                <li class='page-item {{ ($products->currentPage() == $i) ? ' active' : '' }}'><a
                                            class='page-link' href='{{ $products->url($i) }}'>{{ $i }}</a></li>
                            @endfor
                            <li class='page-item'><a class='page-link'
                                                     href='{{ $products->url($posts->currentPage()+1) }}'><i
                                            class="fas fa-caret-right"></i></a></li>
                        @endif
                    </ul>
                </div>
            @else
                <div class="alert alert-warning" role="alert">
                    <strong>Không tìm thấy kết quả</strong>
                </div>
            @endif
        </div>
    </div>
@endsection