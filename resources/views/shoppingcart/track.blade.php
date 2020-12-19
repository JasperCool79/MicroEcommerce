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
				Track Your Order
			</span>
        </div>
    </div>

    <div class="container py-3">
        <div class="col-12 mb-3">
            <form action="{{route('track.order.show')}}" method="post">
                {{csrf_field()}}
                @include('admin.layout.noti')
                <div class="form-group">
                    <input type="text" class="form-control" name="order_id" id="order_id" placeholder="Enter Your Order Number eg: 1573652461">
                </div>
                <button type="submit" class="btn btn-primary">Find Order</button>
            </form>
        </div>
    </div>




@endsection