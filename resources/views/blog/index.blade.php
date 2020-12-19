@extends('layouts.app')
@section('title','Blog Home')
@section('content')

    <!-- Title page -->
    <section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url({{asset('images/bg-02.png')}});">
        <h2 class="ltext-105 cl0 txt-center">
            Blog
        </h2>
    </section>


    <!-- Content page -->
    <section class="bg0 p-t-62 p-b-60">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-9 p-b-80">
                    <div class="p-r-45 p-r-0-lg">
                        <!-- item blog -->
                        @foreach($posts as $post)
                        <div class="p-b-63">
                            <a href="{{route('blog.show',['id'=>$post->id])}}" class="hov-img0 how-pos5-parent">
                                <img src="{{'/uploads/post/'.$post->img}}" alt="IMG-BLOG">

                                <div class="flex-col-c-m size-123 bg9 how-pos5">
									<span class="ltext-107 cl2 txt-center">
										{{date_format($post->created_at,'d')}}
									</span>

                                    <span class="stext-109 cl3 txt-center">
										{{date_format($post->created_at,'M-Y')}}
									</span>
                                </div>
                            </a>

                            <div class="p-t-32">
                                <h4 class="p-b-15">
                                    <a href="{{route('blog.show',['id'=>$post->id])}}" class="ltext-108 cl2 hov-cl1 trans-04">
                                        {{$post->title}}
                                    </a>
                                </h4>

                                <p class="stext-117 cl6">
                                    {{substr($post->content,0,150)}}
                                </p>

                                <div class="flex-w flex-sb-m p-t-18">
									<span class="flex-w flex-m stext-111 cl2 p-r-30 m-tb-10">
										<span>
											<span class="cl4">By</span>
											<span class="cl12 m-l-4 m-r-6">|</span>
                                            Admin
										</span>
									</span>

                                    <a href="{{route('blog.show',['id'=>$post->id])}}" class="stext-101 cl2 hov-cl1 trans-04 m-tb-10">
                                        Continue Reading

                                        <i class="fa fa-long-arrow-right m-l-9"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    <!-- Pagination Start -->
                        <div class="row justify-content-center">
                            {{$posts->links()}}
                        </div>
                        <!-- Pagination -->
                    </div>
                </div>

                <div class="col-md-4 col-lg-3 p-b-80">
                    <div class="side-menu">

                        <div class="p-t-55">
                            <h4 class="mtext-112 cl2 p-b-33">
                                Categories
                            </h4>

                            <ul>
                                @foreach($categories as $category)
                                    <li class="bor18">
                                        <a href="{{route('product_category.show',['id'=>$category->id])}}" class="dis-block stext-115 cl6 hov-cl1 trans-04 p-tb-8 p-lr-4">
                                            {{$category->name}}
                                        </a>
                                    </li>
                                    @endforeach
                            </ul>
                        </div>

                        <div class="p-t-65">
                            <h4 class="mtext-112 cl2 p-b-33">
                                Latest Products
                            </h4>

                            <ul>
                                @foreach($latest_products as $product)

                                    <li class="flex-w flex-t p-b-30">
                                        <a href="#" class="wrao-pic-w size-214 hov-ovelay1 m-r-20">
                                            <img class="img-fluid" src="{{'/uploads/product/'.unserialize($product->product_img)[0]}}" alt="PRODUCT">
                                        </a>

                                        <div class="size-215 flex-col-t p-t-8">
                                            <a href="{{route('product.details',['id'=>$product->id])}}" class="stext-116 cl8 hov-cl1 trans-04">
                                                {{$product->title}}
                                            </a>

                                            <span class="stext-116 cl6 p-t-20">
											{{$product->price}}/-Ks
										</span>
                                        </div>
                                    </li>

                                    @endforeach
                            </ul>
                        </div>

                        <div class="p-t-55">
                            <h4 class="mtext-112 cl2 p-b-20">
                                Products Count In Each Category
                            </h4>

                            <ul>
                                @foreach($categories as $category)
                                    <li class="p-b-7">
                                        <a href="{{route('product_category.show',['id'=>$category->id])}}" class="flex-w flex-sb-m stext-115 cl6 hov-cl1 trans-04 p-tb-2">
                                            <span>
                                                {{$category->name}}
                                            </span>
                                            <span>
                                                {{count($category->products)}}
                                            </span>
                                        </a>
                                    </li>
                                    @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection