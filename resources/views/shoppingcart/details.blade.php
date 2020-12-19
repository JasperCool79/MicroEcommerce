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
				Order Details
			</span>
        </div>
    </div>

    <div class="container py-3">
        <div class="col-12 mb-3">
            <table class="table table-dark text-white bg-dark table-hover text-center">
                <thead>
                <tr>
                    <td>Product</td>
                    <td>Product Name</td>
                    <td>Price</td>
                    <td>Qty</td>
                    <td>Option</td>
                    <td>Total</td>
                </tr>
                </thead>
                <tbody>
                @foreach(unserialize($order->cart_items) as $mainKey=>$value)
                    <tr>
                        <td>
                            @if(\App\Product::find($value->id))
                                <img class="img-fluid border rounded" style="width: 60px; height: 60px;"
                                     src="{{'/uploads/product/'.unserialize(\App\Product::find($value->id)->product_img)[0]}}"
                                     alt="IMG">
                            @else
                                Product Photo
                            @endif
                        </td>
                        <td>{{$value->name}}</td>
                        <td>{{number_format($value->price)}}/-Ks</td>
                        <td>{{$value->qty}}</td>
                        <td>
                            @foreach($value->options as $key=>$op)
                                @if($op)
                                    <span class="small text-primary">
                                        {{$key}} <i class="fa fa-arrow-circle-right text-danger"></i> {{$op}}<br>
                                    </span>
                                @endif
                            @endforeach
                        </td>
                        <td>{{number_format($value->subtotal)}}/-Ks</td>
                    </tr>


                @endforeach
                <tr class="bg-danger">
                    <td colspan="3">
                        <h3> Total Cost</h3>
                    </td>
                    <td colspan="3">
                        <h3> {{$order->total_cost}}/-Ks </h3>
                    </td>
                </tr>
                <tr>
                    <td colspan="3">Shopper's Name</td>
                    <td colspan="3">{{$order->user_name}}</td>
                </tr>
                <tr>
                    <td colspan="3">Shopper's Phone Number</td>
                    <td colspan="3">{{$order->phone}}</td>
                </tr>
                <tr class="bg-info">
                    <td colspan="3">Delivery Address</td>
                    <td colspan="3">{{$order->address}}</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>




@endsection