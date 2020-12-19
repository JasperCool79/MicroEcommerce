@extends('layouts.app')
@section('title','All Cart')
@section('content')


    <!-- breadcrumb -->
    <div class="container">
        <div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
            <a href="/" class="stext-109 cl8 hov-cl1 trans-04">
                Home
                <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
            </a>

            <span class="stext-109 cl4">
				Shoping Cart
			</span>
        </div>
    </div>


    <!-- Shoping Cart -->
    <form class="bg0 p-t-75 p-b-85">
        <div class="container">
            <div class="row">
                <div class="col-12 m-lr-auto m-b-50">
                    <div class="m-l-25 m-r--38 m-lr-0-xl">
                        <div class="wrap-table-shopping-cart">
                            <table class="table-shopping-cart">
                                <tr class="table_head">
                                    <th class="column-1">Product</th>
                                    <th class="column-3">Product Name</th>
                                    <th class="column-3">Price</th>
                                    <th class="column-4">Quantity</th>
                                    <th class="column-5">Options</th>
                                    <th class="column-5">Total</th>
                                </tr>

                                @if(count(Cart::content())>0)
                                    @foreach(Cart::content() as $product)
                                        <tr class="table_row">
                                            <td class="column-1">
                                                <a href="{{route('cart.delete',['id'=>$product->rowId])}}">
                                                <div class="how-itemcart1">
                                                    <img src="{{'/uploads/product/'.unserialize($product->model->product_img)[0]}}"
                                                         alt="IMG">
                                                </div>
                                            </a>
                                            </td>
                                            <td class="column-3">{{$product->name}}</td>
                                            <td class="column-3">
                                                    {{number_format($product->price)}}/-Ks
                                            </td>
                                            <td class="column-4">
                                                <div class="wrap-num-product flex-w m-l-auto m-r-0">
                                                    <div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
                                                        <a class="d-inline-block"
                                                           href="{{route('cart.decrease',['id'=>$product->rowId,'qty'=>$product->qty])}}">
                                                            <span class="fs-16 zmdi zmdi-minus"></span></a>
                                                    </div>

                                                    <input class="mtext-104 cl3 txt-center num-product" type="number"
                                                           name="qty" value="{{$product->qty}}">

                                                    <div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
                                                        <a class="d-inline-block"
                                                           href="{{route('cart.increase',['id'=>$product->rowId,'qty'=>$product->qty])}}"><span
                                                                    class="fs-16 zmdi zmdi-plus"></span></a>
                                                    </div>
                                                </div>
                                            </td>

                                            @if($product->options)
                                                <td class="column-5">
                                                @foreach($product->options as $key=>$value)
                                                    @if($value!=null)
                                                      <span class="small text-primary">  {{$key}} <i class="fa fa-arrow-circle-right text-danger"></i> {{$value}}<br></span>
                                                        @endif
                                                    @endforeach
                                                </td>
                                                @endif
                                            <td class="column-5">
                                                <span class="samll text-warning">
                                                    {{$product->qty * $product->price}}/-Ks
                                                </span>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="7">

                                                <h4 class="py-3 text-center">
                                                    There is No Items
                                                    <a href="/">Continute Shopping</a>
                                                </h4>
                                        </td>
                                    </tr>
                                @endif

                            </table>
                        </div>

                        <div class="flex-w flex-sb-m bor15 p-t-18 p-b-15 p-lr-40 p-lr-15-sm">
                            <div class="flex-w flex-m m-r-20 m-tb-5">
                                <div class="flex-c-m stext-101 cl2 size-118 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-5">
                                    <a href="{{route('cart')}}" class="text-danger">Uptate Cart</a>
                                </div>
                            </div>

                            <div class="disabled flex-c-m stext-101 cl2 size-119 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-10">
                                All Total &nbsp;&nbsp;{{Cart::subtotal()}}/-Ks
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </form>

    @if(count(Cart::content())>0)
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center">Fill Your Information To Order</h3>
                        @if(!Auth::check())
                            <h5 class="text-center text-danger mt-2">You aren't login ! Remember Your Order Number after complete order to track orders</h5>
                        @endif
                    </div>
                    <div class="card-body">
                        <form action="{{route('make.order')}}" method="post">
                            @include('admin.layout.noti')
                            {{csrf_field()}}
                            @if(Auth::check())
                                <input type="hidden" value="{{Auth::user()->id}}" name="user_id">
                                @endif
                            <input type="hidden" value="{{Cart::subtotal()}}" name="total_cost">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Your Name" @if(Auth::check()) value="{{Auth::user()->name}}" @endif>
                            </div>
                            <div class="form-group">
                                <label for="email">Email address</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="If you don't have , Skip " @if(Auth::check()) value="{{Auth::user()->email}}" @endif>
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone Number</label>
                                <input type="number" class="form-control" name="phone" id="phone" placeholder="Please Fill Your Phone Number Exactly" @if(Auth::check()) value="{{Auth::user()->phone}}" @endif>
                            </div>
                            <div class="form-group">
                                <label for="address">Your Address</label>
                                <input type="text" class="form-control" name="address" id="address" placeholder="Please Fill Your Address Exactly" @if(Auth::check()) value="{{Auth::user()->address}}" @endif>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-lg btn-success">Order Now</button>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer">
                        ၁။ မိမိကိုယ်တိုင်မှာယူခြင်း အမည်၊ဖုန်းနံပတ်၊နေရပ်လိပ်စာစသည့်အသေးစိတ်အချက်အလက်များကိုဖြည့်စွက် ၍ &nbsp;&nbsp;<span class="text-success h4 font-weight-bold">Order Now</span>&nbsp;&nbsp; နှိပ်လိုက်လျင်ရပါပြီ၊ customer service မှ ၂၄နာရီ အတွင်းဆက်သွယ်လာပါမည်။<br />
                        ၂။ဖုန်းဖြင့်မှာယူခြင်း - Company ဖုန်း {{env('OWNER_PHONE')}}<br />
                        ၃။Page messenger မှမှာယူခြင်း ၊ page service မှ သင်ကိုဝန်ဆောင်မှုပေးပြီးမှာယူနိုင်ပါသည်။<br />
                        အထူူးပြော ပြချက်-မြို ပေါင်း( 120) ကို အိမ်အရောက် ငွေ ချေ စနစ် /ဘဏ်လွှဲ စနစ်ဖြင့် 7ရက် မှ12 ရက် အတွင်း အရောက် ပို့ ဆောင် ပေး နေ ပြီး ဖြစ် ကြောင်း အသိပေး အကြောင်း ကြား အပ်ပါသည်။မင်္ဂလာ ရှိ သော ရက် မြတ် လေး ဖြစ် ပါ စေ ရှင့်။
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif




@endsection