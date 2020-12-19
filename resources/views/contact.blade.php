@extends('layouts.app')
@section('title','Blog Home')
@section('content')

    <!-- Title page -->
    <section class="bg-img1 txt-center p-lr-15 p-tb-92 img-box" style="background-image: url({{asset('images/bg-02.png')}});">
        <h2 class="ltext-105 cl0 txt-center">
            Contact
        </h2>
    </section>

    <!-- Content page -->
    <section class="bg0 p-t-104 p-b-116 mb-0 pb-0 pt-2">
        <div class="container">
            <div class="flex-w flex-tr">
                <div class="size-210 bor10 p-lr-70 p-t-55 p-b-70 p-lr-15-lg w-full-md">
                    <form action="{{route('send.message')}}" method="post">
                        {{csrf_field()}}
                        @include('admin.layout.noti')
                        <h4 class="mtext-105 cl2 txt-center p-b-30">
                            Send Us A Message
                        </h4>

                        <div class="bor8 m-b-20 how-pos4-parent">
                            <input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="name" placeholder="Enter Your Name">
                             <img class="how-pos4 pointer-none" src="{{asset('images/icons/icon-email.png')}}" alt="ICON">
                        </div>
                        <div class="bor8 m-b-20 how-pos4-parent">
                            <input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="email" name="email" placeholder="Your Email Address">
                            <img class="how-pos4 pointer-none" src="{{asset('images/icons/icon-email.png')}}" alt="ICON">
                        </div>

                        <div class="bor8 m-b-30">
                            <textarea class="stext-111 cl2 plh3 size-120 p-lr-28 p-tb-25" name="message" placeholder="How Can We Help?"></textarea>
                        </div>

                        <button class="flex-c-m stext-101 cl0 size-121 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer">
                            Submit
                        </button>
                    </form>
                </div>

                <div class="size-210 bor10 flex-w flex-col-m p-lr-93 p-tb-30 p-lr-15-lg w-full-md">
                    <div class="flex-w w-full p-b-42">
                        <span class="fs-18 cl5 txt-center size-211">
							<span class="lnr lnr-map-marker"></span>
                        </span>

                        <div class="size-212 p-t-2">
                            <span class="mtext-110 cl2">
								Address
							</span>

                            <p class="stext-115 cl6 size-213 p-t-18">
                                {{env('OWNER_ADDRESS')}}
                            </p>
                        </div>
                    </div>

                    <div class="flex-w w-full p-b-42">
                        <span class="fs-18 cl5 txt-center size-211">
							<span class="lnr lnr-phone-handset"></span>
                        </span>

                        <div class="size-212 p-t-2">
                            <span class="mtext-110 cl2">
								Lets Talk
							</span>

                            <p class="stext-115 cl1 size-213 p-t-18">
                                {{env('OWNER_PHONE')}}
                            </p>
                        </div>
                    </div>

                    <div class="flex-w w-full">
                        <span class="fs-18 cl5 txt-center size-211">
							<span class="lnr lnr-envelope"></span>
                        </span>

                        <div class="size-212 p-t-2">
                            <span class="mtext-110 cl2">
								Sale Support
							</span>

                            <p class="stext-115 cl1 size-213 p-t-18">
                                {{env('OWNER_EMAIL')}}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-dark py-5 mb-0 mt-2">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h3 class="text-center text-white pb-2 mb-2">Live Contact</h3>
                    <div class="mb-2">
                        <a href="{{env('FBPAGE')}}" class="mx-sm-4 mx-2"><i class="fa fa-facebook fa-2x text-primary"></i></a>
                        <a href="{{env('MESSENGER')}}" class="mx-sm-4 mx-2"><i class="fab fa-facebook-messenger fa-2x text-primary"></i></a>
                        <a href="" class="mx-sm-4 mx-2"><i class="fa fa-twitter fa-2x text-primary"></i></a>
                        <a href="" class="mx-sm-4 mx-2"><i class="fa fa-youtube fa-2x text-danger"></i></a>
                        <a href="" class="mx-sm-4 mx-2"><i class="fa fa-instagram fa-2x text-primary"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection