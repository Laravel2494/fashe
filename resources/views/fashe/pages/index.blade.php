@extends('fashe.layouts.app_master')


@section('content')
    <!-- Slide1 -->
    @if (Route::currentRouteName() == "index")
        @include("fashe.includes.slide")
    @endif


    <!-- Banner -->
     {{-- <div class="banner bgwhite p-t-40 p-b-40">
        <div class="container">
            <div class="row">
                <div class="col-sm-10 col-md-8 col-lg-4 m-l-r-auto">
                    <!-- block1 -->
                    <div class="block1 hov-img-zoom pos-relative m-b-30">
                        <img src="{{ asset('fashe') }}/images/banner-05.jpg" alt="IMG-BENNER">

                        <div class="block1-wrapbtn w-size2">
                            <!-- Button -->
                            <a href="#" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
                                Sunglasses
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-10 col-md-8 col-lg-4 m-l-r-auto">
                    <!-- block1 -->
                    <div class="block1 hov-img-zoom pos-relative m-b-30">
                        <img src="{{ asset('fashe') }}/images/banner-03.jpg" alt="IMG-BENNER">

                        <div class="block1-wrapbtn w-size2">
                            <!-- Button -->
                            <a href="#" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
                                Watches
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-10 col-md-8 col-lg-4 m-l-r-auto">
                    <!-- block1 -->
                    <div class="block1 hov-img-zoom pos-relative m-b-30">
                        <img src="{{ asset('fashe') }}/images/banner-10.jpg" alt="IMG-BENNER">

                        <div class="block1-wrapbtn w-size2">
                            <!-- Button -->
                            <a href="#" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
                                Bags
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>  --}}


    <!-- Our product -->
    <section class="bgwhite p-t-45 p-b-58">
        <div class="container">
            <div class="sec-title p-b-22">
                <h3 class="m-text5 t-center">
                    @lang("langue.our_products")
                </h3>
            </div>

            <!-- Tab01 -->
            <div class="tab01">
                <!-- Nav tabs -->
                {{-- <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#best-seller" role="tab">Best Seller</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#featured" role="tab">@lang("langue.featured")</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#sale" role="tab">@lang("langue.sale")</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#top-rate" role="tab">@lang("langue.top_rate")</a>
                    </li>
                </ul> --}}

                <!-- Tab panes -->
                <div class="tab-content p-t-35">
                    {{-- Подключение Сесси --}}
                    @include("includes.session")

                    {{-- <!-- Fearures --> --}}
                    <div class="tab-pane fade show active" id="best-seller" role="tabpanel">
                        @include("fashe.includes.features", $features)
                    </div>

                    {{-- <!-- - -->
                    <div class="tab-pane fade" id="featured" role="tabpanel">
                        <div class="row">
                            <div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
                                <!-- Block2 -->
                                <div class="block2">
                                    <div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelsale">
                                        <img src="{{ asset('fashe') }}/images/item-07.jpg" alt="IMG-PRODUCT">

                                        <div class="block2-overlay trans-0-4">
                                            <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                                                <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                                                <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                                            </a>

                                            <div class="block2-btn-addcart w-size1 trans-0-4">
                                                <!-- Button -->
                                                <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                                                    Add to Cart
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="block2-txt p-t-20">
                                        <a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
                                            Frayed denim shorts
                                        </a>

                                        <span class="block2-oldprice m-text7 p-r-5">
                                            $29.50
                                        </span>

                                        <span class="block2-newprice m-text8 p-r-5">
                                            $15.90
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
                                <!-- Block2 -->
                                <div class="block2">
                                    <div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
                                        <img src="{{ asset('fashe') }}/images/item-01.jpg" alt="IMG-PRODUCT">

                                        <div class="block2-overlay trans-0-4">
                                            <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                                                <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                                                <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                                            </a>

                                            <div class="block2-btn-addcart w-size1 trans-0-4">
                                                <!-- Button -->
                                                <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                                                    Add to Cart
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="block2-txt p-t-20">
                                        <a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
                                            Herschel supply co 25l
                                        </a>

                                        <span class="block2-price m-text6 p-r-5">
                                            $75.00
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
                                <!-- Block2 -->
                                <div class="block2">
                                    <div class="block2-img wrap-pic-w of-hidden pos-relative">
                                        <img src="{{ asset('fashe') }}/images/item-14.jpg" alt="IMG-PRODUCT">

                                        <div class="block2-overlay trans-0-4">
                                            <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                                                <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                                                <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                                            </a>

                                            <div class="block2-btn-addcart w-size1 trans-0-4">
                                                <!-- Button -->
                                                <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                                                    Add to Cart
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="block2-txt p-t-20">
                                        <a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
                                            Denim jacket blue
                                        </a>

                                        <span class="block2-price m-text6 p-r-5">
                                            $92.50
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
                                <!-- Block2 -->
                                <div class="block2">
                                    <div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
                                        <img src="{{ asset('fashe') }}/images/item-06.jpg" alt="IMG-PRODUCT">

                                        <div class="block2-overlay trans-0-4">
                                            <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                                                <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                                                <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                                            </a>

                                            <div class="block2-btn-addcart w-size1 trans-0-4">
                                                <!-- Button -->
                                                <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                                                    Add to Cart
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="block2-txt p-t-20">
                                        <a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
                                            Herschel supply co 25l
                                        </a>

                                        <span class="block2-price m-text6 p-r-5">
                                            $75.00
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
                                <!-- Block2 -->
                                <div class="block2">
                                    <div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelsale">
                                        <img src="{{ asset('fashe') }}/images/item-11.jpg" alt="IMG-PRODUCT">

                                        <div class="block2-overlay trans-0-4">
                                            <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                                                <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                                                <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                                            </a>

                                            <div class="block2-btn-addcart w-size1 trans-0-4">
                                                <!-- Button -->
                                                <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                                                    Add to Cart
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="block2-txt p-t-20">
                                        <a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
                                            Frayed denim shorts
                                        </a>

                                        <span class="block2-oldprice m-text7 p-r-5">
                                            $29.50
                                        </span>

                                        <span class="block2-newprice m-text8 p-r-5">
                                            $15.90
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
                                <!-- Block2 -->
                                <div class="block2">
                                    <div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
                                        <img src="{{ asset('fashe') }}/images/item-12.jpg" alt="IMG-PRODUCT">

                                        <div class="block2-overlay trans-0-4">
                                            <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                                                <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                                                <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                                            </a>

                                            <div class="block2-btn-addcart w-size1 trans-0-4">
                                                <!-- Button -->
                                                <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                                                    Add to Cart
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="block2-txt p-t-20">
                                        <a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
                                            Herschel supply co 25l
                                        </a>

                                        <span class="block2-price m-text6 p-r-5">
                                            $75.00
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
                                <!-- Block2 -->
                                <div class="block2">
                                    <div class="block2-img wrap-pic-w of-hidden pos-relative">
                                        <img src="{{ asset('fashe') }}/images/item-15.jpg" alt="IMG-PRODUCT">

                                        <div class="block2-overlay trans-0-4">
                                            <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                                                <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                                                <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                                            </a>

                                            <div class="block2-btn-addcart w-size1 trans-0-4">
                                                <!-- Button -->
                                                <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                                                    Add to Cart
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="block2-txt p-t-20">
                                        <a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
                                            Denim jacket blue
                                        </a>

                                        <span class="block2-price m-text6 p-r-5">
                                            $92.50
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}

                    {{-- Block Sales --}}
                    {{-- <div class="tab-pane fade" id="sale" role="tabpanel">
                        @include("fashe.includes.sales", $sales)
                    </div> --}}

                    {{-- <!--  -->
                    <div class="tab-pane fade" id="top-rate" role="tabpanel">
                        <div class="row">
                            <div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
                                <!-- Block2 -->
                                <div class="block2">
                                    <div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
                                        <img src="{{ asset('fashe') }}/images/item-02.jpg" alt="IMG-PRODUCT">

                                        <div class="block2-overlay trans-0-4">
                                            <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                                                <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                                                <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                                            </a>

                                            <div class="block2-btn-addcart w-size1 trans-0-4">
                                                <!-- Button -->
                                                <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                                                    Add to Cart
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="block2-txt p-t-20">
                                        <a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
                                            Herschel supply co 25l
                                        </a>

                                        <span class="block2-price m-text6 p-r-5">
                                            $75.00
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
                                <!-- Block2 -->
                                <div class="block2">
                                    <div class="block2-img wrap-pic-w of-hidden pos-relative">
                                        <img src="{{ asset('fashe') }}/images/item-03.jpg" alt="IMG-PRODUCT">

                                        <div class="block2-overlay trans-0-4">
                                            <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                                                <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                                                <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                                            </a>

                                            <div class="block2-btn-addcart w-size1 trans-0-4">
                                                <!-- Button -->
                                                <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                                                    Add to Cart
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="block2-txt p-t-20">
                                        <a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
                                            Denim jacket blue
                                        </a>

                                        <span class="block2-price m-text6 p-r-5">
                                            $92.50
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
                                <!-- Block2 -->
                                <div class="block2">
                                    <div class="block2-img wrap-pic-w of-hidden pos-relative">
                                        <img src="{{ asset('fashe') }}/images/item-05.jpg" alt="IMG-PRODUCT">

                                        <div class="block2-overlay trans-0-4">
                                            <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                                                <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                                                <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                                            </a>

                                            <div class="block2-btn-addcart w-size1 trans-0-4">
                                                <!-- Button -->
                                                <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                                                    Add to Cart
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="block2-txt p-t-20">
                                        <a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
                                            Coach slim easton black
                                        </a>

                                        <span class="block2-price m-text6 p-r-5">
                                            $165.90
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
                                <!-- Block2 -->
                                <div class="block2">
                                    <div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelsale">
                                        <img src="{{ asset('fashe') }}/images/item-07.jpg" alt="IMG-PRODUCT">

                                        <div class="block2-overlay trans-0-4">
                                            <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                                                <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                                                <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                                            </a>

                                            <div class="block2-btn-addcart w-size1 trans-0-4">
                                                <!-- Button -->
                                                <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                                                    Add to Cart
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="block2-txt p-t-20">
                                        <a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
                                            Frayed denim shorts
                                        </a>

                                        <span class="block2-oldprice m-text7 p-r-5">
                                            $29.50
                                        </span>

                                        <span class="block2-newprice m-text8 p-r-5">
                                            $15.90
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
                                <!-- Block2 -->
                                <div class="block2">
                                    <div class="block2-img wrap-pic-w of-hidden pos-relative">
                                        <img src="{{ asset('fashe') }}/images/item-10.jpg" alt="IMG-PRODUCT">

                                        <div class="block2-overlay trans-0-4">
                                            <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                                                <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                                                <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                                            </a>

                                            <div class="block2-btn-addcart w-size1 trans-0-4">
                                                <!-- Button -->
                                                <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                                                    Add to Cart
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="block2-txt p-t-20">
                                        <a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
                                            Coach slim easton black
                                        </a>

                                        <span class="block2-price m-text6 p-r-5">
                                            $165.90
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
                                <!-- Block2 -->
                                <div class="block2">
                                    <div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelsale">
                                        <img src="{{ asset('fashe') }}/images/item-11.jpg" alt="IMG-PRODUCT">

                                        <div class="block2-overlay trans-0-4">
                                            <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                                                <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                                                <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                                            </a>

                                            <div class="block2-btn-addcart w-size1 trans-0-4">
                                                <!-- Button -->
                                                <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                                                    Add to Cart
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="block2-txt p-t-20">
                                        <a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
                                            Frayed denim shorts
                                        </a>

                                        <span class="block2-oldprice m-text7 p-r-5">
                                            $29.50
                                        </span>

                                        <span class="block2-newprice m-text8 p-r-5">
                                            $15.90
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
                                <!-- Block2 -->
                                <div class="block2">
                                    <div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
                                        <img src="{{ asset('fashe') }}/images/item-12.jpg" alt="IMG-PRODUCT">

                                        <div class="block2-overlay trans-0-4">
                                            <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                                                <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                                                <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                                            </a>

                                            <div class="block2-btn-addcart w-size1 trans-0-4">
                                                <!-- Button -->
                                                <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                                                    Add to Cart
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="block2-txt p-t-20">
                                        <a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
                                            Herschel supply co 25l
                                        </a>

                                        <span class="block2-price m-text6 p-r-5">
                                            $75.00
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
                                <!-- Block2 -->
                                <div class="block2">
                                    <div class="block2-img wrap-pic-w of-hidden pos-relative">
                                        <img src="{{ asset('fashe') }}/images/item-15.jpg" alt="IMG-PRODUCT">

                                        <div class="block2-overlay trans-0-4">
                                            <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                                                <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                                                <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                                            </a>

                                            <div class="block2-btn-addcart w-size1 trans-0-4">
                                                <!-- Button -->
                                                <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                                                    Add to Cart
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="block2-txt p-t-20">
                                        <a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
                                            Denim jacket blue
                                        </a>

                                        <span class="block2-price m-text6 p-r-5">
                                            $92.50
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </section>


    <!-- Banner video -->
    {{-- <section class="parallax0 parallax100" style="background-image: url(images/bg-video-01.jpg);">
        <div class="overlay0 p-t-190 p-b-200">
            <div class="flex-col-c-m p-l-15 p-r-15">
                <span class="m-text9 p-t-45 fs-20-sm">
                    The Beauty
                </span>

                <h3 class="l-text1 fs-35-sm">
                    Lookbook
                </h3>

                <span class="btn-play s-text4 hov5 cs-pointer p-t-25" data-toggle="modal" data-target="#modal-video-01">
                    <i class="fa fa-play" aria-hidden="true"></i>
                    Play Video
                </span>
            </div>
        </div>
    </section> --}}

    <!-- Blog -->
    {{-- <section class="blog bgwhite p-t-94 p-b-65">
        <div class="container">
            <div class="sec-title p-b-52">
                <h3 class="m-text5 t-center">
                    Our Blog
                </h3>
            </div>

            <div class="row">
                <div class="col-sm-10 col-md-4 p-b-30 m-l-r-auto">
                    <!-- Block3 -->
                    <div class="block3">
                        <a href="blog-detail.html" class="block3-img dis-block hov-img-zoom">
                            <img src="{{ asset('fashe') }}/images/blog-01.jpg" alt="IMG-BLOG">
                        </a>

                        <div class="block3-txt p-t-14">
                            <h4 class="p-b-7">
                                <a href="blog-detail.html" class="m-text11">
                                    Black Friday Guide: Best Sales & Discount Codes
                                </a>
                            </h4>

                            <span class="s-text6">By</span> <span class="s-text7">Nancy Ward</span>
                            <span class="s-text6">on</span> <span class="s-text7">July 22, 2017</span>

                            <p class="s-text8 p-t-16">
                                Duis ut velit gravida nibh bibendum commodo. Sus-pendisse pellentesque mattis augue id euismod. Inter-dum et malesuada fames
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-10 col-md-4 p-b-30 m-l-r-auto">
                    <!-- Block3 -->
                    <div class="block3">
                        <a href="blog-detail.html" class="block3-img dis-block hov-img-zoom">
                            <img src="{{ asset('fashe') }}/images/blog-02.jpg" alt="IMG-BLOG">
                        </a>

                        <div class="block3-txt p-t-14">
                            <h4 class="p-b-7">
                                <a href="blog-detail.html" class="m-text11">
                                    The White Sneakers Nearly Every Fashion Girls Own
                                </a>
                            </h4>

                            <span class="s-text6">By</span> <span class="s-text7">Nancy Ward</span>
                            <span class="s-text6">on</span> <span class="s-text7">July 18, 2017</span>

                            <p class="s-text8 p-t-16">
                                Nullam scelerisque, lacus sed consequat laoreet, dui enim iaculis leo, eu viverra ex nulla in tellus. Nullam nec ornare tellus, ac fringilla lacus. Ut sit ame
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-10 col-md-4 p-b-30 m-l-r-auto">
                    <!-- Block3 -->
                    <div class="block3">
                        <a href="blog-detail.html" class="block3-img dis-block hov-img-zoom">
                            <img src="{{ asset('fashe') }}/images/blog-03.jpg" alt="IMG-BLOG">
                        </a>

                        <div class="block3-txt p-t-14">
                            <h4 class="p-b-7">
                                <a href="blog-detail.html" class="m-text11">
                                    New York SS 2018 Street Style: Annina Mislin
                                </a>
                            </h4>

                            <span class="s-text6">By</span> <span class="s-text7">Nancy Ward</span>
                            <span class="s-text6">on</span> <span class="s-text7">July 2, 2017</span>

                            <p class="s-text8 p-t-16">
                                Proin nec vehicula lorem, a efficitur ex. Nam vehicula nulla vel erat tincidunt, sed hendrerit ligula porttitor. Fusce sit amet maximus nunc
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    {{--  <!-- Instagram -->
    <section class="instagram p-t-20">
        <div class="sec-title p-b-52 p-l-15 p-r-15">
            <h3 class="m-text5 t-center">
                @ follow us on Instagram
            </h3>
        </div>

        <div class="flex-w">
            <!-- Block4 -->
            <div class="block4 wrap-pic-w">
                <img src="{{ asset('fashe') }}/images/gallery-03.jpg" alt="IMG-INSTAGRAM">

                <a href="#" class="block4-overlay sizefull ab-t-l trans-0-4">
                    <span class="block4-overlay-heart s-text9 flex-m trans-0-4 p-l-40 p-t-25">
                        <i class="icon_heart_alt fs-20 p-r-12" aria-hidden="true"></i>
                        <span class="p-t-2">39</span>
                    </span>

                    <div class="block4-overlay-txt trans-0-4 p-l-40 p-r-25 p-b-30">
                        <p class="s-text10 m-b-15 h-size1 of-hidden">
                            Nullam scelerisque, lacus sed consequat laoreet, dui enim iaculis leo, eu viverra ex nulla in tellus. Nullam nec ornare tellus, ac fringilla lacus. Ut sit amet enim orci. Nam eget metus elit.
                        </p>

                        <span class="s-text9">
                            Photo by @nancyward
                        </span>
                    </div>
                </a>
            </div>

            <!-- Block4 -->
            <div class="block4 wrap-pic-w">
                <img src="{{ asset('fashe') }}/images/gallery-07.jpg" alt="IMG-INSTAGRAM">

                <a href="#" class="block4-overlay sizefull ab-t-l trans-0-4">
                    <span class="block4-overlay-heart s-text9 flex-m trans-0-4 p-l-40 p-t-25">
                        <i class="icon_heart_alt fs-20 p-r-12" aria-hidden="true"></i>
                        <span class="p-t-2">39</span>
                    </span>

                    <div class="block4-overlay-txt trans-0-4 p-l-40 p-r-25 p-b-30">
                        <p class="s-text10 m-b-15 h-size1 of-hidden">
                            Nullam scelerisque, lacus sed consequat laoreet, dui enim iaculis leo, eu viverra ex nulla in tellus. Nullam nec ornare tellus, ac fringilla lacus. Ut sit amet enim orci. Nam eget metus elit.
                        </p>

                        <span class="s-text9">
                            Photo by @nancyward
                        </span>
                    </div>
                </a>
            </div>

            <!-- Block4 -->
            <div class="block4 wrap-pic-w">
                <img src="{{ asset('fashe') }}/images/gallery-09.jpg" alt="IMG-INSTAGRAM">

                <a href="#" class="block4-overlay sizefull ab-t-l trans-0-4">
                    <span class="block4-overlay-heart s-text9 flex-m trans-0-4 p-l-40 p-t-25">
                        <i class="icon_heart_alt fs-20 p-r-12" aria-hidden="true"></i>
                        <span class="p-t-2">39</span>
                    </span>

                    <div class="block4-overlay-txt trans-0-4 p-l-40 p-r-25 p-b-30">
                        <p class="s-text10 m-b-15 h-size1 of-hidden">
                            Nullam scelerisque, lacus sed consequat laoreet, dui enim iaculis leo, eu viverra ex nulla in tellus. Nullam nec ornare tellus, ac fringilla lacus. Ut sit amet enim orci. Nam eget metus elit.
                        </p>

                        <span class="s-text9">
                            Photo by @nancyward
                        </span>
                    </div>
                </a>
            </div>

            <!-- Block4 -->
            <div class="block4 wrap-pic-w">
                <img src="{{ asset('fashe') }}/images/gallery-13.jpg" alt="IMG-INSTAGRAM">

                <a href="#" class="block4-overlay sizefull ab-t-l trans-0-4">
                    <span class="block4-overlay-heart s-text9 flex-m trans-0-4 p-l-40 p-t-25">
                        <i class="icon_heart_alt fs-20 p-r-12" aria-hidden="true"></i>
                        <span class="p-t-2">39</span>
                    </span>

                    <div class="block4-overlay-txt trans-0-4 p-l-40 p-r-25 p-b-30">
                        <p class="s-text10 m-b-15 h-size1 of-hidden">
                            Nullam scelerisque, lacus sed consequat laoreet, dui enim iaculis leo, eu viverra ex nulla in tellus. Nullam nec ornare tellus, ac fringilla lacus. Ut sit amet enim orci. Nam eget metus elit.
                        </p>

                        <span class="s-text9">
                            Photo by @nancyward
                        </span>
                    </div>
                </a>
            </div>

            <!-- Block4 -->
            <div class="block4 wrap-pic-w">
                <img src="{{ asset('fashe') }}/images/gallery-15.jpg" alt="IMG-INSTAGRAM">

                <a href="#" class="block4-overlay sizefull ab-t-l trans-0-4">
                    <span class="block4-overlay-heart s-text9 flex-m trans-0-4 p-l-40 p-t-25">
                        <i class="icon_heart_alt fs-20 p-r-12" aria-hidden="true"></i>
                        <span class="p-t-2">39</span>
                    </span>

                    <div class="block4-overlay-txt trans-0-4 p-l-40 p-r-25 p-b-30">
                        <p class="s-text10 m-b-15 h-size1 of-hidden">
                            Nullam scelerisque, lacus sed consequat laoreet, dui enim iaculis leo, eu viverra ex nulla in tellus. Nullam nec ornare tellus, ac fringilla lacus. Ut sit amet enim orci. Nam eget metus elit.
                        </p>

                        <span class="s-text9">
                            Photo by @nancyward
                        </span>
                    </div>
                </a>
            </div>
        </div>
    </section>  --}}

    <hr>
    <!-- Shipping -->
    <section class="shipping bgwhite p-t-62 p-b-46">
        <div class="flex-w p-l-15 p-r-15">
            <div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 respon1">
                <h4 class="m-text12 t-center">
                    {{--  Free Delivery Worldwide  --}}
                    Бесплатная доставка по всему миру
                </h4>

                <a href="{{ route('contact') }}" class="s-text11 t-center">
                    {{--  Click here for more info  --}}
                    Нажмите здесь для дополнительной информации
                </a>
            </div>

            <div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 bo2 respon2">
                <h4 class="m-text12 t-center">
                    Возврат 30 дней
                    {{--  30 Days Return  --}}
                </h4>

                <span class="s-text11 t-center">
                    {{--  Simply return it within 30 days for an exchange.  --}}
                    Просто верните его в течение 30 дней для обмена
                </span>
            </div>

            <div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 respon1">
                <h4 class="m-text12 t-center">
                    {{--  Store Opening  --}}
                    Открытие магазина
                </h4>

                <span class="s-text11 t-center">
                    {{--  Shop open from Monday to Sunday  --}}
                    Магазин открыт с понедельника по воскресенье
                </span>
            </div>
        </div>
    </section>
@endsection

