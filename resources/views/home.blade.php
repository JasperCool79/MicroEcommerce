@extends('layouts.app')
@section('title','JC Shop')
@section('content')


    <!-- Slider -->
    <section class="section-slide">
        <div class="wrap-slick1">
            <div class="slick1">
                @foreach($categories as $category)

                    <div class="item-slick1"
                         style="background-image: url({{'/uploads/category/banner_img/'.$category->banner_img}});">
                        <div class="container h-full">
                            <div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
                                <div class="layer-slick1 animated visible-false" data-appear="fadeInDown"
                                     data-delay="0">
                                <span class="ltext-101 cl2 respon2">
									{{$category->title}}
								</span>
                                </div>

                                <div class="layer-slick1 animated visible-false" data-appear="fadeInUp"
                                     data-delay="800">
                                    <h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1">
                                        {{$category->subtitle}}
                                    </h2>
                                </div>

                                <div class="layer-slick1 animated visible-false" data-appear="zoomIn" data-delay="1600">
                                    <a href="product.html"
                                       class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
                                        Shop Now
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                @endforeach
            </div>
        </div>
    </section>


    <!-- Banner Start -->
    <div class="sec-banner bg0 p-t-80 p-b-50">
        <div class="container">
            <div class="p-b-10">
                <h3 class="ltext-103 cl5 text-center">
                    Product Categories
                </h3>
            </div>
            <div class="row d-flex align-self-start">

            @foreach($categories as $category)
                <!-- One Categories Start -->
                    <div class="col-sm-6 col-md-4 col-lg-3 p-b-30">
                        <!-- Block1 -->
                        <div class="block1 wrap-pic-w">
                            <img src="{{'/uploads/category/sub_banner_img/'.$category->sub_banner_img}}"
                                 alt="IMG-BANNER">

                            <a href="product.html"
                               class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
                                <div class="block1-txt-child1 flex-col-l">
                                <span class="block1-name ltext-102 trans-04 p-b-8">
									{{$category->name}}
								</span>

                                    <span class="block1-info stext-102 trans-04">
									{{$category->title}}
								</span>
                                </div>

                                <div class="block1-txt-child2 p-b-4 trans-05">
                                    <div class="block1-link stext-101 cl0 trans-09">
                                        Shop Now
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- One Categories End -->
                @endforeach

            </div>
        </div>
    </div>

    <!-- Banner Start -->


    <!-- Product -->

    @if(count($new_products)>0)
        <section class="bg0 p-t-23 p-b-140">
            <div class="container">
                <div class="p-b-10">
                    <h3 class="ltext-103 cl5 mb-3 text-center">
                        အသစ်ရောက်ပစ္စည်းများ
                    </h3>
                </div>
                <div class="row isotope-grid">
                    @foreach($new_products as $product)

                        <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
                            <!-- Block2 -->
                            <div class="block2">
                                <div class="block2-pic hov-img0">
                                    <img src="{{'/uploads/product/'.unserialize($product->product_img)[0]}}"
                                         alt="IMG-PRODUCT">

                                    <a href="{{route('product.details',['id'=>$product->id])}}"
                                       class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal">
                                        Quick View
                                    </a>
                                </div>

                                <div class="block2-txt flex-w flex-t p-t-14">
                                    <div class="block2-txt-child1 flex-col-l ">
                                        <a href="{{route('product.details',['id'=>$product->id])}}"
                                           class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                            {{$product->title}}
                                        </a>

                                        <span class="stext-105 cl3">
											{{$product->price}}/-Ks
										</span>
                                    </div>

                                    <div class="block2-txt-child2 flex-r p-t-3">
                                        <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                            <img class="icon-heart1 dis-block trans-04"
                                                 src="{{asset('images/icons/icon-heart-01.png')}}" alt="ICON">
                                            <img class="icon-heart2 dis-block trans-04 ab-t-l"
                                                 src="{{asset('images/icons/icon-heart-02.png')}}" alt="ICON">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    @endforeach
                </div>

                <!-- Pagination Start -->
                <div class="row justify-content-center">
                    {{$new_products->links()}}
                </div>
                <!-- Pagination -->

            </div>
        </section>
    @endif

    @if(count($best_sellings)>0)
        <section class="bg0 p-t-23 p-b-140">
            <div class="container">
                <div class="p-b-10">
                    <h3 class="ltext-103 cl5 mb-3 text-center">
                        Bestselling Products
                    </h3>
                </div>
                <div class="row isotope-grid">
                    @foreach($best_sellings as $best_selling)

                        <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
                            <!-- Block2 -->
                            <div class="block2">
                                <div class="block2-pic hov-img0">
                                    <img src="{{'/uploads/product/'.unserialize($best_selling->product_img)[0]}}"
                                         alt="IMG-PRODUCT">

                                    <a href="{{route('product.details',['id'=>$best_selling->id])}}"
                                       class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal">
                                        Quick View
                                    </a>
                                </div>

                                <div class="block2-txt flex-w flex-t p-t-14">
                                    <div class="block2-txt-child1 flex-col-l ">
                                        <a href="{{route('product.details',['id'=>$best_selling->id])}}"
                                           class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                            {{$best_selling->title}}
                                        </a>

                                        <span class="stext-105 cl3">
											{{$best_selling->price}}/-Ks
										</span>
                                    </div>

                                    <div class="block2-txt-child2 flex-r p-t-3">
                                        <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                            <img class="icon-heart1 dis-block trans-04"
                                                 src="{{asset('images/icons/icon-heart-01.png')}}" alt="ICON">
                                            <img class="icon-heart2 dis-block trans-04 ab-t-l"
                                                 src="{{asset('images/icons/icon-heart-02.png')}}" alt="ICON">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    @endforeach
                </div>

                <!-- Pagination Start -->
                <div class="row justify-content-center">
                    {{$best_sellings->links()}}
                </div>
                <!-- Pagination -->

            </div>
        </section>
    @endif

    @if(count($populars)>0)
        <section class="bg0 p-t-23 p-b-140">
            <div class="container">
                <div class="p-b-10">
                    <h3 class="ltext-103 cl5 mb-3 text-center">
                        Populars Products
                    </h3>
                </div>
                <div class="row isotope-grid">
                    @foreach($populars as $best_selling)

                        <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
                            <!-- Block2 -->
                            <div class="block2">
                                <div class="block2-pic hov-img0">
                                    <img src="{{'/uploads/product/'.unserialize($best_selling->product_img)[0]}}"
                                         alt="IMG-PRODUCT">

                                    <a href="{{route('product.details',['id'=>$best_selling->id])}}"
                                       class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal">
                                        Quick View
                                    </a>
                                </div>

                                <div class="block2-txt flex-w flex-t p-t-14">
                                    <div class="block2-txt-child1 flex-col-l ">
                                        <a href="{{route('product.details',['id'=>$best_selling->id])}}"
                                           class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                            {{$best_selling->title}}
                                        </a>

                                        <span class="stext-105 cl3">
											{{$best_selling->price}}/-Ks
										</span>
                                    </div>

                                    <div class="block2-txt-child2 flex-r p-t-3">
                                        <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                            <img class="icon-heart1 dis-block trans-04"
                                                 src="{{asset('images/icons/icon-heart-01.png')}}" alt="ICON">
                                            <img class="icon-heart2 dis-block trans-04 ab-t-l"
                                                 src="{{asset('images/icons/icon-heart-02.png')}}" alt="ICON">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    @endforeach
                </div>

                <!-- Pagination Start -->
                <div class="row justify-content-center">
                    {{$populars->links()}}
                </div>
                <!-- Pagination -->

            </div>
        </section>
    @endif


@endsection