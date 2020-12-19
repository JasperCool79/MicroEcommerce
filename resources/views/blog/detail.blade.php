@extends('layouts.app')
@section('title','Blog Details')
@section('content')


    <!-- Content page -->
    <section class="bg0 p-t-62 p-b-60">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-9 p-b-80">
                    <div class="p-r-45 p-r-0-lg">
                        <!--  -->
                        <div class="wrap-pic-w how-pos5-parent">
                            <img src="{{'/uploads/post/'.$post->img}}" alt="IMG-BLOG">

                            <div class="flex-col-c-m size-123 bg9 how-pos5">
								<span class="ltext-107 cl2 txt-center">
									{{date_format($post->created_at,'d')}}
								</span>

                                <span class="stext-109 cl3 txt-center">
									{{date_format($post->created_at,'M-Y')}}
								</span>
                            </div>
                        </div>

                        <div class="p-t-32">
							<span class="flex-w flex-m stext-111 cl2 p-b-19">
								<span>
									<span class="cl4">By</span>
									<span class="cl12 m-l-4 m-r-6">|</span>
                                    Admin
								</span>

								<span>
									<span class="cl12 m-l-4 m-r-6">|</span>
                                    {{date_format($post->created_at,'d-M-Y')}}
								</span>
							</span>

                            <h4 class="ltext-109 cl2 p-b-28">
                                {{$post->title}}
                            </h4>

                            <p class="stext-117 cl6 p-b-26">
                                {{$post->content}}
                            </p>

                        </div>
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
                                        <a href="{{route('product_category.show',['id'=>$category->id])}}"
                                           class="dis-block stext-115 cl6 hov-cl1 trans-04 p-tb-8 p-lr-4">
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
                                            <img class="img-fluid"
                                                 src="{{'/uploads/product/'.unserialize($product->product_img)[0]}}"
                                                 alt="PRODUCT">
                                        </a>

                                        <div class="size-215 flex-col-t p-t-8">
                                            <a href="{{route('product.details',['id'=>$product->id])}}"
                                               class="stext-116 cl8 hov-cl1 trans-04">
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
                                        <a href="{{route('product_category.show',['id'=>$category->id])}}"
                                           class="flex-w flex-sb-m stext-115 cl6 hov-cl1 trans-04 p-tb-2">
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