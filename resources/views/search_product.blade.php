@extends('layouts.app')
@section('title','Search Product')
@section('content')

    <!-- Product -->
    <div class="bg0 m-t-23 p-b-140">
        <div class="container mt-5 py-5">
            <div class="p-b-10">
                <h3 class="ltext-103 cl5 mb-3 text-center">
                    <span class="small">Search Result For</span> <span class="text-success">{{$search}}</span>
                </h3>
            </div>

            <div class="row isotope-grid">

                @if(count($products)==0)
                    <div class="p-b-10">
                        <h3 class="ltext-103 cl5 mb-3 text-center text-info">
                            <span class="small">
                                There is No Product For
                                </span>
                                <i class="fa fa-arrow-circle-right text-warning font-weight-bold">
                                    {{$search}}
                                </i>


                        </h3>
                    </div>
                @else
                    @foreach($products as $product)

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
                                            {{$product->name}}
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
                @endif
            </div>


            <!-- Pagination Start -->
        <div class="row justify-content-center">
        {{$products->links()}}
        </div>
        <!-- Pagination -->
        </div>
    </div>

@endsection